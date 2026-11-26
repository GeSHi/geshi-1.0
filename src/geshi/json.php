<?php
/*************************************************************************************
 * json.php
 * --------
 * Author: Eduardo Mozart de Oliveira (2974895+eduardomozart@users.noreply.github.com)
 * Copyright: (c) 2026 Eduardo Mozart de Oliveira
 * Release Version: 1.0.9.1
 * Date Started: 2026/11/26
 *
 * JSON language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2026/11/26 (1.0.9.2)
 *  -  First Release
 *
 * TODO (updated 2026/11/26)
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
    'LANG_NAME' => 'JSON',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        // Single-character escapes per RFC 8259 Section 7
        1 => '#\\\\["\\\\/bfnrt]#',
        // Unicode escapes (\uXXXX) per RFC 8259 Section 7
        2 => '#\\\\u[0-9a-fA-F]{4}#'
        ),
    'NUMBERS' => array(
        // Numbers per RFC 8259 Section 6: optional minus, integer without leading zeros, optional fraction and exponent
        0 => '(?<![0-9a-z_\.\-])\-?(?:0|[1-9]\d*)(?:\.\d+)?(?:[eE][+\-]?\d+)?(?![0-9a-z\.])'
        ),
    'KEYWORDS' => array(
        1 => array(
            // JSON literal values per RFC 8259 Section 3
            'false', 'null', 'true'
            )
        ),
    'SYMBOLS' => array(
        0 => array(
            '[', ']', '{', '}', ',', ':'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #003366; font-weight: bold;'
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #006699; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #3366CC;'
            ),
        'NUMBERS' => array(
            0 => 'color: #CC0000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => 'color: #660066;',
            1 => ''
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        // Object property keys ("key":)
        0 => '/(?<start>")(?>\\\\.|[^"\\\\\n])*(?<end>")(?=\s*:)/',
        // All other JSON tokens (non-quotes and string values not followed by :)
        1 => '/(?<start>(?:[^"]++|"(?>\\\\.|[^"\\\\\n])*"(?!\s*:))+)(?<end>)/'
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false,
        1 => true
        )
);
