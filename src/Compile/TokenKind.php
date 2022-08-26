<?php

namespace KTemplate\Compile;

// File generated by gen_tokens/main.go; DO NOT EDIT!

class TokenKind {
    public const UNSET = 0;
    
    public const EOF = 1;
    public const ERROR = 2;
    public const ECHO_START = 3; // {{
    public const ECHO_END = 4; // }}
    public const CONTROL_START = 5; // {%
    public const CONTROL_END = 6; // %}
    public const COMMENT = 7; // {# ... #}
    public const PLUS = 8; // +
    public const MINUS = 9; // -
    public const STAR = 10; // *
    public const SLASH = 11; // /
    public const LPAREN = 12; // (
    public const RPAREN = 13; // )
    public const TILDE = 14; // ~
    public const DOT = 15; // .
    public const EQ = 16; // ==
    public const NOT_EQ = 17; // !=
    public const LT = 18; // <
    public const GT = 19; // >
    public const LT_EQ = 20; // <=
    public const GT_EQ = 21; // >=
    public const ASSIGN = 22; // =
    public const PIPE = 23; // |
    public const COMMA = 24; // ,
    public const LBRACKET = 25; // [
    public const RBRACKET = 26; // ]
    public const PERCENT = 27; // %
    public const KEYWORD_OR = 28;
    public const KEYWORD_IF = 29;
    public const KEYWORD_DO = 30;
    public const KEYWORD_AND = 31;
    public const KEYWORD_FOR = 32;
    public const KEYWORD_USE = 33;
    public const KEYWORD_SET = 34;
    public const KEYWORD_NOT = 35;
    public const KEYWORD_TRUE = 36;
    public const KEYWORD_FALSE = 37;
    public const KEYWORD_END = 38;
    public const KEYWORD_ELSE = 39;
    public const KEYWORD_ELSEIF = 40;
    public const KEYWORD_LET = 41;
    public const KEYWORD_IN = 42;
    public const KEYWORD_NULL = 43;
    public const KEYWORD_INCLUDE = 44;
    public const KEYWORD_PARAM = 45;
    public const KEYWORD_ARG = 46;
    public const DOLLAR_IDENT = 47;
    public const IDENT = 48;
    public const TEXT = 49;
    public const INT_LIT = 50;
    public const FLOAT_LIT = 51;
    public const STRING_LIT_Q1 = 52;
    public const STRING_LIT_Q2 = 53;

    /**
     * @param int $kind
     * @return bool
     */
    public static function hasValue($kind) {
        switch ($kind) {
        case self::COMMENT:
        case self::DOLLAR_IDENT:
        case self::IDENT:
        case self::TEXT:
        case self::INT_LIT:
        case self::FLOAT_LIT:
        case self::STRING_LIT_Q1:
        case self::STRING_LIT_Q2:
            return true;
        default:
            return false;
        }
    }

    /**
     * @param int $kind
     * @return string
     */
    public static function prettyName($kind) {
        switch ($kind) {
        case self::ECHO_START:
            return '{{';
        case self::ECHO_END:
            return '}}';
        case self::CONTROL_START:
            return '{%';
        case self::CONTROL_END:
            return '%}';
        case self::COMMENT:
            return '{# ... #}';
        case self::PLUS:
            return '+';
        case self::MINUS:
            return '-';
        case self::STAR:
            return '*';
        case self::SLASH:
            return '/';
        case self::LPAREN:
            return '(';
        case self::RPAREN:
            return ')';
        case self::TILDE:
            return '~';
        case self::DOT:
            return '.';
        case self::EQ:
            return '==';
        case self::NOT_EQ:
            return '!=';
        case self::LT:
            return '<';
        case self::GT:
            return '>';
        case self::LT_EQ:
            return '<=';
        case self::GT_EQ:
            return '>=';
        case self::ASSIGN:
            return '=';
        case self::PIPE:
            return '|';
        case self::COMMA:
            return ',';
        case self::LBRACKET:
            return '[';
        case self::RBRACKET:
            return ']';
        case self::PERCENT:
            return '%';
        default:
            return strtolower(self::name($kind));
        }
    }

    /**
     * @param int $kind
     * @return string
     */
    public static function name($kind) {
        switch ($kind) {
        case self::EOF:
            return 'EOF';
        case self::ERROR:
            return 'ERROR';
        case self::ECHO_START:
            return 'ECHO_START';
        case self::ECHO_END:
            return 'ECHO_END';
        case self::CONTROL_START:
            return 'CONTROL_START';
        case self::CONTROL_END:
            return 'CONTROL_END';
        case self::COMMENT:
            return 'COMMENT';
        case self::PLUS:
            return 'PLUS';
        case self::MINUS:
            return 'MINUS';
        case self::STAR:
            return 'STAR';
        case self::SLASH:
            return 'SLASH';
        case self::LPAREN:
            return 'LPAREN';
        case self::RPAREN:
            return 'RPAREN';
        case self::TILDE:
            return 'TILDE';
        case self::DOT:
            return 'DOT';
        case self::EQ:
            return 'EQ';
        case self::NOT_EQ:
            return 'NOT_EQ';
        case self::LT:
            return 'LT';
        case self::GT:
            return 'GT';
        case self::LT_EQ:
            return 'LT_EQ';
        case self::GT_EQ:
            return 'GT_EQ';
        case self::ASSIGN:
            return 'ASSIGN';
        case self::PIPE:
            return 'PIPE';
        case self::COMMA:
            return 'COMMA';
        case self::LBRACKET:
            return 'LBRACKET';
        case self::RBRACKET:
            return 'RBRACKET';
        case self::PERCENT:
            return 'PERCENT';
        case self::KEYWORD_OR:
            return 'OR';
        case self::KEYWORD_IF:
            return 'IF';
        case self::KEYWORD_DO:
            return 'DO';
        case self::KEYWORD_AND:
            return 'AND';
        case self::KEYWORD_FOR:
            return 'FOR';
        case self::KEYWORD_USE:
            return 'USE';
        case self::KEYWORD_SET:
            return 'SET';
        case self::KEYWORD_NOT:
            return 'NOT';
        case self::KEYWORD_TRUE:
            return 'TRUE';
        case self::KEYWORD_FALSE:
            return 'FALSE';
        case self::KEYWORD_END:
            return 'END';
        case self::KEYWORD_ELSE:
            return 'ELSE';
        case self::KEYWORD_ELSEIF:
            return 'ELSEIF';
        case self::KEYWORD_LET:
            return 'LET';
        case self::KEYWORD_IN:
            return 'IN';
        case self::KEYWORD_NULL:
            return 'NULL';
        case self::KEYWORD_INCLUDE:
            return 'INCLUDE';
        case self::KEYWORD_PARAM:
            return 'PARAM';
        case self::KEYWORD_ARG:
            return 'ARG';
        case self::DOLLAR_IDENT:
            return 'DOLLAR_IDENT';
        case self::IDENT:
            return 'IDENT';
        case self::TEXT:
            return 'TEXT';
        case self::INT_LIT:
            return 'INT_LIT';
        case self::FLOAT_LIT:
            return 'FLOAT_LIT';
        case self::STRING_LIT_Q1:
            return 'STRING_LIT_Q1';
        case self::STRING_LIT_Q2:
            return 'STRING_LIT_Q2';
        default:
            return '?';
        }
    }
}
