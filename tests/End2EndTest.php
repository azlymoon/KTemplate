<?php

use PHPUnit\Framework\TestCase;
use KTemplate\Compile\Compiler;
use KTemplate\Renderer;
use KTemplate\DataKey;
use KTemplate\DataProviderInterface;
use KTemplate\Internal\Strings;

class End2EndTest extends TestCase {
    public function testSingleFile() {
        $dir = __DIR__ . '/testdata/end2end/singlefile';
        $tests = [];
        foreach (scandir($dir) as $filename) {
            if (Strings::hasPrefix($filename, '.')) {
                continue;
            }
            if (Strings::hasSuffix($filename, '.golden')) {
                continue;
            }
            $tests[] = $filename;
        }

        $compiler = new Compiler();
        $renderer = new Renderer();
        $data_provider = new SimpleTestDataProvider();
        foreach ($tests as $test) {
            $full_name = "$dir/$test";
            $source = (string)file_get_contents($full_name);
            $t = $compiler->compile($full_name, $source);
            $data_provider->setTestName($test);
            $have = $renderer->render($t, $data_provider);
            if (!file_exists("$dir/$test.golden")) {
                file_put_contents("$dir/$test.golden", $have);
                $this->fail("$test: no output file found, auto-creating one");
            }
            $want = file_get_contents("$dir/$test.golden");
            $this->assertEquals($have, $want);
        }
    }
}

class SimpleTestDataProvider implements DataProviderInterface {
    private $test_name;

    public function __construct() {
    }

    public function setTestName($name) {
        $this->test_name = $name;
    }

    public function getData($key) {
        switch ($key->part1) {
        case 'test_name':
            return $key->num_parts === 1 ? $this->test_name : null;
        }
        return null;
    }
}
