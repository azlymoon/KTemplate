<?php

namespace KTemplate;

use KTemplate\Internal\Strings;

class FunctionLib {
    /**
     * @param Context $ctx
     * @param Engine $engine
     */
    public static function registerAllFunctions($ctx, $engine) {
        self::registerMin($ctx, $engine);
        self::registerMax($ctx, $engine);
        self::registerDate($ctx, $engine);
        self::registerContains($ctx, $engine);
    }

    /**
     * @param Context $ctx
     * @param Engine $engine
     */
    public static function registerMin($ctx, $engine) {
        $engine->registerFunction2('min', function ($x, $y) {
            return min($x, $y);
        });
        $engine->registerFunction3('min', function ($x, $y, $z) {
            return min($x, $y, $z);
        });
    }

    /**
     * @param Context $ctx
     * @param Engine $engine
     */
    public static function registerMax($ctx, $engine) {
        $engine->registerFunction2('max', function ($x, $y) {
            return max($x, $y);
        });
        $engine->registerFunction3('max', function ($x, $y, $z) {
            return max($x, $y, $z);
        });
    }

    /**
     * @param Context $ctx
     * @param Engine $engine
     */
    public static function registerDate($ctx, $engine) {
        $engine->registerFunction0('date', function () {
            return strtotime('now');
        });
        $engine->registerFunction1('date', function ($format) {
            return strtotime($format);
        });
    }

    /**
     * @param Context $ctx
     * @param Engine $engine
     */
    public static function registerContains($ctx, $engine) {
        $engine->registerFunction2('contains', function ($seq, $x) {
            if (is_string($seq)) {
                return Strings::contains($seq, (string)$x);
            }
            if (is_array($seq)) {
                return in_array($x, $seq);
            }
            return false;
        });
    }
}
