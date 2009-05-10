<?php
/*************************************************************************************
 * erlang.php
 * --------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Contributions:
 * - Uwe Dauernheim (uwe@dauernheim.net)
 * - Dan Forest-Barbier (dan@twisted.in)
 * Copyright: (c) 2008 Uwe Dauernheim (http://www.kreisquadratur.de/)
 * Release Version: 1\.0\.0
 * Date Started: 2008-09-27
 *
 * Erlang language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008-09-27 (1.0.0)
 *   [ ] First Release
 *
 * 2008-09-28 (1.0.0.1)
 *   [!] Bug fixed with keyword module.
 *   [+] Added more function names
 *
 * TODO (updated 2008-09-27)
 * -------------------------
 *   [!] Stop ';' from being transformed to '<SEMI>'
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
    'LANG_NAME' => 'Erlang',
    'COMMENT_SINGLE' => array(1 => '%'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("'", "\\"),
    'HARDCHAR' => "\\",
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' => GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'module', 'export', 'import', 'author', 'behaviour'
            ),
        2 => array(
            // erlang
            'set_cookie', 'get_cookie',
            // io
            'format', 'fwrite', 'fread',
            // gen_tcp
            'listen', 'accept', 'close',
            // gen_server
            'call', 'start_link'
            ),
        3 => array(
            'after', 'andalso', 'begin', 'case', 'catch', 'end', 'fun', 'if',
            'of', 'orelse', 'receive', 'try', 'when', 'query'
            ),
        // Built-In Functions
        4 => array(
            'abs', 'alive', 'apply', 'atom', 'atom_to_list', 'binary',
            'binary_to_list', 'binary_to_term', 'concat_binary', 'constant',
            'date', 'disconnect_node', 'element', 'erase', 'exit', 'float',
            'float_to_list', 'function', 'get', 'get_keys', 'group_leader',
            'halt', 'hhd', 'integer', 'integer_to_list', 'is_alive', 'length',
            'link', 'list', 'list_to_atom', 'list_to_binary', 'list_to_float',
            'list_to_integer', 'list_to_pid', 'list_to_tuple', 'load_module',
            'make_ref', 'monitor_node', 'nodes', 'node', 'now', 'number',
            'open_port', 'pid_to_list', 'pid', 'ports', 'port_close',
            'port_info', 'process_flag', 'process_info', 'process', 'put',
            'reference', 'register', 'registered', 'round', 'self',
            'setelement', 'size', 'sspawn', 'sspawn_link', 'split_binary',
            'statistics', 'term_to_binary', 'throw', 'time', 'trunc',
            'tuple_to_list', 'unlink', 'unregister', 'whereis'
            ),
        // Erlang/OTP internal modules (scary one)
        5 => array(
            'alarm_handler', 'any', 'app', 'application', 'appmon', 'appup',
            'array', 'asn1ct', 'asn1rt', 'auth', 'base64', 'beam_lib', 'c',
            'calendar', 'code', 'common_test_app', 'compile', 'config', 'corba',
            'corba_object', 'cosEventApp', 'CosEventChannelAdmin',
            'CosEventChannelAdmin_ConsumerAdmin',
            'CosEventChannelAdmin_EventChannel',
            'CosEventChannelAdmin_ProxyPullConsumer',
            'CosEventChannelAdmin_ProxyPullSupplier',
            'CosEventChannelAdmin_ProxyPushConsumer',
            'CosEventChannelAdmin_ProxyPushSupplier',
            'CosEventChannelAdmin_SupplierAdmin', 'CosEventDomainAdmin',
            'CosEventDomainAdmin_EventDomain',
            'CosEventDomainAdmin_EventDomainFactory', 'cosEventDomainApp',
            'CosFileTransfer_Directory', 'CosFileTransfer_File',
            'CosFileTransfer_FileIterator',
            'CosFileTransfer_FileTransferSession',
            'CosFileTransfer_VirtualFileSystem', 'cosFileTransferApp',
            'CosNaming', 'CosNaming_BindingIterator', 'CosNaming_NamingContext',
            'CosNaming_NamingContextExt', 'CosNotification',
            'CosNotification_AdminPropertiesAdmin', 'CosNotification_QoSAdmin',
            'cosNotificationApp', 'CosNotifyChannelAdmin_ConsumerAdmin',
            'CosNotifyChannelAdmin_EventChannel',
            'CosNotifyChannelAdmin_EventChannelFactory',
            'CosNotifyChannelAdmin_ProxyConsumer',
            'CosNotifyChannelAdmin_ProxyPullConsumer',
            'CosNotifyChannelAdmin_ProxyPullSupplier',
            'CosNotifyChannelAdmin_ProxyPushConsumer',
            'CosNotifyChannelAdmin_ProxyPushSupplier',
            'CosNotifyChannelAdmin_ProxySupplier',
            'CosNotifyChannelAdmin_SequenceProxyPullConsumer',
            'CosNotifyChannelAdmin_SequenceProxyPullSupplier',
            'CosNotifyChannelAdmin_SequenceProxyPushConsumer',
            'CosNotifyChannelAdmin_SequenceProxyPushSupplier',
            'CosNotifyChannelAdmin_StructuredProxyPullConsumer',
            'CosNotifyChannelAdmin_StructuredProxyPullSupplier',
            'CosNotifyChannelAdmin_StructuredProxyPushConsumer',
            'CosNotifyChannelAdmin_StructuredProxyPushSupplier',
            'CosNotifyChannelAdmin_SupplierAdmin',
            'CosNotifyComm_NotifyPublish', 'CosNotifyComm_NotifySubscribe',
            'CosNotifyFilter_Filter', 'CosNotifyFilter_FilterAdmin',
            'CosNotifyFilter_FilterFactory', 'CosNotifyFilter_MappingFilter',
            'cosProperty', 'CosPropertyService_PropertiesIterator',
            'CosPropertyService_PropertyNamesIterator',
            'CosPropertyService_PropertySet',
            'CosPropertyService_PropertySetDef',
            'CosPropertyService_PropertySetDefFactory',
            'CosPropertyService_PropertySetFactory', 'cosTime',
            'CosTime_TimeService', 'CosTime_TIO', 'CosTime_UTO',
            'CosTimerEvent_TimerEventHandler',
            'CosTimerEvent_TimerEventService', 'cosTransactions',
            'CosTransactions_Control', 'CosTransactions_Coordinator',
            'CosTransactions_RecoveryCoordinator', 'CosTransactions_Resource',
            'CosTransactions_SubtransactionAwareResource',
            'CosTransactions_Terminator', 'CosTransactions_TransactionFactory',
            'cover', 'cprof', 'cpu_sup', 'crashdump', 'crypto', 'crypto_app',
            'ct', 'ct_cover', 'ct_ftp', 'ct_master', 'ct_rpc', 'ct_snmp',
            'ct_ssh', 'ct_telnet', 'dbg', 'debugger', 'dets', 'dialyzer',
            'dict', 'digraph', 'digraph_utils', 'disk_log', 'disksup',
            'docb_gen', 'docb_transform', 'docb_xml_check', 'docbuilder_app',
            'driver_entry', 'edoc', 'edoc_doclet', 'edoc_extract',
            'edoc_layout', 'edoc_lib', 'edoc_run', 'egd', 'ei', 'ei_connect',
            'epmd', 'epp', 'epp_dodger', 'eprof', 'erl', 'erl_boot_server',
            'erl_call', 'erl_comment_scan', 'erl_connect', 'erl_ddll',
            'erl_driver', 'erl_error', 'erl_eterm', 'erl_eval',
            'erl_expand_records', 'erl_format', 'erl_global', 'erl_id_trans',
            'erl_internal', 'erl_lint', 'erl_malloc', 'erl_marshal',
            'erl_parse', 'erl_pp', 'erl_prettypr', 'erl_prim_loader',
            'erl_prim_loader_stub', 'erl_recomment', 'erl_scan',
            'erl_set_memory_block', 'erl_syntax', 'erl_syntax_lib', 'erl_tar',
            'erl_tidy', 'erlang', 'erlang_mode', 'erlang_stub', 'erlc',
            'erlsrv', 'error_handler', 'error_logger', 'erts_alloc',
            'erts_alloc_config', 'escript', 'et', 'et_collector', 'et_selector',
            'et_viewer', 'etop', 'ets', 'eunit', 'file', 'file_sorter',
            'filelib', 'filename', 'fixed', 'fprof', 'ftp', 'gb_sets',
            'gb_trees', 'gen_event', 'gen_fsm', 'gen_sctp', 'gen_server',
            'gen_tcp', 'gen_udp', 'gl', 'global', 'global_group', 'glu', 'gs',
            'heart', 'http', 'httpd', 'httpd_conf', 'httpd_socket',
            'httpd_util', 'i', 'ic', 'ic_c_protocol', 'ic_clib', 'igor', 'inet',
            'inets', 'init', 'init_stub', 'instrument', 'int', 'interceptors',
            'inviso', 'inviso_as_lib', 'inviso_lfm', 'inviso_lfm_tpfreader',
            'inviso_rt', 'inviso_rt_meta', 'io', 'io_lib', 'kernel_app', 'lib',
            'lists', 'lname', 'lname_component', 'log_mf_h', 'make', 'math',
            'megaco', 'megaco_codec_meas', 'megaco_codec_transform',
            'megaco_edist_compress', 'megaco_encoder', 'megaco_flex_scanner',
            'megaco_tcp', 'megaco_transport', 'megaco_udp', 'megaco_user',
            'memsup', 'mnesia', 'mnesia_frag_hash', 'mnesia_registry',
            'mod_alias', 'mod_auth', 'mod_esi', 'mod_security',
            'Module_Interface', 'ms_transform', 'net_adm', 'net_kernel',
            'new_ssl', 'nteventlog', 'observer_app', 'odbc', 'orber',
            'orber_acl', 'orber_diagnostics', 'orber_ifr', 'orber_tc',
            'orddict', 'ordsets', 'os', 'os_mon', 'os_mon_mib', 'os_sup',
            'otp_mib', 'overload', 'packages', 'percept', 'percept_profile',
            'pg', 'pg2', 'pman', 'pool', 'prettypr', 'proc_lib', 'proplists',
            'public_key', 'qlc', 'queue', 'random', 'rb', 're', 'regexp',
            'registry', 'rel', 'release_handler', 'reltool', 'relup', 'rpc',
            'run_erl', 'run_test', 'runtime_tools_app', 'sasl_app', 'script',
            'seq_trace', 'sets', 'shell', 'shell_default', 'slave', 'snmp',
            'snmp_app', 'snmp_community_mib', 'snmp_framework_mib',
            'snmp_generic', 'snmp_index', 'snmp_notification_mib', 'snmp_pdus',
            'snmp_standard_mib', 'snmp_target_mib', 'snmp_user_based_sm_mib',
            'snmp_view_based_acm_mib', 'snmpa', 'snmpa_conf', 'snmpa_error',
            'snmpa_error_io', 'snmpa_error_logger', 'snmpa_error_report',
            'snmpa_local_db', 'snmpa_mpd', 'snmpa_network_interface',
            'snmpa_network_interface_filter',
            'snmpa_notification_delivery_info_receiver',
            'snmpa_notification_filter', 'snmpa_supervisor', 'snmpc', 'snmpm',
            'snmpm_conf', 'snmpm_mpd', 'snmpm_network_interface', 'snmpm_user',
            'sofs', 'ssh', 'ssh_channel', 'ssh_connection', 'ssh_sftp',
            'ssh_sftpd', 'ssl', 'ssl_app', 'ssl_pkix', 'start', 'start_erl',
            'start_webtool', 'stdlib_app', 'string', 'supervisor',
            'supervisor_bridge', 'sys', 'systools', 'tags', 'test_server',
            'test_server_app', 'test_server_ctrl', 'tftp', 'timer', 'toolbar',
            'ttb', 'tv', 'unicode', 'unix_telnet', 'user', 'webtool', 'werl',
            'win32reg', 'wrap_log_reader', 'wx', 'wx_misc', 'wx_object',
            'wxAcceleratorEntry', 'wxAcceleratorTable', 'wxArtProvider',
            'wxAuiDockArt', 'wxAuiManager', 'wxAuiNotebook', 'wxAuiPaneInfo',
            'wxAuiTabArt', 'wxBitmap', 'wxBitmapButton', 'wxBitmapDataObject',
            'wxBoxSizer', 'wxBrush', 'wxBufferedDC', 'wxBufferedPaintDC',
            'wxButton', 'wxCalendarCtrl', 'wxCalendarDateAttr',
            'wxCalendarEvent', 'wxCaret', 'wxCheckBox', 'wxCheckListBox',
            'wxChildFocusEvent', 'wxChoice', 'wxClientDC', 'wxClipboard',
            'wxCloseEvent', 'wxColourData', 'wxColourDialog',
            'wxColourPickerCtrl', 'wxColourPickerEvent', 'wxComboBox',
            'wxCommandEvent', 'wxContextMenuEvent', 'wxControl',
            'wxControlWithItems', 'wxCursor', 'wxDataObject', 'wxDateEvent',
            'wxDatePickerCtrl', 'wxDC', 'wxDialog', 'wxDirDialog',
            'wxDirPickerCtrl', 'wxDisplayChangedEvent', 'wxEraseEvent',
            'wxEvent', 'wxEvtHandler', 'wxFileDataObject', 'wxFileDialog',
            'wxFileDirPickerEvent', 'wxFilePickerCtrl', 'wxFindReplaceData',
            'wxFindReplaceDialog', 'wxFlexGridSizer', 'wxFocusEvent', 'wxFont',
            'wxFontData', 'wxFontDialog', 'wxFontPickerCtrl',
            'wxFontPickerEvent', 'wxFrame', 'wxGauge', 'wxGBSizerItem',
            'wxGenericDirCtrl', 'wxGLCanvas', 'wxGraphicsBrush',
            'wxGraphicsContext', 'wxGraphicsFont', 'wxGraphicsMatrix',
            'wxGraphicsObject', 'wxGraphicsPath', 'wxGraphicsPen',
            'wxGraphicsRenderer', 'wxGrid', 'wxGridBagSizer', 'wxGridCellAttr',
            'wxGridCellEditor', 'wxGridCellRenderer', 'wxGridEvent',
            'wxGridSizer', 'wxHelpEvent', 'wxHtmlEasyPrinting', 'wxIcon',
            'wxIconBundle', 'wxIconizeEvent', 'wxIdleEvent', 'wxImage',
            'wxImageList', 'wxJoystickEvent', 'wxKeyEvent', 'wxLayoutAlgorithm',
            'wxListBox', 'wxListCtrl', 'wxListEvent', 'wxListItem',
            'wxListView', 'wxMask', 'wxMaximizeEvent', 'wxMDIChildFrame',
            'wxMDIClientWindow', 'wxMDIParentFrame', 'wxMemoryDC', 'wxMenu',
            'wxMenuBar', 'wxMenuEvent', 'wxMenuItem', 'wxMessageDialog',
            'wxMiniFrame', 'wxMirrorDC', 'wxMouseCaptureChangedEvent',
            'wxMouseEvent', 'wxMoveEvent', 'wxMultiChoiceDialog',
            'wxNavigationKeyEvent', 'wxNcPaintEvent', 'wxNotebook',
            'wxNotebookEvent', 'wxNotifyEvent', 'wxPageSetupDialog',
            'wxPageSetupDialogData', 'wxPaintDC', 'wxPaintEvent', 'wxPalette',
            'wxPaletteChangedEvent', 'wxPanel', 'wxPasswordEntryDialog',
            'wxPen', 'wxPickerBase', 'wxPostScriptDC', 'wxPreviewCanvas',
            'wxPreviewControlBar', 'wxPreviewFrame', 'wxPrintData',
            'wxPrintDialog', 'wxPrintDialogData', 'wxPrinter', 'wxPrintout',
            'wxPrintPreview', 'wxProgressDialog', 'wxQueryNewPaletteEvent',
            'wxRadioBox', 'wxRadioButton', 'wxRegion', 'wxSashEvent',
            'wxSashLayoutWindow', 'wxSashWindow', 'wxScreenDC', 'wxScrollBar',
            'wxScrolledWindow', 'wxScrollEvent', 'wxScrollWinEvent',
            'wxSetCursorEvent', 'wxShowEvent', 'wxSingleChoiceDialog',
            'wxSizeEvent', 'wxSizer', 'wxSizerFlags', 'wxSizerItem', 'wxSlider',
            'wxSpinButton', 'wxSpinCtrl', 'wxSpinEvent', 'wxSplashScreen',
            'wxSplitterEvent', 'wxSplitterWindow', 'wxStaticBitmap',
            'wxStaticBox', 'wxStaticBoxSizer', 'wxStaticLine', 'wxStaticText',
            'wxStatusBar', 'wxStdDialogButtonSizer', 'wxStyledTextCtrl',
            'wxStyledTextEvent', 'wxSysColourChangedEvent', 'wxTextAttr',
            'wxTextCtrl', 'wxTextDataObject', 'wxTextEntryDialog',
            'wxToggleButton', 'wxToolBar', 'wxToolTip', 'wxTopLevelWindow',
            'wxTreeCtrl', 'wxTreeEvent', 'wxUpdateUIEvent', 'wxWindow',
            'wxWindowCreateEvent', 'wxWindowDC', 'wxWindowDestroyEvent',
            'wxXmlResource', 'xmerl', 'xmerl_eventp', 'xmerl_scan',
            'xmerl_xpath', 'xmerl_xs', 'xmerl_xsd', 'xref', 'yecc', 'zip',
            'zlib', 'zlib_stub'
            ),
        // Binary modifiers
        6 => array(
            'big', 'binary', 'flaot', 'integer', 'little', 'signed', 'unit', 'unsigned'
            )
        ),
    'SYMBOLS' => array(
        '=', '!', '|', '->', ';', ',', ':', '.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000066;',
            3 => 'color: #b1b100;',
            4 => 'color: #fa6fff;',
            5 => 'color: #ff4e18;',
            6 => 'color: #9d4f37;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            0 => 'color: #6941fd;',
            1 => 'color: #d400ed;',
            2 => 'color: #5400b3;',
            4 => 'color: #ff3c00;',
            5 => 'color: #009999;',
            6 => 'color: #ff4e18;',
            7 => 'color: #6941fd;',
            8 => 'color: #00b2de;',
            9 => 'color: #ff9600;',
            10 => 'color: #d400ed;',
            11 => 'color: #ff9600;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.erlang.org/doc/man/{FNAMEL}.html',
        4 => 'http://www.erlang.org/doc/man/{FNAMEL}.html',
        5 => 'http://www.erlang.org/doc/man/{FNAMEL}.html',
        6 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;',
        2 => ':'
        ),
    'REGEXPS' => array(
        // Macro definitions
        0 => array(
            GESHI_SEARCH => '(-define\()([a-zA-Z0-9_]+)(\(|,)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Record definitions
        1 => array(
            GESHI_SEARCH => '(-record\()([a-zA-Z0-9_]+)(,)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Precompiler directives
        2 => array(
            GESHI_SEARCH => '(-)([a-z]+)(\()',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Functions
        4 => array(
            GESHI_SEARCH => '([a-z][a-zA-Z0-9_]*|\'[a-zA-Z0-9_]*\')(\()',
            GESHI_REPLACE => '\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\2'
            ),
        // File Descriptor
        5 => '&lt;[a-zA-Z_][a-zA-Z0-9_]*&gt;',
        // Modules - With hack to avoid overwriting http: in links...
        6 => array(
            GESHI_SEARCH => '([a-z][a-zA-Z0-9_]*)(?<![^a-zA-Z0-9_]http)(:)',
            GESHI_REPLACE => '\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\2'
            ),
        // Macros
        7 => array(
            GESHI_SEARCH => '(\?)([a-zA-Z0-9_]+)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => ''
            ),
        // Variables - With hack to avoid interfering wish GeSHi internals
        8 => array(
            GESHI_SEARCH => '([\(\[\{,<+*-\/=\s]|&lt;)(?!(?:PIPE|SEMI|DOT)[^a-zA-Z0-9_])([A-Z_][a-zA-Z0-9_]*)\b',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => ''
            ),
        // ASCII codes
        9 => '(\$[a-zA-Z0-9_])',
        // Records
        10 => array(
            GESHI_SEARCH => '(#)([a-z][a-zA-Z0-9_]*)(\.|\{)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Numbers with a different radix
        11 => '([0-9]{1,2}#[a-zA-Z0-9]*)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            4 => array(),
            5 => array(
                'DISALLOWED_AFTER' => '(?=:)'
                ),
            6 => array(
                'DISALLOWED_BEFORE' => "(?<=\/|-)"
                )
            )
        )
);

?>