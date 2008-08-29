<?php
/*************************************************************************************
 * mysql.php
 * ---------
 * Author: Carl F�rstenberg (azatoth@gmail.com)
 * Copyright: (c) 2005 Carl F�rstenberg, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8
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
    'CASE_KEYWORDS' => 1,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            /* Mix */
            'ADD','ALTER','ANALYZE','BDB','BEGIN','BERKELEYDB','BTREE','BY',
            'CALL','CASCADE','CHECK','COLUMN','COLUMNS','COMMIT','CONSTRAINT',
            'CREATE','CROSS','DATA','DATABASE','DATABASES','DECLARE','DELAYED',
            'DELETE','DESCRIBE','DISTINCT','DISTINCTROW','DO','DROP','ENCLOSED',
            'END','ELSE','ERRORS','ESCAPED','EXISTS','EXPLAIN','FALSE','FIELDS',
            'FORCE','FOREIGN','FROM','FULLTEXT','FUNCTION','GEOMETRY','GRANT',
            'GROUP','HANDLER','HASH','HAVING','HELP','HIGH_PRIORITY','IGNORE',
            'INDEX','INFILE','INNER','INNODB','INSERT','INTERVAL','INTO','JOIN',
            'KEY','KEYS','KILL','LINES','LOAD','LOCK','LOW_PRIORITY',
            'MASTER_SERVER_ID','MATCH','MIDDLEINT','MODIFY','MRG_MYISAM',
            'NATURAL','ON','OPTIMIZE','OPTION','OPTIONALLY','ORDER','OUTER',
            'OUTFILE','PRIMARY','PRIVILEGES','PROCEDURE','PURGE','READ',
            'REFERENCES','RENAME','REPLACE','REQUIRE','RESTRICT','RETURNS',
            'REVOKE','RLIKE','ROLLBACK','ROUTINE','RTREE','SAVEPOINT','SELECT',
            'SET','SHOW','SOME','SONAME','SPATIAL','SQL_BIG_RESULT',
            'SQL_CALC_FOUND_ROWS','SQL_SMALL_RESULT','SSL','START','STARTING',
            'STATUS','STRAIGHT_JOIN','STRIPED','TABLE','TABLES','TERMINATED',
            'TO','TRANSACTIONS','TRANSACTION','TRUE','TRUNCATE','TYPES','UNION',
            'UNLOCK_TABLES','UPDATE','USAGE','USE','USER_RESOURCES','USING',
            'VALUES','VARCHARACTER','WARNINGS','WHEN','WHERE','WRITE',

            /* Control Flow Functions */
            'CASE','THEN',

            /* String Functions */
            'BIN','BIT_LENGTH','CHAR_LENGTH','CHARACTER_LENGTH','COMPRESS',
            'CONCAT','CONCAT_WS','CONV','ELT','EXPORT_SET','FIELD',
            'FIND_IN_SET','FORMAT','HEX','INSTR','LCASE','LEFT','LENGTH',
            'LOAD_FILE','LOCATE','LOWER','LPAD','LTRIM','MAKE_SET','MD5','MID',
            'OCT','OCTET_LENGTH','ORD','POSITION','QUOTE','REPEAT','REVERSE',
            'RIGHT','RPAD','RTRIM','SHA1','SOUNDEX','SPACE','SUBSTRING',
            'SUBSTRING_INDEX','TRIM','UCASE','UNCOMPRESS','UNCOMPRESSD_LENGTH',
            'UNHEX','UPPER',

            /* Numeric Functions */
            'ABS','ACOS','ASIN','ATAN','ATAN2','CEILING','CEIL','COS','COT',
            'CRC32','DEGREES','EXP','FLOOR','LN','LOG','LOG2','LOG10','PI',
            'POW','POWER','RADIANS','RAND','ROUND','SIGN','SIN','SQRT','TAN',

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
        2 => array(
            'BIGINT','BINARY','BIT','BLOB','CHAR','CHARACTER VARYING','DATE',
            'DATETIME','DEC','DECIMAL','DOUBLE','ENUM','FIXED','FLOAT','INT',
            'INTEGER','LONGBLOB','LONGTEXT','MEDIUMBLOB','MEDIUMINT',
            'MEDIUMTEXT','NUMERIC','PRECISION','REAL','SERIAL DEFAULT VALUE',
            'SERIAL','SET','SMALLINT','TEXT','TIME','TIMESTAMP','TINYBLOB',
            'TINYINT','TINYTEXT','VARBINARY','VARCHAR'
            ),
        3 => array(
            'ASCII','AUTO_INCREMENT','BOTH','CHARACTER','CHARSET','DEFAULT',
            'LEADING','NATIONAL','NULL','SET','TRAILING','UNICODE','UNIQUE',
            'UNSIGNED','ZEROFILL'
            ),
        4 => array(
            'DAY','DAY_HOUR','DAY_MICROSECOND','DAY_MINUTE','DAY_SECOND','HOUR',
            'HOUR_MICROSECOND','HOUR_MINUTE','HOUR_SECOND','MICROSECOND',
            'MINUTE','MINUTE_MICROSECOND','MINUTE_SECOND','MONTH','QUARTER',
            'SECOND','SECOND_MICROSECOND','WEEK','YEAR','YEAR_MONTH'
            ),
        5 => array(
            'AND','BETWEEN','BINARY','COLLATE','DIV','IN','IS','LIKE','LIMIT',
            'MOD','NOT','OFFSET','OR','REGEXP','XOR'
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
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold;',
            2 => 'color: #aa9933; font-weight: bold;',
            3 => 'color: #aa3399; font-weight: bold;',
            4 => 'color: #33aa99; font-weight: bold;',
            5 => 'color: #993333; font-weight: bold;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #808080; font-style: italic;',
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #808080; font-style: italic;'
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
            0 => 'color: #66cc66;'
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
        5 => ''
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
