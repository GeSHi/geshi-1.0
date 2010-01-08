<?php
/*************************************************************************************
 * j.php
 * --------
 * Author: Ric Sherlock (tikkanz@gmail.com)
 * Copyright: (c) 2009 Ric Sherlock
 * Release Version: 1.0.8.6
 * Date Started: 2009/11/10
 *
 * J language file for GeSHi.
 *
 * CHANGES
 * -------
 *  2009/12/14 (1.0.1)
 *   -  Regex for NUMBERS, SYMBOLS for () and turn of BRACKETS
 *  2009/11/12 (1.0.0)
 *   -  First Release
 *
 *
 * TODO (updated 2009/11/12)
 * -------------------------
 * * Handle "for_myvar." style control word
 * * Handle multi-line comments
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
    'LANG_NAME' => 'J',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        1 => '/(?<!\w)NB\..*?$/m',
        2 => '/(?<=\bNote\b).*?\n\s*\)\s*\n/s'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '',
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("'"),
    'HARDCHAR' => "'",
    'NUMBERS' => array(
        0 => '\b_?\d+(\.\d+)?(x|[bejprx]_?[\da-z]+(\.[\da-z]+)?)?(?!\w|\.)|\b__?\b'  // '\b_?\d+[\da-z\._]*'
        ),
    'KEYWORDS' => array(
        //Control words
        1 => array(
            'assert', 'break', 'case', 'catch', 'catcht', 'continue', 'do',
            'else', 'elseif', 'end', 'fcase', 'for', 'goto', 'if', 'label',
            'return', 'select', 'throw', 'trap', 'try', 'while', 'whilst'
            ),
        //Arguments
        2 => array(
            'm', 'n', 'u', 'v', 'x', 'y'
            )
        /*  Below are all the primitives by type in case they are needed sometime
        in the future.
        Uncommenting them at the moment causes a number of the following errors:
        PHP Notice:  Undefined offset:  0 in C:\MyPath\geshi.php on line 3460
        // Adverbs   ! Backslashs probably need to be escaped?
        3 => array(
            '~', '/', '\', '/.', '\.', '}', 'b.', 'f.', 'M.', 't.', 't:'
            ),
        // Conjunctions
        4 => array(
            '^:', '.', '..', '.:', ':', '', ':.', '::', ';.', '!.', '!:',
            '"', '`', '`:', '@', '@.', '@:', '&', '&.', '&:', '&.:',
            'd.', 'D.', 'D:', 'H.', 'L:', 'S:', 'T.'
            ),
        // Copula, local vs global assignment
        5 => array(
            '=.', '=:'
            ),
        // Nouns
        6 => array(
            'a.', 'a:'
            ),
        // Verbs
        7 => array(
            '=', '&lt;', '&lt;.', '&lt;:', '&gt;', '&gt;.', '&gt;:', '_:', '+', '+.', '+:',
            '*', '*.', '*:', '-', '-.', '-:', '%', '%.', '%:', '^', '^.',
            '$', '$.', '$:', '~.', '~:', '|', '|.', '|:', ',', ',.', ',:',
            ';', ';:', '#', '#.', '#:', '!', '/:', '\:', '[', '[:', ']',
            '{', '{.', '{:', '{::', '}.', '}:', '".', '":', '?', '?.',
            'A.', 'c.', 'C.', 'e.', 'E.', 'i.', 'i:', 'I.', 'j.', 'L.',
            'o.', 'p.', 'p:', 'q:', 'r.', 's:', 'u:', 'x:', '_9:', '_8:',
            '_7:', '_6:', '_5:', '_4:', '_3:', '_2:', '_1:', '0:', '1:',
            '2:', '3:', '4:', '5:', '6:', '7:', '8:', '9:'
            )            */
        ),
    'SYMBOLS' => array(
        //Punctuation
        0 => array(
            '(', ')'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff; font-weight: bold;',
            2 => 'color: #008800;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => '',
            'HARD' => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;',
            ),
        'NUMBERS' => array(
            0 => 'color: #009999; font-weight: bold;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #009900; font-weight: bold;'
            ),
        'REGEXPS' => array(
//            1 => 'color: #0000ff; font-weight: bold;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '', //http://www.jsoftware.com/help/dictionary/ctrl.htm',
        2 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //for_myvar.  should be same format as keyword 1 (kw1)
        //1 => "\bfor_\w+\.",
        //BenBE: Instead of highlighting the for construct I'd suggest
        //highlighting variables if there's a simple syntax to detect them.
        //Otherwise leave them alone and stick with highlighting known constructs.
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'BRACKETS' => GESHI_NEVER,
            ),
        'KEYWORDS' => array(
            1 => array(
                'DISALLOWED_AFTER' => '(?=(?:(?<=\bfor)_[a-zA-Z]\w+)?\.)',
                ),
            2 => array(
                'DISALLOWED_BEFORE' => '(?<!\w)',
                'DISALLOWED_AFTER' => '(?!\.|\w)',
                )
            )
        )
);

?>