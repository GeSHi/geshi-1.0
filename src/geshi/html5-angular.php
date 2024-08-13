<?php
/*************************************************************************************
 * html5.php
 * ---------------
 * Author: Zefling (zefling@ikilote.net)
 * Copyright: (c) 2024 Zefling (http://ikilote.net/)
 * Release Version: 1.0.9.1
 * Date Started: 2024/08/13
 *
 * HTML 5 fot Angular language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2024/08/13 (1.0.0)
 *   -  First Release
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
    'LANG_NAME' => 'HTML5',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        2 => array(
            'a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio',
            'b', 'base', 'basefont', 'bdi', 'bdo', 'big', 'blockquote', 'body', 'br', 'button',
            'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup',
            'data', 'datalist', 'dd', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt',
            'em', 'embed',
            'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form', 'frame', 'frameset',
            'h1', 'head', 'header', 'hgroup', 'hr', 'html',
            'i', 'iframe', 'img', 'input', 'ins',
            'kbd',
            'label', 'legend', 'li', 'link',
            'main', 'map', 'mark', 'menu', 'meta', 'meter',
            'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup', 'option', 'output', 'p', 'param', 'picture', 'pre', 'progress',
            'q',
            'rp', 'rt', 'ruby',
            's', 'samp', 'script', 'search', 'section', 'select', 'small', 'source', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'svg',
            'table', 'tbody', 'td', 'template', 'textarea', 'tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'tt',
            'u', 'ul',
            'var', 'video',
            'wbr',
            // angular tag
            'ng-container', 'ng-template', 'ng-content'
        ),
        3 => array(
            'for', 'if', 'else if', 'else', 'switch', 'case', 'default', 'let'
        ),
        4 => array(
            'let', 'of'
        ),
        5 => array(
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis', 'autocomplete', 'autofocus',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords', 'contenteditable', 'contextmenu',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled', 'draggable', 'dropzone', 'enctype',
            'face', 'for', 'frame', 'frameborder', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv', 'hidden', 'id', 'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple', 'min', 'max',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap', 'novalidate', 'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onselect', 'onsubmit', 'onunload', 'onafterprint', 'onbeforeprint', 'onbeforeonload', 'onerror', 'onhaschange', 'onmessage', 'onoffline', 'ononline', 'onpagehide', 'onpageshow', 'onpopstate', 'onredo', 'onresize', 'onstorage', 'onundo', 'oncontextmenu', 'onformchange', 'onforminput', 'oninput', 'oninvalid', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onmousewheel', 'onscroll', 'oncanplay', 'oncanplaythrough', 'ondurationchange', 'onemptied', 'onended', 'onloadeddata', 'onloadedmetadata', 'onloadstart', 'onpause', 'onplay', 'onplaying', 'onprogress', 'onratechange', 'onreadystatechange', 'onseeked', 'onseeking', 'onstalled', 'onsuspend', 'ontimeupdate', 'onvolumechange', 'onwaiting',
            'profile', 'prompt', 'pattern', 'placeholder', 'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules', 'required',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary', 'spellcheck', 'step', 'tabindex', 'target', 'text', 'title', 'type',
            'usemap',
            'valign', 'value', 'valuetype', 'version', 'vlink', 'vspace',
            'width'
        ),
    ),
    'SYMBOLS' => array(
        0 => array('/', '=', ),
        1 => array('*', '{', '}', ';', ':', '(', ')', '[', ']', '$', '@')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #CC66CC;',
            4 => 'color: #CC66CC;',
            5 => 'color: #000066;',
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;',
            1 => 'color: #CC66CC; font-weight: bold;'
            ),
        'SCRIPT' => array(
            -2 => 'color: #404040;', // CDATA
            -1 => 'color: #808080; font-style: italic;', // comments
            0 => 'color: #00bbdd;',
            1 => 'color: #ddbb00;',
            2 => 'color: #009900;'
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        2 => 'http://december.com/html/4/element/{FNAMEL}.html',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        -2 => array(
            '<![CDATA[' => ']]>'
            ),
        -1 => array(
            '<!--' => '-->'
            ),
        0 => array(
            '<!DOCTYPE' => '>'
            ),
        1 => array(
            '&' => ';'
            ),
        2 => array(
            '(' => ')'
            ),
        3 => array(
            '{' => '}'
        ),
        4 => array(
            '<' => '>'
        )

    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        -2 => false,
        -1 => false,
        0 => false,
        1 => false,
        2 => true
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            ),
            4 => array(
                'DISALLOWED_BEFORE' => '@',
            )
        )
    )
);
