<?php

namespace KTemplate;

// File generated by gen_opcodes/main.go; DO NOT EDIT!

use KTemplate\Compile\Types;

class Op {
    public const UNKNOWN = 0;
    
    // Encoding: 0x01
    // Result type: unknown/varying
    public const RETURN = 1;
    
    // Encoding: 0x02 arg:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const OUTPUT = 2;
    
    // Encoding: 0x03
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const OUTPUT_SLOT0 = 3;
    
    // Encoding: 0x04 arg:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const OUTPUT_SAFE = 4;
    
    // Encoding: 0x05
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const OUTPUT_SAFE_SLOT0 = 5;
    
    // Encoding: 0x06 val:strindex
    // Result type: unknown/varying
    public const OUTPUT_STRING_CONST = 6;
    
    // Encoding: 0x07 val:strindex
    // Result type: unknown/varying
    public const OUTPUT_SAFE_STRING_CONST = 7;
    
    // Encoding: 0x08 val:intindex
    // Result type: unknown/varying
    public const OUTPUT_SAFE_INT_CONST = 8;
    
    // Encoding: 0x09 cache:cacheslot k:keyoffset escapebit:imm8
    // Result type: unknown/varying
    public const OUTPUT_EXTDATA_1 = 9;
    
    // Encoding: 0x0a cache:cacheslot k:keyoffset escapebit:imm8
    // Result type: unknown/varying
    public const OUTPUT_EXTDATA_2 = 10;
    
    // Encoding: 0x0b cache:cacheslot k:keyoffset escapebit:imm8
    // Result type: unknown/varying
    public const OUTPUT_EXTDATA_3 = 11;
    
    // Encoding: 0x0c dst:wslot val:imm8
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const LOAD_BOOL = 12;
    
    // Encoding: 0x0d val:imm8
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: Types::BOOL
    public const LOAD_SLOT0_BOOL = 13;
    
    // Encoding: 0x0e dst:wslot val:intindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::INT
    public const LOAD_INT_CONST = 14;
    
    // Encoding: 0x0f val:intindex
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: Types::INT
    public const LOAD_SLOT0_INT_CONST = 15;
    
    // Encoding: 0x10 dst:wslot val:floatindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::FLOAT
    public const LOAD_FLOAT_CONST = 16;
    
    // Encoding: 0x11 val:floatindex
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: Types::FLOAT
    public const LOAD_SLOT0_FLOAT_CONST = 17;
    
    // Encoding: 0x12 dst:wslot val:strindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::STRING
    public const LOAD_STRING_CONST = 18;
    
    // Encoding: 0x13 val:strindex
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: Types::STRING
    public const LOAD_SLOT0_STRING_CONST = 19;
    
    // Encoding: 0x14 dst:wslot cache:cacheslot k:keyoffset
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const LOAD_EXTDATA_1 = 20;
    
    // Encoding: 0x15 cache:cacheslot k:keyoffset
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const LOAD_SLOT0_EXTDATA_1 = 21;
    
    // Encoding: 0x16 dst:wslot cache:cacheslot k:keyoffset
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const LOAD_EXTDATA_2 = 22;
    
    // Encoding: 0x17 cache:cacheslot k:keyoffset
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const LOAD_SLOT0_EXTDATA_2 = 23;
    
    // Encoding: 0x18 dst:wslot cache:cacheslot k:keyoffset
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const LOAD_EXTDATA_3 = 24;
    
    // Encoding: 0x19 cache:cacheslot k:keyoffset
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const LOAD_SLOT0_EXTDATA_3 = 25;
    
    // Encoding: 0x1a dst:wslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NULL
    public const LOAD_NULL = 26;
    
    // Encoding: 0x1b
    // Result type: Types::NULL
    public const LOAD_SLOT0_NULL = 27;
    
    // Encoding: 0x1c dst:wslot src:rslot key:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX = 28;
    
    // Encoding: 0x1d src:rslot key:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX_SLOT0 = 29;
    
    // Encoding: 0x1e dst:wslot src:rslot key:intindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX_INT_KEY = 30;
    
    // Encoding: 0x1f src:rslot key:intindex
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX_SLOT0_INT_KEY = 31;
    
    // Encoding: 0x20 dst:wslot src:rslot key:strindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX_STRING_KEY = 32;
    
    // Encoding: 0x21 src:rslot key:strindex
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const INDEX_SLOT0_STRING_KEY = 33;
    
    // Encoding: 0x22 dst:wslot src:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const MOVE = 34;
    
    // Encoding: 0x23 src:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const MOVE_SLOT0 = 35;
    
    // Encoding: 0x24 dst:wslot src:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const MOVE_BOOL = 36;
    
    // Encoding: 0x25 src:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const MOVE_SLOT0_BOOL = 37;
    
    // Encoding: 0x26 dst:wslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const CONV_BOOL = 38;
    
    // Encoding: 0x27
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: Types::BOOL
    public const CONV_SLOT0_BOOL = 39;
    
    // Encoding: 0x28 pcdelta:rel16
    // Result type: unknown/varying
    public const JUMP = 40;
    
    // Encoding: 0x29 pcdelta:rel16 cond:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const JUMP_FALSY = 41;
    
    // Encoding: 0x2a pcdelta:rel16
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const JUMP_SLOT0_FALSY = 42;
    
    // Encoding: 0x2b pcdelta:rel16 cond:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const JUMP_TRUTHY = 43;
    
    // Encoding: 0x2c pcdelta:rel16
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const JUMP_SLOT0_TRUTHY = 44;
    
    // Encoding: 0x2d pcdelta:rel16 val:wslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const FOR_VAL = 45;
    
    // Encoding: 0x2e pcdelta:rel16 key:wslot val:wslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const FOR_KEY_VAL = 46;
    
    // Encoding: 0x2f dst:wslot arg1:rslot fn:filterid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FILTER1 = 47;
    
    // Encoding: 0x30 arg1:rslot fn:filterid
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_SLOT0_FILTER1 = 48;
    
    // Encoding: 0x31 dst:wslot arg1:rslot arg2:rslot fn:filterid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FILTER2 = 49;
    
    // Encoding: 0x32 arg1:rslot arg2:rslot fn:filterid
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_SLOT0_FILTER2 = 50;
    
    // Encoding: 0x33 dst:wslot fn:funcid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FUNC0 = 51;
    
    // Encoding: 0x34 fn:funcid
    // Flags: FLAG_IMPLICIT_SLOT0
    // Result type: unknown/varying
    public const CALL_SLOT0_FUNC0 = 52;
    
    // Encoding: 0x35 dst:wslot arg1:rslot fn:funcid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FUNC1 = 53;
    
    // Encoding: 0x36 arg1:rslot fn:funcid
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_SLOT0_FUNC1 = 54;
    
    // Encoding: 0x37 dst:wslot arg1:rslot arg2:rslot fn:funcid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FUNC2 = 55;
    
    // Encoding: 0x38 arg1:rslot arg2:rslot fn:funcid
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_SLOT0_FUNC2 = 56;
    
    // Encoding: 0x39 dst:wslot arg1:rslot arg2:rslot arg3:rslot fn:funcid
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_FUNC3 = 57;
    
    // Encoding: 0x3a arg1:rslot arg2:rslot arg3:rslot fn:funcid
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const CALL_SLOT0_FUNC3 = 58;
    
    // Encoding: 0x3b dst:wslot arg1:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::INT
    public const LENGTH_FILTER = 59;
    
    // Encoding: 0x3c dst:wslot arg1:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::INT
    public const LENGTH_SLOT0_FILTER = 60;
    
    // Encoding: 0x3d dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const DEFAULT_FILTER = 61;
    
    // Encoding: 0x3e dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: unknown/varying
    public const DEFAULT_SLOT0_FILTER = 62;
    
    // Encoding: 0x3f dst:wslot src:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::SAFE_STRING
    public const ESCAPE_FILTER1 = 63;
    
    // Encoding: 0x40 src:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::SAFE_STRING
    public const ESCAPE_SLOT0_FILTER1 = 64;
    
    // Encoding: 0x41 dst:wslot src:rslot strategy:strindex
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::SAFE_STRING
    public const ESCAPE_FILTER2 = 65;
    
    // Encoding: 0x42 src:rslot strategy:strindex
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::SAFE_STRING
    public const ESCAPE_SLOT0_FILTER2 = 66;
    
    // Encoding: 0x43 dst:wslot arg:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const NOT = 67;
    
    // Encoding: 0x44 arg:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const NOT_SLOT0 = 68;
    
    // Encoding: 0x45 dst:wslot arg:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const NEG = 69;
    
    // Encoding: 0x46 arg:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const NEG_SLOT0 = 70;
    
    // Encoding: 0x47 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const OR = 71;
    
    // Encoding: 0x48 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const OR_SLOT0 = 72;
    
    // Encoding: 0x49 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const AND = 73;
    
    // Encoding: 0x4a arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const AND_SLOT0 = 74;
    
    // Encoding: 0x4b dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::STRING
    public const CONCAT = 75;
    
    // Encoding: 0x4c arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::STRING
    public const CONCAT_SLOT0 = 76;
    
    // Encoding: 0x4d dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const EQ = 77;
    
    // Encoding: 0x4e arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const EQ_SLOT0 = 78;
    
    // Encoding: 0x4f dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const LT = 79;
    
    // Encoding: 0x50 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const LT_SLOT0 = 80;
    
    // Encoding: 0x51 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const LT_EQ = 81;
    
    // Encoding: 0x52 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const LT_EQ_SLOT0 = 82;
    
    // Encoding: 0x53 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const NOT_EQ = 83;
    
    // Encoding: 0x54 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::BOOL
    public const NOT_EQ_SLOT0 = 84;
    
    // Encoding: 0x55 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const ADD = 85;
    
    // Encoding: 0x56 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const ADD_SLOT0 = 86;
    
    // Encoding: 0x57 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const SUB = 87;
    
    // Encoding: 0x58 arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const SUB_SLOT0 = 88;
    
    // Encoding: 0x59 dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const MUL = 89;
    
    // Encoding: 0x5a arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const MUL_SLOT0 = 90;
    
    // Encoding: 0x5b dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const QUO = 91;
    
    // Encoding: 0x5c arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const QUO_SLOT0 = 92;
    
    // Encoding: 0x5d dst:wslot arg1:rslot arg2:rslot
    // Flags: FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const MOD = 93;
    
    // Encoding: 0x5e arg1:rslot arg2:rslot
    // Flags: FLAG_IMPLICIT_SLOT0 | FLAG_HAS_SLOT_ARG
    // Result type: Types::NUMERIC
    public const MOD_SLOT0 = 94;
    

    /**
     * @param int $op
     * @return string
     */
    public static function opcodeString($op) {
        switch ($op) {
        case 1:
            return 'RETURN';
        case 2:
            return 'OUTPUT';
        case 3:
            return 'OUTPUT_SLOT0';
        case 4:
            return 'OUTPUT_SAFE';
        case 5:
            return 'OUTPUT_SAFE_SLOT0';
        case 6:
            return 'OUTPUT_STRING_CONST';
        case 7:
            return 'OUTPUT_SAFE_STRING_CONST';
        case 8:
            return 'OUTPUT_SAFE_INT_CONST';
        case 9:
            return 'OUTPUT_EXTDATA_1';
        case 10:
            return 'OUTPUT_EXTDATA_2';
        case 11:
            return 'OUTPUT_EXTDATA_3';
        case 12:
            return 'LOAD_BOOL';
        case 13:
            return 'LOAD_SLOT0_BOOL';
        case 14:
            return 'LOAD_INT_CONST';
        case 15:
            return 'LOAD_SLOT0_INT_CONST';
        case 16:
            return 'LOAD_FLOAT_CONST';
        case 17:
            return 'LOAD_SLOT0_FLOAT_CONST';
        case 18:
            return 'LOAD_STRING_CONST';
        case 19:
            return 'LOAD_SLOT0_STRING_CONST';
        case 20:
            return 'LOAD_EXTDATA_1';
        case 21:
            return 'LOAD_SLOT0_EXTDATA_1';
        case 22:
            return 'LOAD_EXTDATA_2';
        case 23:
            return 'LOAD_SLOT0_EXTDATA_2';
        case 24:
            return 'LOAD_EXTDATA_3';
        case 25:
            return 'LOAD_SLOT0_EXTDATA_3';
        case 26:
            return 'LOAD_NULL';
        case 27:
            return 'LOAD_SLOT0_NULL';
        case 28:
            return 'INDEX';
        case 29:
            return 'INDEX_SLOT0';
        case 30:
            return 'INDEX_INT_KEY';
        case 31:
            return 'INDEX_SLOT0_INT_KEY';
        case 32:
            return 'INDEX_STRING_KEY';
        case 33:
            return 'INDEX_SLOT0_STRING_KEY';
        case 34:
            return 'MOVE';
        case 35:
            return 'MOVE_SLOT0';
        case 36:
            return 'MOVE_BOOL';
        case 37:
            return 'MOVE_SLOT0_BOOL';
        case 38:
            return 'CONV_BOOL';
        case 39:
            return 'CONV_SLOT0_BOOL';
        case 40:
            return 'JUMP';
        case 41:
            return 'JUMP_FALSY';
        case 42:
            return 'JUMP_SLOT0_FALSY';
        case 43:
            return 'JUMP_TRUTHY';
        case 44:
            return 'JUMP_SLOT0_TRUTHY';
        case 45:
            return 'FOR_VAL';
        case 46:
            return 'FOR_KEY_VAL';
        case 47:
            return 'CALL_FILTER1';
        case 48:
            return 'CALL_SLOT0_FILTER1';
        case 49:
            return 'CALL_FILTER2';
        case 50:
            return 'CALL_SLOT0_FILTER2';
        case 51:
            return 'CALL_FUNC0';
        case 52:
            return 'CALL_SLOT0_FUNC0';
        case 53:
            return 'CALL_FUNC1';
        case 54:
            return 'CALL_SLOT0_FUNC1';
        case 55:
            return 'CALL_FUNC2';
        case 56:
            return 'CALL_SLOT0_FUNC2';
        case 57:
            return 'CALL_FUNC3';
        case 58:
            return 'CALL_SLOT0_FUNC3';
        case 59:
            return 'LENGTH_FILTER';
        case 60:
            return 'LENGTH_SLOT0_FILTER';
        case 61:
            return 'DEFAULT_FILTER';
        case 62:
            return 'DEFAULT_SLOT0_FILTER';
        case 63:
            return 'ESCAPE_FILTER1';
        case 64:
            return 'ESCAPE_SLOT0_FILTER1';
        case 65:
            return 'ESCAPE_FILTER2';
        case 66:
            return 'ESCAPE_SLOT0_FILTER2';
        case 67:
            return 'NOT';
        case 68:
            return 'NOT_SLOT0';
        case 69:
            return 'NEG';
        case 70:
            return 'NEG_SLOT0';
        case 71:
            return 'OR';
        case 72:
            return 'OR_SLOT0';
        case 73:
            return 'AND';
        case 74:
            return 'AND_SLOT0';
        case 75:
            return 'CONCAT';
        case 76:
            return 'CONCAT_SLOT0';
        case 77:
            return 'EQ';
        case 78:
            return 'EQ_SLOT0';
        case 79:
            return 'LT';
        case 80:
            return 'LT_SLOT0';
        case 81:
            return 'LT_EQ';
        case 82:
            return 'LT_EQ_SLOT0';
        case 83:
            return 'NOT_EQ';
        case 84:
            return 'NOT_EQ_SLOT0';
        case 85:
            return 'ADD';
        case 86:
            return 'ADD_SLOT0';
        case 87:
            return 'SUB';
        case 88:
            return 'SUB_SLOT0';
        case 89:
            return 'MUL';
        case 90:
            return 'MUL_SLOT0';
        case 91:
            return 'QUO';
        case 92:
            return 'QUO_SLOT0';
        case 93:
            return 'MOD';
        case 94:
            return 'MOD_SLOT0';
        default:
            return '?';
        }
    }

    /**
     * @param int $op
     * @return int
     */
    public static function opcodeResultType($op) {
        switch ($op) {
        case self::LOAD_BOOL:
            return Types::BOOL;
        case self::LOAD_SLOT0_BOOL:
            return Types::BOOL;
        case self::LOAD_INT_CONST:
            return Types::INT;
        case self::LOAD_SLOT0_INT_CONST:
            return Types::INT;
        case self::LOAD_FLOAT_CONST:
            return Types::FLOAT;
        case self::LOAD_SLOT0_FLOAT_CONST:
            return Types::FLOAT;
        case self::LOAD_STRING_CONST:
            return Types::STRING;
        case self::LOAD_SLOT0_STRING_CONST:
            return Types::STRING;
        case self::LOAD_NULL:
            return Types::NULL;
        case self::LOAD_SLOT0_NULL:
            return Types::NULL;
        case self::MOVE_BOOL:
            return Types::BOOL;
        case self::MOVE_SLOT0_BOOL:
            return Types::BOOL;
        case self::CONV_BOOL:
            return Types::BOOL;
        case self::CONV_SLOT0_BOOL:
            return Types::BOOL;
        case self::LENGTH_FILTER:
            return Types::INT;
        case self::LENGTH_SLOT0_FILTER:
            return Types::INT;
        case self::ESCAPE_FILTER1:
            return Types::SAFE_STRING;
        case self::ESCAPE_SLOT0_FILTER1:
            return Types::SAFE_STRING;
        case self::ESCAPE_FILTER2:
            return Types::SAFE_STRING;
        case self::ESCAPE_SLOT0_FILTER2:
            return Types::SAFE_STRING;
        case self::NOT:
            return Types::BOOL;
        case self::NOT_SLOT0:
            return Types::BOOL;
        case self::NEG:
            return Types::NUMERIC;
        case self::NEG_SLOT0:
            return Types::NUMERIC;
        case self::OR:
            return Types::BOOL;
        case self::OR_SLOT0:
            return Types::BOOL;
        case self::AND:
            return Types::BOOL;
        case self::AND_SLOT0:
            return Types::BOOL;
        case self::CONCAT:
            return Types::STRING;
        case self::CONCAT_SLOT0:
            return Types::STRING;
        case self::EQ:
            return Types::BOOL;
        case self::EQ_SLOT0:
            return Types::BOOL;
        case self::LT:
            return Types::BOOL;
        case self::LT_SLOT0:
            return Types::BOOL;
        case self::LT_EQ:
            return Types::BOOL;
        case self::LT_EQ_SLOT0:
            return Types::BOOL;
        case self::NOT_EQ:
            return Types::BOOL;
        case self::NOT_EQ_SLOT0:
            return Types::BOOL;
        case self::ADD:
            return Types::NUMERIC;
        case self::ADD_SLOT0:
            return Types::NUMERIC;
        case self::SUB:
            return Types::NUMERIC;
        case self::SUB_SLOT0:
            return Types::NUMERIC;
        case self::MUL:
            return Types::NUMERIC;
        case self::MUL_SLOT0:
            return Types::NUMERIC;
        case self::QUO:
            return Types::NUMERIC;
        case self::QUO_SLOT0:
            return Types::NUMERIC;
        case self::MOD:
            return Types::NUMERIC;
        case self::MOD_SLOT0:
            return Types::NUMERIC;
        default:
            return Types::UNKNOWN;
        }
    }

    /**
     * @param int $op
     * @return int
     */
    public static function opcodeFlags($op) {
        switch ($op) {
        case 1: // RETURN
            return 0;
        case 2: // OUTPUT
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 3: // OUTPUT_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 4: // OUTPUT_SAFE
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 5: // OUTPUT_SAFE_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 6: // OUTPUT_STRING_CONST
            return 0;
        case 7: // OUTPUT_SAFE_STRING_CONST
            return 0;
        case 8: // OUTPUT_SAFE_INT_CONST
            return 0;
        case 9: // OUTPUT_EXTDATA_1
            return 0;
        case 10: // OUTPUT_EXTDATA_2
            return 0;
        case 11: // OUTPUT_EXTDATA_3
            return 0;
        case 12: // LOAD_BOOL
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 13: // LOAD_SLOT0_BOOL
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 14: // LOAD_INT_CONST
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 15: // LOAD_SLOT0_INT_CONST
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 16: // LOAD_FLOAT_CONST
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 17: // LOAD_SLOT0_FLOAT_CONST
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 18: // LOAD_STRING_CONST
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 19: // LOAD_SLOT0_STRING_CONST
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 20: // LOAD_EXTDATA_1
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 21: // LOAD_SLOT0_EXTDATA_1
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 22: // LOAD_EXTDATA_2
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 23: // LOAD_SLOT0_EXTDATA_2
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 24: // LOAD_EXTDATA_3
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 25: // LOAD_SLOT0_EXTDATA_3
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 26: // LOAD_NULL
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 27: // LOAD_SLOT0_NULL
            return 0;
        case 28: // INDEX
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 29: // INDEX_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 30: // INDEX_INT_KEY
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 31: // INDEX_SLOT0_INT_KEY
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 32: // INDEX_STRING_KEY
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 33: // INDEX_SLOT0_STRING_KEY
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 34: // MOVE
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 35: // MOVE_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 36: // MOVE_BOOL
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 37: // MOVE_SLOT0_BOOL
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 38: // CONV_BOOL
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 39: // CONV_SLOT0_BOOL
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 40: // JUMP
            return 0;
        case 41: // JUMP_FALSY
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 42: // JUMP_SLOT0_FALSY
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 43: // JUMP_TRUTHY
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 44: // JUMP_SLOT0_TRUTHY
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 45: // FOR_VAL
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 46: // FOR_KEY_VAL
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 47: // CALL_FILTER1
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 48: // CALL_SLOT0_FILTER1
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 49: // CALL_FILTER2
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 50: // CALL_SLOT0_FILTER2
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 51: // CALL_FUNC0
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 52: // CALL_SLOT0_FUNC0
            return OpInfo::FLAG_IMPLICIT_SLOT0;
        case 53: // CALL_FUNC1
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 54: // CALL_SLOT0_FUNC1
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 55: // CALL_FUNC2
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 56: // CALL_SLOT0_FUNC2
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 57: // CALL_FUNC3
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 58: // CALL_SLOT0_FUNC3
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 59: // LENGTH_FILTER
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 60: // LENGTH_SLOT0_FILTER
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 61: // DEFAULT_FILTER
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 62: // DEFAULT_SLOT0_FILTER
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 63: // ESCAPE_FILTER1
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 64: // ESCAPE_SLOT0_FILTER1
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 65: // ESCAPE_FILTER2
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 66: // ESCAPE_SLOT0_FILTER2
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 67: // NOT
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 68: // NOT_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 69: // NEG
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 70: // NEG_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 71: // OR
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 72: // OR_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 73: // AND
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 74: // AND_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 75: // CONCAT
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 76: // CONCAT_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 77: // EQ
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 78: // EQ_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 79: // LT
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 80: // LT_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 81: // LT_EQ
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 82: // LT_EQ_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 83: // NOT_EQ
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 84: // NOT_EQ_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 85: // ADD
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 86: // ADD_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 87: // SUB
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 88: // SUB_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 89: // MUL
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 90: // MUL_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 91: // QUO
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 92: // QUO_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        case 93: // MOD
            return OpInfo::FLAG_HAS_SLOT_ARG;
        case 94: // MOD_SLOT0
            return OpInfo::FLAG_IMPLICIT_SLOT0 | OpInfo::FLAG_HAS_SLOT_ARG;
        default:
            return 0;
        }
    }

    public static $args = [
        self::RETURN => [],
        self::OUTPUT => [OpInfo::ARG_SLOT],
        self::OUTPUT_SLOT0 => [],
        self::OUTPUT_SAFE => [OpInfo::ARG_SLOT],
        self::OUTPUT_SAFE_SLOT0 => [],
        self::OUTPUT_STRING_CONST => [OpInfo::ARG_STRING_CONST],
        self::OUTPUT_SAFE_STRING_CONST => [OpInfo::ARG_STRING_CONST],
        self::OUTPUT_SAFE_INT_CONST => [OpInfo::ARG_INT_CONST],
        self::OUTPUT_EXTDATA_1 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET, OpInfo::ARG_IMM8],
        self::OUTPUT_EXTDATA_2 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET, OpInfo::ARG_IMM8],
        self::OUTPUT_EXTDATA_3 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET, OpInfo::ARG_IMM8],
        self::LOAD_BOOL => [OpInfo::ARG_SLOT, OpInfo::ARG_IMM8],
        self::LOAD_SLOT0_BOOL => [OpInfo::ARG_IMM8],
        self::LOAD_INT_CONST => [OpInfo::ARG_SLOT, OpInfo::ARG_INT_CONST],
        self::LOAD_SLOT0_INT_CONST => [OpInfo::ARG_INT_CONST],
        self::LOAD_FLOAT_CONST => [OpInfo::ARG_SLOT, OpInfo::ARG_FLOAT_CONST],
        self::LOAD_SLOT0_FLOAT_CONST => [OpInfo::ARG_FLOAT_CONST],
        self::LOAD_STRING_CONST => [OpInfo::ARG_SLOT, OpInfo::ARG_STRING_CONST],
        self::LOAD_SLOT0_STRING_CONST => [OpInfo::ARG_STRING_CONST],
        self::LOAD_EXTDATA_1 => [OpInfo::ARG_SLOT, OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_SLOT0_EXTDATA_1 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_EXTDATA_2 => [OpInfo::ARG_SLOT, OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_SLOT0_EXTDATA_2 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_EXTDATA_3 => [OpInfo::ARG_SLOT, OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_SLOT0_EXTDATA_3 => [OpInfo::ARG_CACHE_SLOT, OpInfo::ARG_KEY_OFFSET],
        self::LOAD_NULL => [OpInfo::ARG_SLOT],
        self::LOAD_SLOT0_NULL => [],
        self::INDEX => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::INDEX_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::INDEX_INT_KEY => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_INT_CONST],
        self::INDEX_SLOT0_INT_KEY => [OpInfo::ARG_SLOT, OpInfo::ARG_INT_CONST],
        self::INDEX_STRING_KEY => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_STRING_CONST],
        self::INDEX_SLOT0_STRING_KEY => [OpInfo::ARG_SLOT, OpInfo::ARG_STRING_CONST],
        self::MOVE => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MOVE_SLOT0 => [OpInfo::ARG_SLOT],
        self::MOVE_BOOL => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MOVE_SLOT0_BOOL => [OpInfo::ARG_SLOT],
        self::CONV_BOOL => [OpInfo::ARG_SLOT],
        self::CONV_SLOT0_BOOL => [],
        self::JUMP => [OpInfo::ARG_REL16],
        self::JUMP_FALSY => [OpInfo::ARG_REL16, OpInfo::ARG_SLOT],
        self::JUMP_SLOT0_FALSY => [OpInfo::ARG_REL16],
        self::JUMP_TRUTHY => [OpInfo::ARG_REL16, OpInfo::ARG_SLOT],
        self::JUMP_SLOT0_TRUTHY => [OpInfo::ARG_REL16],
        self::FOR_VAL => [OpInfo::ARG_REL16, OpInfo::ARG_SLOT],
        self::FOR_KEY_VAL => [OpInfo::ARG_REL16, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::CALL_FILTER1 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FILTER_ID],
        self::CALL_SLOT0_FILTER1 => [OpInfo::ARG_SLOT, OpInfo::ARG_FILTER_ID],
        self::CALL_FILTER2 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FILTER_ID],
        self::CALL_SLOT0_FILTER2 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FILTER_ID],
        self::CALL_FUNC0 => [OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_SLOT0_FUNC0 => [OpInfo::ARG_FUNC_ID],
        self::CALL_FUNC1 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_SLOT0_FUNC1 => [OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_FUNC2 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_SLOT0_FUNC2 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_FUNC3 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::CALL_SLOT0_FUNC3 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_FUNC_ID],
        self::LENGTH_FILTER => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::LENGTH_SLOT0_FILTER => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::DEFAULT_FILTER => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::DEFAULT_SLOT0_FILTER => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::ESCAPE_FILTER1 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::ESCAPE_SLOT0_FILTER1 => [OpInfo::ARG_SLOT],
        self::ESCAPE_FILTER2 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_STRING_CONST],
        self::ESCAPE_SLOT0_FILTER2 => [OpInfo::ARG_SLOT, OpInfo::ARG_STRING_CONST],
        self::NOT => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::NOT_SLOT0 => [OpInfo::ARG_SLOT],
        self::NEG => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::NEG_SLOT0 => [OpInfo::ARG_SLOT],
        self::OR => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::OR_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::AND => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::AND_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::CONCAT => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::CONCAT_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::EQ => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::EQ_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::LT => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::LT_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::LT_EQ => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::LT_EQ_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::NOT_EQ => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::NOT_EQ_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::ADD => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::ADD_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::SUB => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::SUB_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MUL => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MUL_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::QUO => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::QUO_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MOD => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
        self::MOD_SLOT0 => [OpInfo::ARG_SLOT, OpInfo::ARG_SLOT],
    ];
}
