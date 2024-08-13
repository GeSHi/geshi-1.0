<?php
/*************************************************************************************
 * java.php
 * --------
 * Author: Zéfling (zefling@ikilote.net)
 * Copyright: (c) 2019 Zéfling (https://@ikilote.net)
 * Release Version: 1.0.9.1
 * Date Started: 2024/08/13
 *
 * TypeScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2024/08/13 (1.0.0)
 *   -  First Release
 *
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
    'LANG_NAME' => 'Typescript 2.7',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            //reserved/keywords; also some non-reserved keywords
            'abstract','await', 'async', 'as',
            'break',
            'case','catch','const','continue', 'class','const',
            'default','delete','do',
            'debugger',
            'export','extends','else',
            'finally','for','function', 'function*', 'from',
            'get','goto',
            'interface','if','in','instanceof', 'import','implements',
            'let',
            'new',
            'of',
            'prototype',
            'return',
            'set','static','switch', 'super',
            'this','throw','try','typeof',
            'var','void',
            'yield',
            'volatile',
            'while', 'with'
            ),
        2 => array(
            //reserved/non-keywords; metaconstants
            'false','null','true','undefined','NaN','Infinity'
            ),
        3 => array(
            //magic properties/functions
            '__proto__','__defineGetter__','__defineSetter__','hasOwnProperty','hasProperty'
            ),
        4 => array(
            //type constructors
            'Object', 'Function', 'Date', 'Math', 'String', 'Number', 'Boolean', 'Array'
            ),
        5 => array(
            //reserved, but invalid in language
            'boolean','byte','char','double','enum',
            'final','float','int','long','native',
            'short','synchronized','transient','volatile'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}',
        '+', '-', '*', '/', '%',
        '!', '@', '&', '|', '^',
        '<', '>', '=',
        ',', ';', '?', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true, 2 => true, 3 => true, 4 => true, 5 => true, 6 => true, 7 => true, 8 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000066; font-weight: bold;',
            3 => 'color: #006600; font-weight: bold;',
            4 => 'color: #006600; font-weight: bold;',
            5 => 'color: #000000; font-weight: bold;',
            6 => 'color: #000000; font-weight: bold;',
            7 => 'color: #660000; font-weight: bold;',
            8 => 'color: #000000; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #006699;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006633;',
            2 => 'color: #006633;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #3F84D9; font-weight: bold;',
           // 1 => 'color: #3F84D9;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //anotation
        0 => '\@[a-zA-Z0-9_]+',
        //regexp
       // 1 => '\/(?!\/).*\/[gbmi]*',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => '(?<![a-zA-Z0-9\$_\|\#>|^&"\'])',
            'DISALLOWED_AFTER' => '(?![a-zA-Z0-9_\|%\\-;"\'])'
            )
        )
);
