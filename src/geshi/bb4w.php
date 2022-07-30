<?php
/*************************************************************************************
 * bb4w.php
 * ----------
 * Author: Richard Russell (info@rtrussell.co.uk)
 * Copyright: (c) 2018  R.T.Russell (http://www.rtrussell.co.uk)
 * Release Version: 1.0.0.5
 * Date Started: 2018-04-13
 *
 * BBC BASIC language file for GeSHi.
 *
 * CHANGES
 * -------
 * Added a few common 'compound keywords' so they are highlighted correctly.
 * Corrected line number highlighting.
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
    'LANG_NAME' => 'BBC BASIC',
    'COMMENT_SINGLE' => array(1 => 'REM', 2 => '*|'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
// Keywords that must be followed by whitespace or a delimiter:
        1 => array('1dummy'),
        2 => array('2dummy'),
        3 => array('3dummy'),
        4 => array('ASCMID$','VALMID$',
            'BGET','BPUT','BY','CLEAR','CLG','CLOSE','CLS','COUNT',
            'END','ENDCASE','ENDIF','ENDPROC','ENDWHILE','EOF','ERL','ERR','EXIT',
            'EXT','FALSE','HIMEM','LEFT$','LOMEM','MID$','OFF','OF','PAGE','PI',
            'POINT','POS','PTR','QUIT','REPORT','RETURN','RIGHT$','RND','RUN',
            'STOP','STRING$','TAB','TIME','TRUE','VPOS','WAIT')
        ),
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
            GESHI_COMMENTS => false,
            1 => true,
            2 => true,
            3 => true,
            4 => true
            ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ff8000;',
            2 => 'color: #ff8000;',
            3 => 'color: #ff8000;',
            4 => 'color: #ff8000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;',
            2 => 'color: #008000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff00ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000000;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #ff8000;',
            3 => 'color: #ff0000;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
// Line numbers:
        1 => array(
            GESHI_SEARCH => '(^ *|\n *)([0-9]+)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
// Keywords that need not be followed by whitespace or a delimiter:
        2 => array(
            GESHI_SEARCH => "(\b)(COSRAD|SINRAD|TANRAD|DEGACS|DEGASN|DEGATN|"
                            ."ABS|ACS|ADVAL|AND|ASC|ASN|ATN|CALL|CASE|CHAIN|"
                            ."CHR[$]|CIRCLE|COLOR|COLOUR|COS|DATA|DEG|DIM|DIV|DRAW|"
                            ."ELLIPSE|ELSE|ENVELOPE|EOR|ERROR|EVAL|EXP|FILL|FN|FOR|"
                            ."GCOL|GET[$]|GET|GOSUB|GOTO|IF|INKEY[$]|INKEY|INPUT|"
                            ."INSTALL|INSTR|INT|LEN|LET|LINE|LN|LOCAL|LOG|"
                            ."MODE|MOD|MOUSE|MOVE|NEXT|NOT|ON|OPENIN|OPENOUT|"
                            ."OPENUP|ORIGIN|OR|OSCLI|OTHERWISE|PLOT|PRINT|"
                            ."PRIVATE|PROC|RAD|READ|RECTANGLE|REPEAT|RESTORE|"
                            ."SGN|SIN|SOUND|SPC|SQR|STEP|STR[$]|SUM|SWAP|SYS|"
                            ."TAN|THEN|TINT|TO|TRACE|UNTIL|USR|"
                            ."VAL|VDU|WHEN|WHILE|WIDTH)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        3 => array(
            GESHI_SEARCH => "(\b)(DEFFN|DEFPROC|DEF)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            )
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'SCRIPT' => GESHI_NEVER,
            'SYMBOLS' => GESHI_NEVER,
            'NUMBERS' => GESHI_NEVER,
            'ESCAPE_CHAR' => GESHI_NEVER,
            'BRACKETS' => GESHI_NEVER,
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
