<?php
/*************************************************************************************
 * rsplus.php
 * ———–
 * Author: Ron Fredericks (ronf@LectureMaker.com)
 * Copyright: (c) 2009 Ron Fredericks (http://www.LectureMaker.com)
 * Release Version: 1.0.8.5
 * Date Started: 2009/03/28
 *
 * R language file for GeSHi.
 *
 * CHANGES
 * ——-
 * 2009/04/06
 *   -  Add references to Sekhon’s R Package docs
 * 2009/03/29 (1.0.8.5)
 *   -  First Release
 *
 * References
 * ———-
 * Some online R Package documentation:
 *     http://sekhon.berkeley.edu/library/index.html         2.4 docs
 *     http://astrostatistics.psu.edu/su07/R/html            2.5 docs
 *
 * Another R GeSHi with no meat?
 *     http://organicdesign.co.nz/GeSHi/R.php
 * SourceForge R discussion:
 *     http://sourceforge.net/tracker/?func=detail&aid=2276025&group_id=114997&atid=670234
 *
 * TODO (updated 2007/02/06)
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
    'LANG_NAME' => 'r',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'break','else','for','function','global','if','in','next',
            'otherwise','persistent','repeat','return','switch','try','while',
            ),
        2 => array(
            // Graphics package
            'abline','hist','lines','plot','residuals',
            ),
        3 => array(
            // The Normal Distribution
            'rnorm',
            ),
        4 => array(// LM Distribution
            'lm',
            'lowess',
            ),
        5 => array(// Summary for LM Distribution
            'summary',
            ),
        6 => array(// Log
            'exp',
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '!', '%', '^', '&', '/','+','-','*','=','<','>',';','|','<-','->'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;',
            3 => 'color: #0000FF;',
            4 => 'color: #0000FF;',
            5 => 'color: #0000FF;',
            6 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #228B22;',
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #080;'
            ),
        'STRINGS' => array(
            // 0 => 'color: #A020F0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0000;'
            ),
        'METHODS' => array(
            1 => '',
            2 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
            0 => 'color:#A020F0;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://astrostatistics.psu.edu/su07/R/html/graphics/html/{FNAME}.html', // http://sekhon.berkeley.edu/library/graphics/html/{FNAME}.html
        3 => 'http://astrostatistics.psu.edu/su07/R/html/stats/html/Normal.html', // http://sekhon.berkeley.edu/library/stats/html/Normal.html
        4 => 'http://astrostatistics.psu.edu/su07/R/html/stats/html/{FNAME}.html', // http://sekhon.berkeley.edu/library/stats/html/{FNAME}.html
        5 => 'http://astrostatistics.psu.edu/su07/R/html/stats/html/summary.lm.html', // http://sekhon.berkeley.edu/library/stats/html/summary.lm.html
        6 => 'http://astrostatistics.psu.edu/su07/R/html/base/html/Log.html' // http://sekhon.berkeley.edu/library/base/html/Log.html
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => "([^\w])'([^\\n\\r']*)'",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => "\\1'",
            GESHI_AFTER => "'"
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>