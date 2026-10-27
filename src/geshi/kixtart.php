<?php
/*************************************************************************************
 * kixtart.php
 * --------
 * Author: Riley McArdle (riley@glyff.net)
 * Copyright: (c) 2007 Riley McArdle (http://www.glyff.net/)
 * Release Version: 1.0.9.1
 * Date Started: 2007/08/31
 *
 * PHP language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2007/08/31 (1.0.7.22)
 *  -  First Release
 *
 * TODO (updated 2007/08/31)
 * -------------------------
 * *
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
    'LANG_NAME' => 'KiXtart',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            '?', 'Beep', 'Big', 'Break', 'Call', 'Case', 'CD', 'CLS', 'Color',
            'Cookie1', 'Copy', 'Debug', 'Del', 'Dim', 'Display', 'Do', 'Each',
            'Else', 'EndFunction', 'EndIf', 'EndSelect', 'Exit', 'FlushKB',
            'For', 'Function', 'Get', 'GetS', 'Global', 'Go', 'GoSub', 'Goto',
            'If', 'Include', 'Loop', 'MD', 'Move', 'Next', 'Password', 'Play',
            'Quit', 'RD', 'ReDim', 'Return', 'Run', 'Select', 'Set', 'SetL',
            'SetM', 'SetTime', 'Shell', 'Sleep', 'Small', 'Until', 'Use',
            'While'
            ),
        2 => array(
            '@Address', '@Build', '@Color', '@Comment', '@CPU', '@CRLF', '@CSD',
            '@CurDir', '@Date', '@Day', '@Domain', '@DOS', '@Error',
            '@FullName', '@HomeDir', '@HomeDrive', '@HomeShr', '@HostName',
            '@InUDF', '@InWin', '@IPAddress0', '@IPAddress1', '@IPAddress2',
            '@IPAddress3', '@Kix', '@LanRoot', '@LDomain', '@LDrive', '@LM',
            '@LogonMode', '@LongHomeDir', '@LServer', '@MaxPwAge', '@MDayNo',
            '@Mhz', '@Month', '@MonthNo', '@MSecs', '@OnWOW64', '@PID',
            '@PrimaryGroup', '@Priv', '@ProductSuite', '@ProductType',
            '@ProgramFilesx86', '@PwAge', '@RAS', '@ReleaseID', '@ReleaseName',
            '@Result', '@RServer', '@ScriptDir', '@ScriptExe', '@ScriptName',
            '@SError', '@SID', '@Site', '@StartDir', '@SysLang', '@Ticks',
            '@Time', '@TSSession', '@UserID', '@UserLang', '@WDayNo', '@WkSta',
            '@WUserID', '@YDayNo', '@Year'),
        3 => array(
            'Abs', 'AddKey', 'AddPrinterConnection', 'AddProgramGroup',
            'AddProgramItem', 'Asc', 'AScan', 'At', 'BackupEventLog', 'Box',
            'CDbl', 'Chr', 'CInt', 'ClearEventLog', 'Close', 'CompareFileTimes',
            'CreateObject', 'CStr', 'DecToHex', 'DelKey',
            'DelPrinterConnection', 'DelProgramGroup', 'DelProgramItem',
            'DelTree', 'DelValue', 'Dir', 'EnumGroup', 'EnumIPInfo', 'EnumKey',
            'EnumLocalGroup', 'EnumValue', 'Execute', 'Exist', 'ExistKey',
            'ExpandEnvironmentVars', 'Fix', 'FormatNumber', 'FreeFileHandle',
            'GetCommandLine', 'GetDiskSpace', 'GetFileAttr', 'GetFileSize',
            'GetFileTime', 'GetFileVersion', 'GetObject', 'IIf', 'InGroup',
            'InStr', 'InStrRev', 'Int', 'IsDeclared', 'Join', 'KBHit',
            'KeyExist', 'LCase', 'Left', 'Len', 'LoadHive', 'LoadKey',
            'LogEvent', 'LogOff', 'LTrim', 'MemorySize', 'MessageBox', 'Open',
            'ReadLine', 'ReadProfileString', 'ReadType', 'ReadValue',
            'RedirectOutput', 'Replace', 'Right', 'Rnd', 'Round', 'RTrim',
            'SaveKey', 'SendKeys', 'SendMessage', 'SetASCII', 'SetConsole',
            'SetDefaultPrinter', 'SetFileAttr', 'SetFocus', 'SetOption',
            'SetSystemState', 'SetTitle', 'SetWallpaper', 'ShowProgramGroup',
            'Shutdown', 'SIDToName', 'Split', 'SRnd', 'SubStr', 'Trim',
            'UBound', 'UCase', 'UnloadHive', 'Val', 'VarType', 'VarTypeName',
            'WriteLine', 'WriteProfileString', 'WriteValue'
            )
        ),
    'SYMBOLS' => array(
        '&', '(', ')', '*', '+', '-', '/', '<', '=', '>', '?', '[', ']', '^',
        '|', '~'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            // Commands.
            1 => 'color: #904201;',
            // Macros.
            2 => 'color: #8f02c2;',
            // Functions.
            3 => 'color: #0254b3;'
            ),
        'COMMENTS' => array(
            1 => 'color: #585858; font-style: italic;',
            'MULTI' => 'color: #585858; font-style: italic;'
            ),
        'STRINGS' => array(
            0 => 'color: #b20724;'
            ),
        'METHODS' => array(
            1 => 'color: #5b5b04;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #3d3d3d;'
            ),
        'REGEXPS' => array(
            // Variables.
            0 => 'color: #016701;',
            // Labels.
            1 => 'color: #01635b;'
            )
        ),
    'URLS' => array(
        1 => 'http://www.kixtart.org/manual/Commands/{FNAMEL}.htm',
        2 => '',
        3 => 'http://www.kixtart.org/manual/Functions/{FNAMEL}.htm'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        // Variables.
        0 => '\\$[0-9A-Za-z!#%:\\\\_`{}]*',
        // Labels (following a KiXtart symbol boundary).
        1 => '(?<![0-9A-Za-z!#%:@\\\\_`{}]):[0-9A-Za-z!#%:\\\\_`{}]+'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            // Only match commands with KiXtart symbol boundaries.
            1 => array(
                'DISALLOWED_BEFORE' => '(?<![0-9A-Za-z!#$%:@?.\\\\_`{}])',
                'DISALLOWED_AFTER' => '(?![0-9A-Za-z!#$%:@?\\\\_`{}])'
                ),
            // Match macros anywhere.
            2 => array(
                'DISALLOWED_BEFORE' => '',
                'DISALLOWED_AFTER' => ''
                ),
            // Only match functions with KiXtart symbol boundaries.
            3 => array(
                'DISALLOWED_BEFORE' => '(?<![0-9A-Za-z!#$%:@?.\\\\_`{}])',
                'DISALLOWED_AFTER' => '(?![0-9A-Za-z!#$%:@?\\\\_`{}])'
                )
            ),
        'ENABLE_FLAGS' => array(
            'BRACKETS' => GESHI_NEVER,
            'NUMBERS' => GESHI_NEVER
            )
        )
);
