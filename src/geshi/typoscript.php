<?php
/*************************************************************************************
 * typoscript.php
 * --------
 * Author: Jan-Philipp Halle (typo3@jphalle.de)
 * Copyright: (c) 2005 Jan-Philipp Halle (http://www.jphalle.de/)
 * Release Version: 1.0.8
 * Date Started: 2005/07/29
 *
 * TypoScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/11 (1.0.8)
 * - Michiel Roos <geshi@typofree.org> Complete rewrite
 * 2005/07/29 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/07/14)
 * -------------------------
 * <things-to-do>
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
	'LANG_NAME' => 'TypoScript',
	'COMMENT_SINGLE' => array(1  => '//', 2 => '####', 3 => '# *'),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array(),
	'ESCAPE_CHAR' => '',
	'KEYWORDS' => array(
		// Conditions: http://support.typo3.org/documentation/tsref/conditions/
		1 => array(
			'browser',
			'compatVersion',
			'dayofmonth',
			'dayofweek',
			'device',
			'globalString',
			'globalVars',
			'hostname',
			'hour',
			'ip',
			'language',
			'loginuser',
			'loginUser',
			'minute',
			'month',
			'PIDinRootline',
			'PIDupinRootline',
			'system',
			'treelevel',
			'useragent',
			'userFunc',
			'usergroup',
			'version'
			),

		// Functions: http://support.typo3.org/documentation/tsref/functions/
        2 => array(
			'addParams',
			'encapsLines',
			'filelink',
			'HTMLparser',
			'HTMLparser_tags',
			'if',
			'imageLinkWrap',
			'imgResource',
			'makelinks',
			'numRows',
			'parseFunc',
			'select',
			'split',
			'stdWrap',
			'tableStyle',
			'tags',
			'textStyle',
			'typolink'
	    	),

		// Toplevel objects: http://support.typo3.org/documentation/tsref/tlo-objects/
		3 => array(
			'CARRAY',
			'CONFIG',
			'CONSTANTS',
			'FE_DATA',
			'FE_TABLE',
			'FRAME',
			'FRAMESET',
			'META',
			'PAGE',
			'plugin'
			),

		// Content Objects (cObject) : http://support.typo3.org/documentation/tsref/cobjects/
		4 => array(
			'CASE',
			'CLEARGIF',
			'COA',
			'COA_INT',
			'COBJ_ARRAY',
			'COLUMNS',
			'CONTENT',
			'CTABLE',
			'EDITPANEL',
			'FILE',
			'FORM',
			'HMENU',
			'HRULER',
			'HTML',
			'IMAGE',
			'IMG_RESOURCE',
			'IMGTEXT',
			'LOAD_REGISTER',
			'MULTIMEDIA',
			'OTABLE',
			'PHP_SCRIPT',
			'PHP_SCRIPT_EXT',
			'PHP_SCRIPT_INT',
			'RECORDS',
			'RESTORE_REGISTER',
			'SEARCHRESULT',
			'TEMPLATE',
			'TEXT',
			'USER',
			'USER_INT'
			),

		// GIFBUILDER toplevel link: http://support.typo3.org/documentation/tsref/gifbuilder/
		5 => array(
			'GIFBUILDER',
			),

		// GIFBUILDER: http://support.typo3.org/documentation/tsref/gifbuilder/
		// NOTE! the IMAGE and TEXT field already are linked in group 4, they
		// cannot be linked twice . . . . unfortunately
		6 => array(
			'ADJUST',
			'BOX',
			'CROP',
			'EFFECT',
			'EMBOSS',
			//'IMAGE',
			'IMGMAP',
			'OUTLINE',
			'SCALE',
			'SHADOW',
			//'TEXT',
			'WORKAREA'
			),

		// MENU Objects: http://support.typo3.org/documentation/tsref/menu/
		7 => array(
			'GMENU',
			'GMENU_FOLDOUT',
			'GMENU_LAYERS',
			'IMGMENU',
			'IMGMENUITEM',
			'JSMENU',
			'JSMENUITEM',
			'TMENU',
			'TMENUITEM',
			'TMENU_LAYERS'
			),

		// MENU common properties: http://support.typo3.org/documentation/tsref/menu/common-properties/
		8 => array(
			'JSWindow',
			'addParams',
			'alternativeSortingField',
			'begin',
			'debugItemConf',
			'imgNameNotRandom',
			'imgNamePrefix',
			'itemArrayProcFunc',
			'maxItems',
			'minItems',
			'overrideId',
			'sectionIndex',
			'showAccessRestrictedPages',
			'submenuObjSuffixes'
			),

		// MENU item states: http://support.typo3.org/documentation/tsref/menu/item-states/
		9 => array(
			'ACT',
			'ACTIFSUB',
			'ACTIFSUBRO',
			'ACTRO',
			'CUR',
			'CURIFSUB',
			'CURIFSUBRO',
			'CURRO',
			'IFSUB',
			'IFSUBRO',
			'NO',
			'SPC',
			'USERDEF1',
			'USERDEF1RO',
			'USERDEF2',
			'USERDEF2RO',
			'USR',
			'USRRO'
			),
		),

	// Does not include '-' because of stuff like htmlTag_langKey = en-GB and
	// lib.nav-sub
	'SYMBOLS' => array(
		0 => array(
			'|',
			'+', '*', '/', '%',
			'!', '&&', '^',
			'<', '>', '=',
			'?', ':',
			'.',
			),
		1 => array(
			'(', ')', '{', '}', '[', ']'
			),
		),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => false,
		1 => true,
		2 => true,
		3 => true,
		4 => true,
		5 => true,
		6 => true,
		7 => true,
		8 => true,
		9 => true,
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #ed7d14;',
			2 => 'color: #000000; font-weight: bold;',
			3 => 'color: #990000;',
			4 => 'color: #990000;',
			5 => 'color: #990000;',
			6 => 'color: #990000;',
			7 => 'color: #990000;',
			8 => 'color: #000000; font-weight: bold;',
			9 => 'color: #990000;',
			),
		'COMMENTS' => array(
			1 => 'color: #aaa; font-style: italic;',
			2 => 'color: #aaa; font-style: italic;',
			3 => 'color: #aaa; font-style: italic;',
			'MULTI' => 'color: #aaa; font-style: italic;'
			),
		'STRINGS' => array(
			0 => 'color: #ac14aa;'
			),
		'NUMBERS' => array(
			0 => 'color: #ac14aa;'
			),
		'METHODS' => array(
			1 => 'color: #0000e0; font-weight: bold;',
			2 => 'color: #0000e0; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #990000; font-weight: bold;'
			),
		'SYMBOLS' => array(
			0 => 'color: #339933; font-weight: bold;',
				// Set this to the same value as brackets above
			1 => 'color: #990000; font-weight: bold;'
			),
		'REGEXPS' => array(
			0 => 'color: #0000e0;',
			1 => 'color: #ed9e00;',
			2 => 'color: #40a6ed;',
//			3 => 'color: #00b3e0;',
			4 => 'color: #0000e0; font-weight: bold;',
//			5 => 'color: #0000e0; font-weight: bold;',
			6 => 'color: #ed7d14;',
//			7 => 'color: #990000;',
			8 => 'color: #0000e0; font-weight: bold;',
			),
		'ESCAPE_CHAR' => array(
			),
		'SCRIPT' => array(
			)
		),
	'URLS' => array(
		1 => 'http://support.typo3.org/documentation/tsref/conditions/{FNAME}/',
		2 => 'http://support.typo3.org/documentation/tsref/functions/{FNAME}/',
		3 => 'http://support.typo3.org/documentation/tsref/tlo-objects/{FNAME}/',
		4 => 'http://support.typo3.org/documentation/tsref/cobjects/{FNAME}/',
		5 => 'http://support.typo3.org/documentation/tsref/gifbuilder/',
		6 => 'http://support.typo3.org/documentation/tsref/gifbuilder/{FNAME}/',
		7 => 'http://support.typo3.org/documentation/tsref/menu/{FNAME}/',
		8 => 'http://support.typo3.org/documentation/tsref/menu/common-properties/',
		9 => 'http://support.typo3.org/documentation/tsref/menu/item-states/'
		),
	'OOLANG' => false,
	'OBJECT_SPLITTERS' => array(
        ),
	'REGEXPS' => array(
			// Constant
		0 => array(
			GESHI_SEARCH => '(\{)(\$[a-zA-Z_\.]+[a-zA-Z0-9_\.]*)(\})',
			GESHI_REPLACE => '\\2',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '\\1',
			GESHI_AFTER => '\\3'
			),

			// Constant dollar sign
		1 => array(
			GESHI_SEARCH => '(\$)([a-zA-Z_\.]+[a-zA-Z0-9_\.]*)',
			GESHI_REPLACE => '\\1',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '',
			GESHI_AFTER => '\\2'
			),

			// xhtml tag
		2 => array(
			GESHI_SEARCH => '(&lt;.+?&gt;)',
			GESHI_REPLACE => '\\1',
			GESHI_MODIFIERS => 's',
			GESHI_BEFORE => '',
			GESHI_AFTER => ''
	        ),

			// HTML entity
			// TODO these are currently not highlighted properly by GeSHi
		/*
		3 => array(
			//GESHI_SEARCH => '(&amp;[a-zA-Z0-9]+;)',
			GESHI_SEARCH => '(&amp;(?!([a-zA-Z0-9#]{1,6};)))',
			GESHI_REPLACE => '\\1\\2',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '',
			GESHI_AFTER => ''
	        ),
		 */

			// extension keys / tables: (static|user|ttx|tx|tt|fe)_something[_something]
		4 => array(
			GESHI_SEARCH => '(plugin\.|[^\.]\b)((static|user|ttx|tx|tt|fe)(_[0-9A-Za-z_]+?)\b)',
			GESHI_REPLACE => '\\2',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '\\1',
			GESHI_AFTER => ''
			),

			// markers
			// TODO these are currently seen as comments by GeSHi
		/*
		5 => array(
			GESHI_SEARCH => '(\#\#\#.+?\#\#\#)',
			GESHI_REPLACE => '\\1',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '',
			GESHI_AFTER => ''
            ),
		 */

			// conditions and controls
		6 => array(
			GESHI_SEARCH => '(\[)(globalVar|global|end)\b',
			GESHI_REPLACE => '\\2',
			GESHI_MODIFIERS => 'i',
			GESHI_BEFORE => '\\1',
			GESHI_AFTER => ''
			),

			// HEX color codes
			// TODO these are currently seen as comments by GeSHi
			/*
		7 => array(
			GESHI_SEARCH => '(\#([0-9abcdefABCDEF]{6}|[0-9abcdefABCDEF]{3}))',
			GESHI_REPLACE => '\\1',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '',
			GESHI_AFTER => ''
			),
			*/

			// lowlevel setup and constant objects
		8 => array(
			GESHI_SEARCH => '([^\.\$-\{]\b)(cObj|field|config|content|file|frameset|includeLibs|lib|page|plugin|register|resources|sitemap|sitetitle|styles|temp|tt_content|tt_news|types|xmlnews)\b',
			GESHI_REPLACE => '\\2',
			GESHI_MODIFIERS => '',
			GESHI_BEFORE => '\\1',
			GESHI_AFTER => ''
		),
	),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
);

?>
