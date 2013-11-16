<?php
/*************************************************************************************
 * rust.php
 * -------
 * Author: Dennis Bayer (Dennis.Bayer@mnifh-giessen.de)
 * Contributors:
 *  - Dave (dmh@dmh.org.uk)
 *  - M. Uli Kusterer (witness.of.teachtext@gmx.net)
 *  - Jack Lloyd (lloyd@randombit.net)
 * Copyright: (c) 2004 Dennis Bayer, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/09/27
 *
 * Rust language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2013/09/17
 *  -  Dave forks cpp.php to create syntax file for version 0.8 of Rust language
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 * 2004/XX/XX (1.0.2)
 *  -  Added several new keywords (Jack Lloyd)
 * 2004/11/27 (1.0.1)
 *  -  Added StdCLib function and constant names, changed color scheme to
 *     a cleaner one. (M. Uli Kusterer)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Rust',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[abfnrtv\\\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array( // Main keywords
            'be', 'yield', 'typeof',    // This line: reserved but unused
            'as',
            'break',
            'do',
            'else', 'enum', 'extern',
            'false', 'fn', 'for',
            'if', 'impl', 'in',
            'let', 'loop',
            'match', 'mod', 'mut',
            'priv', 'pub',
            'ref', 'return',
            'self', 'static', 'struct', 'super',
            'true', 'trait', 'type',
            'unsafe', 'use',
            'while'
            ),
        2 => array( // Syntax extensions
            'fmt!',
            'env!',
            'stringify!',
            'proto!',
            'include!',
            'include_str!',
            'include_bin!',
            'error!', 'warn!', 'info!', 'debug!'
            ),
        3 => array( // Functions
            'print', 'println',
            'range'
            ),
        4 => array( // Primitive types
            'bool', 'char', 'str',
            'f32', 'f64', 'float',
            'i8', 'i16', 'i32', 'i64', 'int',
            'u8', 'u16', 'u32', 'u64', 'uint'
            ),
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '{', '}', '[', ']'),
        1 => array('<', '>','='),
        2 => array('+', '-', '*', '/', '%'),
        3 => array('!', '^', '&', '|'),
        4 => array('?', ':', ';', '#', '$')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #0000ff;',
            3 => 'color: #0000dd;',
            4 => 'color: #0000ff;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666;',
            2 => 'color: #339900;',
            'MULTI' => 'color: #ff0000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #008000;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #007788;',
            2 => 'color: #007788;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #000080;',
            2 => 'color: #000040;',
            3 => 'color: #000040;',
            4 => 'color: #008080;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_\|%\\-])"
        )
    )
);

?>
