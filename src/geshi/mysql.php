<?php
/*************************************************************************************
 * mysql.php
 * ---------
 * Author: Carl F�rstenberg (azatoth@gmail.com)
 * Copyright: (c) 2005 Carl F�rstenberg, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.1
 * Date Started: 2004/06/04
 *
 * MySQL language file for GeSHi.
 *
 *
 *************************************************************************************
 *
 * This file is part of GeSHi.
 *
 * GeSHi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * GeSHi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GeSHi; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'MySQL',
    'COMMENT_SINGLE' => array(1 =>'--', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_OCT_PREFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_SCI_SHORT |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            /* Mix */
            'ACTION','ADD','ALTER','ANALYZE','ASC','BDB','BEGIN','BERKELEYDB',
            'BTREE','BY','CALL','CASCADE','CHECK','COLUMN','COLUMNS','COMMIT',
            'CONSTRAINT','CREATE','CROSS','DATA','DATABASE','DATABASES',
            'DECLARE','DELAYED','DELETE','DESC','DESCRIBE','DISTINCT',
            'DISTINCTROW','DO','DROP','ENCLOSED','END','ENGINE','ELSE','ERRORS',
            'ESCAPED','EXISTS','EXPLAIN','FALSE','FIELDS','FORCE','FOREIGN',
            'FROM','FULLTEXT','FUNCTION','GEOMETRY','GRANT','GROUP','HANDLER',
            'HASH','HAVING','HELP','HIGH_PRIORITY','IGNORE','INDEX','INFILE',
            'INNER','INNODB','INSERT','INTERVAL','INTO','JOIN','KEY','KEYS',
            'KILL','LIMIT','LINES','LOAD','LOCK','LOW_PRIORITY',
            'MASTER_SERVER_ID','MATCH','MIDDLEINT','MODIFY','MRG_MYISAM',
            'NATURAL','NO','ON','OPTIMIZE','OPTION','OPTIONALLY','ORDER',
            'OUTER','OUTFILE','PRIMARY','PRIVILEGES','PROCEDURE','PURGE','READ',
            'REFERENCES','RENAME','REPLACE','REQUIRE','RESTRICT','RETURNS',
            'REVOKE','RLIKE','ROLLBACK','ROUTINE','RTREE','SAVEPOINT','SCHEMA',
            'SELECT','SET','SHOW','SOME','SONAME','SPATIAL','SQL_BIG_RESULT',
            'SQL_CALC_FOUND_ROWS','SQL_SMALL_RESULT','SSL','START','STARTING',
            'STATUS','STRAIGHT_JOIN','STRIPED','TABLE','TABLES','TERMINATED',
            'TO','TRANSACTIONS','TRANSACTION','TRUE','TRUNCATE','TYPES','UNION',
            'UNLOCK_TABLES','UPDATE','USAGE','USE','USER_RESOURCES','USING',
            'VALUES','VARCHARACTER','WARNINGS','WHEN','WHERE','WRITE',

            /* Control Flow Functions */
            'CASE','IF','THEN',
            ),
        2 => array(
            'BIGINT','BINARY','BIT','BLOB','BOOLEAN','CHAR','CHARACTER VARYING',
            'DATE','DATETIME','DEC','DECIMAL','DOUBLE','ENUM','FIXED','FLOAT',
            'INT','INTEGER','LONGBLOB','LONGTEXT','MEDIUMBLOB','MEDIUMINT',
            'MEDIUMTEXT','NUMERIC','PRECISION','REAL','SERIAL DEFAULT VALUE',
            'SERIAL','SET','SMALLINT','TEXT','TIME','TIMESTAMP','TINYBLOB',
            'TINYINT','TINYTEXT','VARBINARY','VARCHAR'
            ),
        3 => array(
            'ASCII','AUTO_INCREMENT','BOTH','CHARACTER','CHARSET','DEFAULT',
            'LEADING','NATIONAL','NULL','TRAILING','UNICODE','UNIQUE',
            'UNSIGNED','ZEROFILL'
            ),
        4 => array(
            'DAY','DAY_HOUR','DAY_MICROSECOND','DAY_MINUTE','DAY_SECOND','HOUR',
            'HOUR_MICROSECOND','HOUR_MINUTE','HOUR_SECOND','MICROSECOND',
            'MINUTE','MINUTE_MICROSECOND','MINUTE_SECOND','MONTH','QUARTER',
            'SECOND','SECOND_MICROSECOND','WEEK','YEAR','YEAR_MONTH'
            ),
        5 => array(
            'AND','BETWEEN','BINARY','COLLATE','DIV','IN','IS','LIKE',
            'MOD','NOT','OFFSET','OR','REGEXP','XOR'
            ),
        6 => array(
            /* String Functions */
            'BIN','BIT_LENGTH','CHAR_LENGTH','CHARACTER_LENGTH','COMPRESS',
            'CONCAT','CONCAT_WS','CONV','ELT','EXPORT_SET','FIELD',
            'FIND_IN_SET','FORMAT','HEX','INSTR','LCASE','LEFT','LENGTH',
            'LOAD_FILE','LOCATE','LOWER','LPAD','LTRIM','MAKE_SET','MD5','MID',
            'OCT','OCTET_LENGTH','ORD','POSITION','QUOTE','REPEAT','REVERSE',
            'RIGHT','RPAD','RTRIM','SHA1','SOUNDEX','SPACE','SUBSTRING',
            'SUBSTRING_INDEX','TRIM','UCASE','UNCOMPRESS','UNCOMPRESSD_LENGTH',
            'UNHEX','UPPER',
            ),
        7 => array(
            /* Numeric Functions */
            'ABS','ACOS','ASIN','ATAN','ATAN2','AVG','CEILING','CEIL','COS',
            'COT','CRC32','DEGREES','EXP','FLOOR','LN','LOG','LOG2','LOG10',
            'MIN','MAX','PI','POW','POWER','RADIANS','RAND','ROUND','SIGN',
            'SIN','SQRT','SUM','TAN',
            ),
        8 => array(
            /* Date and Time Functions */
            'ADDDATE','ADDTIME','CONVERT_TZ','CURDATE','CURRENT_DATE',
            'CURRENT_TIME','CURRENT_TIMESTAMP','CURTIME','DATE_ADD',
            'DATE_FORMAT','DATE_SUB','DATEDIFF','DAY','DAYNAME','DAYOFMONTH',
            'DAYOFWEEK','DAYOFYEAR','EXTRACT','FROM_DAYS','FROM_UNIXTIME',
            'GET_FORMAT','LAST_DAY','LOCALTIME','LOCALTIMESTAMP','MAKEDATE',
            'MAKETIME','MICROSECOND','MONTHNAME','NOW','PERIOD_ADD',
            'PERIOD_DIFF','QUARTER','SEC_TO_TIME','SECOND','STR_TO_DATE',
            'SUBDATE','SUBTIME','SYSDATE','TIME','TIME_FORMAT','TIME_TO_SEC',
            'TIMEDIFF','TIMESTAMP','TIMESTAMPADD','TIMESTAMPDIFF','TO_DAYS',
            'UNIX_TIMESTAMP','UTC_DATE','UTC_TIME','UTC_TIMESTAMP','WEEKDAY',
            'WEEKOFYEAR','YEARWEEK',
            ),
        ),
    'SYMBOLS' => array(
        ':=',
        '||',
        '&&',
        '=', '<=>', '>=', '>', '<=', '<', '<>', '!=',
        '|',
        '&',
        '<<', '>>',
        '-', '+',
        '*', '/', '%',
        '^',
        '~',
        '!',
        '(', ')',
        ',', ';'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #990099; font-weight: bold;',
            2 => 'color: #FF9900; font-weight: bold;',
            3 => 'color: #9900FF; font-weight: bold;',
            4 => 'color: #990099; font-weight: bold;',
            5 => 'color: #CC0099; font-weight: bold;',
            6 => 'color: #000099; font-weight: bold;',
            7 => 'color: #000099; font-weight: bold;',
            8 => 'color: #000099; font-weight: bold;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #808000; font-style: italic;',
            1 => 'color: #808000; font-style: italic;',
            2 => 'color: #808000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #004000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #FF00FF;'
            ),
        'STRINGS' => array(
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #008080;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #FF00FF;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
