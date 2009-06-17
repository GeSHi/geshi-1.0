<?php
/*************************************************************************************
 * autohotkey.php
 * --------
 * Author: Naveen Garg (naveen.garg@gmail.com)
 * Copyright: (c) 2009 Naveen Garg and GeSHi
 * Release Version: 1.0.8.5
 * Date Started: 2009/06/11
 *
 * Autohotkey language file for GeSHi.
 *
 * CHANGES
 * -------
 * Release 1.0.8.5 (2009/06/11)
 * - First Release
 *
 * TODO
 * ----
 * Reference: http://www.autohotkey.com/docs/
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
    'LANG_NAME' => 'Autohotkey',
    'COMMENT_SINGLE' => array(
        1 => ';'
        ),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'while','Pixel','Mouse','Screen','Relative','RGBLTrim',
            'RTrim','JoinLow','BelowNormal','Normal','AboveNormal',
            'High','Realtimeahk_id','ahk_pid','ahk_class','ahk_groupBetween',
            'Contains','In','Is','Integer','Float',
            'IntegerFast','FloatFast','Digit','Xdigit',
            'Alpha','Upper','Lower','Alnum','Time',
            'DateNot','Or','AndAlwaysOnTop','Topmost','Top',
            'Bottom','Transparent','TransColor','Redraw','Region',
            'ID','IDLast','ProcessName','MinMax','ControlList',
            'Count','List','Capacity','StatusCD','Eject',
            'SetLabel','Serial','Type','Statusstatic','global',
            'local','ByRefSeconds','Minutes','Hours','DaysRead',
            'ParseLogoff','Error','SingleTray','Add',
            'Rename','Check','UnCheck','ToggleCheck','Enable',
            'Disable','ToggleEnable','Default','NoDefault','Standard',
            'NoIcon','Tip','Show','MainWindow',
            'NoMainWindow','UseErrorLevelText','Picture','Pic','GroupBox',
            'Button','Checkbox','Radio','DropDownList','DDL',
            'ComboBox','ListBox','ListView','DateTime','MonthCal',
            'UpDownIconSmall','Tile','Report','SortDesc','NoSort',
            'NoSortHdr','Grid','Hdr','AutoSize','Rangexm',
            'ym','ys','xs','xp','ypFont',
            'Resize','Owner','Submit','NoHide','Minimize',
            'Maximize','Restore','NoActivate','NA',
            'Destroy','CenterMargin','MaxSize','MinSize','OwnDialogs',
            'GuiEscape','GuiClose','GuiSize','GuiContextMenu','GuiDropFilesTabStop',
            'AltSubmit','Wrap','HScroll','VScroll',
            'First','ImageList','Lines','WantCtrlA','WantF2',
            'Vis','VisFirst','Number','Uppercase','Lowercase',
            'Limit','Password','Multi','WantReturn','Group',
            'Background','bold','italic','strike','underline',
            'norm','BackgroundTrans','Theme','Caption','Delimiter',
            'MinimizeBox','MaximizeBox','SysMenu','ToolWindow','Flash',
            'Style','ExStyle','Check3','Checked','CheckedGray',
            'Center','NoTab','Section','Move','Focus',
            'Hide','Choose','ChooseString','Text','Pos',
            'Enabled','Disabled','Visible','LastFound','LastFoundExistAltTab',
            'ShiftAltTab','AltTabMenu','AltTabAndMenu','AltTabMenuDismissNoTimers','Interrupt',
            'Priority','WaitClose','Wait','Exist','Close',
            'BitShiftLeft','BitShiftRightYes','No','Ok','Cancel',
            'Abort','Retry','Ignore','TryAgainOn','Off',
            'AllHKEY_LOCAL_MACHINE','HKEY_USERS','HKEY_CURRENT_USER','HKEY_CLASSES_ROOT','HKEY_CURRENT_CONFIG',
            'HKLM','HKU','HKCU','HKCR','HKCCREG_SZ',
            'REG_EXPAND_SZ','REG_MULTI_SZ','REG_DWORD','REG_BINARY'
            ),
        2 => array(
            'A_AhkPath','A_AhkVersion','A_AppData','A_AppDataCommon',
            'A_AutoTrim','A_BatchLines','A_CaretX','A_CaretY',
            'A_ComputerName','A_ControlDelay','A_Cursor','A_DD',
            'A_DDD','A_DDDD','A_DefaultMouseSpeed','A_Desktop',
            'A_DesktopCommon','A_DetectHiddenText','A_DetectHiddenWindows','A_EndChar',
            'A_EventInfo','A_ExitReason','A_FormatFloat','A_FormatInteger',
            'A_Gui','A_GuiEvent','A_GuiControl','A_GuiControlEvent',
            'A_GuiHeight','A_GuiWidth','A_GuiX','A_GuiY',
            'A_Hour','A_IconFile','A_IconHidden','A_IconNumber',
            'A_IconTip','A_Index','A_IPAddress1','A_IPAddress2',
            'A_IPAddress3','A_IPAddress4','A_ISAdmin','A_IsCompiled',
            'A_IsCritical','A_IsPaused','A_IsSuspended','A_KeyDelay',
            'A_Language','A_LastError','A_LineFile','A_LineNumber',
            'A_LoopField','A_LoopFileAttrib','A_LoopFileDir','A_LoopFileExt',
            'A_LoopFileFullPath','A_LoopFileLongPath','A_LoopFileName','A_LoopFileShortName',
            'A_LoopFileShortPath','A_LoopFileSize','A_LoopFileSizeKB','A_LoopFileSizeMB',
            'A_LoopFileTimeAccessed','A_LoopFileTimeCreated','A_LoopFileTimeModified','A_LoopReadLine',
            'A_LoopRegKey','A_LoopRegName','A_LoopRegSubkey','A_LoopRegTimeModified',
            'A_LoopRegType','A_MDAY','A_Min','A_MM',
            'A_MMM','A_MMMM','A_Mon','A_MouseDelay',
            'A_MSec','A_MyDocuments','A_Now','A_NowUTC',
            'A_NumBatchLines','A_OSType','A_OSVersion','A_PriorHotkey',
            'A_ProgramFiles','A_Programs','A_ProgramsCommon','A_ScreenHeight',
            'A_ScreenWidth','A_ScriptDir','A_ScriptFullPath','A_ScriptName',
            'A_Sec','A_Space','A_StartMenu','A_StartMenuCommon',
            'A_Startup','A_StartupCommon','A_StringCaseSense','A_Tab',
            'A_Temp','A_ThisFunc','A_ThisHotkey','A_ThisLabel',
            'A_ThisMenu','A_ThisMenuItem','A_ThisMenuItemPos','A_TickCount',
            'A_TimeIdle','A_TimeIdlePhysical','A_TimeSincePriorHotkey','A_TimeSinceThisHotkey',
            'A_TitleMatchMode','A_TitleMatchModeSpeed','A_UserName','A_WDay',
            'A_WinDelay','A_WinDir','A_WorkingDir','A_YDay',
            'A_YEAR','A_YWeek','A_YYYY','Clipboard',
            'ClipboardAll','ComSpec','ErrorLevel','ProgramFiles',
            ),
        3 => array(
            'AutoTrim',
            'BlockInput','Break','Click',
            'ClipWait','Continue','Control',
            'ControlClick','ControlFocus','ControlGet',
            'ControlGetFocus','ControlGetPos','ControlGetText',
            'ControlMove','ControlSend','ControlSendRaw',
            'ControlSetText','CoordMode','Critical',
            'DetectHiddenText','DetectHiddenWindows','Drive',
            'DriveGet','DriveSpaceFree','Edit',
            'Else','EnvAdd','EnvDiv',
            'EnvGet','EnvMult','EnvSet',
            'EnvSub','EnvUpdate','Exit',
            'ExitApp','FileAppend','FileCopy',
            'FileCopyDir','FileCreateDir','FileCreateShortcut',
            'FileDelete','FileGetAttrib','FileGetShortcut',
            'FileGetSize','FileGetTime','FileGetVersion',
            'FileInstall','FileMove','FileMoveDir',
            'FileRead','FileReadLine','FileRecycle',
            'FileRecycleEmpty','FileRemoveDir','FileSelectFile',
            'FileSelectFolder','FileSetAttrib','FileSetTime',
            'FormatTime','Gosub',
            'Goto','GroupActivate','GroupAdd',
            'GroupClose','GroupDeactivate','Gui',
            'GuiControl','GuiControlGet','Hotkey',
            'IfExist','IfGreater','IfGreaterOrEqual',
            'IfInString','IfLess','IfLessOrEqual',
            'IfMsgBox','IfNotEqual','IfNotExist',
            'IfNotInString','IfWinActive','IfWinExist',
            'IfWinNotActive','IfWinNotExist','ImageSearch',
            'IniDelete','IniRead','IniWrite',
            'Input','InputBox','KeyHistory',
            'KeyWait','ListHotkeys','ListLines',
            'ListVars','Loop',
            'Menu','MouseClick','MouseClickDrag',
            'MouseGetPos','MouseMove','MsgBox',
            'OnExit','OutputDebug',
            'PixelGetColor','PixelSearch','PostMessage',
            'Process','Progress','Random',
            'RegDelete','RegRead','RegWrite',
            'Reload','Repeat','Return',
            'Run','RunAs','RunWait',
            'Send','SendEvent','SendInput',
            'SendMessage','SendMode','SendPlay',
            'SendRaw','SetBatchLines','SetCapslockState',
            'SetControlDelay','SetDefaultMouseSpeed','SetEnv',
            'SetFormat','SetKeyDelay','SetMouseDelay',
            'SetNumlockState','SetScrollLockState','SetStoreCapslockMode',
            'SetTimer','SetTitleMatchMode','SetWinDelay',
            'SetWorkingDir','Shutdown','Sleep',
            'Sort','SoundBeep','SoundGet',
            'SoundGetWaveVolume','SoundPlay','SoundSet',
            'SoundSetWaveVolume','SplashImage','SplashTextOff',
            'SplashTextOn','SplitPath','StatusBarGetText',
            'StatusBarWait','StringCaseSense','StringGetPos',
            'StringLeft','StringLen','StringLower',
            'StringMid','StringReplace','StringRight',
            'StringSplit','StringTrimLeft','StringTrimRight',
            'StringUpper','Suspend','SysGet',
            'Thread','ToolTip','Transform',
            'TrayTip','URLDownloadToFile','While',
            'WinActivate','WinActivateBottom','WinClose',
            'WinGet','WinGetActiveStats','WinGetActiveTitle',
            'WinGetClass','WinGetPos','WinGetText',
            'WinGetTitle','WinHide','WinKill',
            'WinMaximize','WinMenuSelectItem','WinMinimize',
            'WinMinimizeAll','WinMinimizeAllUndo','WinMove',
            'WinRestore','WinSet','WinSetTitle',
            'WinShow','WinWait','WinWaitActive',
            'WinWaitClose','WinWaitNotActive'
            ),
        4 => array(
            'Abs','ACos','Asc','ASin',
            'ATan','Ceil','Chr','Cos',
            'DllCall','Exp','FileExist','Floor',
            'GetKeyState','IL_Add','IL_Create','IL_Destroy',
            'InStr','IsFunc','IsLabel','Ln',
            'Log','LV_Add','LV_Delete','LV_DeleteCol',
            'LV_GetCount','LV_GetNext','LV_GetText','LV_Insert',
            'LV_InsertCol','LV_Modify','LV_ModifyCol','LV_SetImageList',
            'Mod','NumGet','NumPut','OnMessage',
            'RegExMatch','RegExReplace','RegisterCallback','Round',
            'SB_SetIcon','SB_SetParts','SB_SetText','Sin',
            'Sqrt','StrLen','SubStr','Tan',
            'TV_Add','TV_Delete','TV_GetChild','TV_GetCount',
            'TV_GetNext','TV_Get','TV_GetParent','TV_GetPrev',
            'TV_GetSelection','TV_GetText','TV_Modify','VarSetCapacity',
            'WinActive','WinExist'
            ),
        5 => array(
            'AllowSameLineComments','ClipboardTimeout','CommentFlag',
            'ErrorStdOut','EscapeChar','HotkeyInterval',
            'HotkeyModifierTimeout','Hotstring','IfWinActive',
            'IfWinExist','IfWinNotActive','IfWinNotExist',
            'Include','IncludeAgain','InstallKeybdHook',
            'InstallMouseHook','KeyHistory','LTrim',
            'MaxHotkeysPerInterval','MaxMem','MaxThreads',
            'MaxThreadsBuffer','MaxThreadsPerHotkey','NoEnv',
            'NoTrayIcon','Persistent','SingleInstance',
            'UseHook','WinActivateForce'
            ),
        6 => array(
            'Shift','LShift','RShift',
            'Alt','LAlt','RAlt',
            'LControl','RControl',
            'Ctrl','LCtrl','RCtrl',
            'LWin','RWin','AppsKey',
            'AltDown','AltUp','ShiftDown',
            'ShiftUp','CtrlDown','CtrlUp',
            'LWinDown','LWinUp','RWinDown',
            'RWinUp','LButton','RButton',
            'MButton','WheelUp','WheelDown',
            'WheelLeft','WheelRight','XButton1',
            'XButton2','Joy1','Joy2',
            'Joy3','Joy4','Joy5',
            'Joy6','Joy7','Joy8',
            'Joy9','Joy10','Joy11',
            'Joy12','Joy13','Joy14',
            'Joy15','Joy16','Joy17',
            'Joy18','Joy19','Joy20',
            'Joy21','Joy22','Joy23',
            'Joy24','Joy25','Joy26',
            'Joy27','Joy28','Joy29',
            'Joy30','Joy31','Joy32',
            'JoyX','JoyY','JoyZ',
            'JoyR','JoyU','JoyV',
            'JoyPOV','JoyName','JoyButtons',
            'JoyAxes','JoyInfo','Space',
            'Tab','Enter',
            'Escape','Esc','BackSpace',
            'BS','Delete','Del',
            'Insert','Ins','PGUP',
            'PGDN','Home','End',
            'Up','Down','Left',
            'Right','PrintScreen','CtrlBreak',
            'Pause','ScrollLock','CapsLock',
            'NumLock','Numpad0','Numpad1',
            'Numpad2','Numpad3','Numpad4',
            'Numpad5','Numpad6','Numpad7',
            'Numpad8','Numpad9','NumpadMult',
            'NumpadAdd','NumpadSub','NumpadDiv',
            'NumpadDot','NumpadDel','NumpadIns',
            'NumpadClear','NumpadUp','NumpadDown',
            'NumpadLeft','NumpadRight','NumpadHome',
            'NumpadEnd','NumpadPgup','NumpadPgdn',
            'NumpadEnter','F1','F2',
            'F3','F4','F5',
            'F6','F7','F8',
            'F9','F10','F11',
            'F12','F13','F14',
            'F15','F16','F17',
            'F18','F19','F20',
            'F21','F22','F23',
            'F24','Browser_Back','Browser_Forward',
            'Browser_Refresh','Browser_Stop','Browser_Search',
            'Browser_Favorites','Browser_Home','Volume_Mute',
            'Volume_Down','Volume_Up','Media_Next',
            'Media_Prev','Media_Stop','Media_Play_Pause',
            'Launch_Mail','Launch_Media','Launch_App1',
            'Launch_App2'
            )
        ),
    'SYMBOLS' => array(
        '(',')','[',']',
        '+','-','*','/','&','^',
        '=','+=','-=','*=','/=','&=',
        '==','<','<=','>','>=',':=',
        ',','.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: italic;',
            2 => 'color: #600000; font-weight: italic;',
            3 => 'color: #000080; font-style: italic; font-weight: italic;',
            4 => 'color: #0080FF; font-style: italic; font-weight: italic;',
            5 => 'color: #F000FF; font-style: italic;',
            6 => 'color: #A00FF0; font-style: italic;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'font-style: italic; color: #669900;',
            1 => 'font-style: italic; color: #009933;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #FF0000; font-weight: italic;'
            ),
        'STRINGS' => array(
            0 => 'font-weight: bold; color: #008080;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;'
            ),
        'METHODS' => array(
            1 => 'color: #0000FF; font-style: italic; font-weight: italic;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #FF0000; font-weight: italic;'
            ),
        'REGEXPS' => array(
            0 => 'font-weight: italic; color: #A00A0;',
            1 => 'color: #A00FF0; font-style: italic;',
            2 => 'color: #A00FF0; font-style: italic;'
            ),
        'SCRIPT' => array(
            )
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '_'
        ),
    'REGEXPS' => array(
        //Variables
        0 => '%[a-zA-Z_][a-zA-Z0-9_]*%',
        //hotstrings
        1 => '::[a-zA-Z_][a-zA-Z0-9_]*::',
        //labels
        2 => '^[a-zA-Z_][^http]*[a-zA-Z0-9_]*:'  // not working
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.autohotkey.com/docs/commands/{FNAME}.htm',
        4 => '',
        5 => '',
        6 => ''
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            5 => array(
                'DISALLOWED_BEFORE' => '(?<!\w)\#'
                )
            )
        )
);

?>