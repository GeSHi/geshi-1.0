<?php
/*************************************************************************************
 * scilab.php
 * --------
 * Author: Christophe David (geshi@christophedavid.org)
 * Copyright: (c) 2008 Christophe David (geshi@christophedavid.org)
 * Release Version: 1.0.9.1
 * Date Started: 2008/08/04
 *
 * SciLab language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2023/05/10 (1.0.9.1)
 *   - Updated link to documentation
 *   - Updated keywords
 *   - Added more symbols
 *   - Added highlight support for all type of numbers
 *   - Fixed highlight issue with backlash inside double quotes
 * 2008/08/25 (1.0.8.1)
 *   - Corrected with the help of Benny Baumann (BenBE@geshi.org)
 * 2008/08/04 (0.0.0.1)
 *   - First beta Release - known problem with ' used to transpose matrices considered as start of strings
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
    'LANG_NAME' => 'SciLab',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        2 => "/(?<=\)|\]|\w)'/"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\\\',
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array(),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'abort', 'break', 'case', 'catch', 'continue', 'do', 'else', 'elseif', 'end', 'for', 'halt', 'if', 'pause',
            'resume', 'return', 'select', 'then', 'while'
            ),
        2 => array(
            '%F', '%T', '%chars', '%e', '%eps', '%f', '%i', '%inf', '%nan', '%pi', '%s', '%t', '%z', 'SCI', 'SCIHOME',
            'TMPDIR', 'WSCI', 'home'
            ),
        3 => array(
            '%MODELICA_USER_LIBS', '%io', '%k', '%onprompt', 'Contents', 'Cste', 'Equal', 'Funcall', 'Infer', 'Layout',
            'LineSpec', 'Matplot', 'Matplot1', 'NDcost', 'Operation', 'PlotSparse', 'ReadHBSparse', 'Sfgrayplot',
            'Sgrayplot', 'Type', 'Variable', 'abcd', 'abinv', 'about', 'abs', 'accept_func_default', 'accept_func_vfsa',
            'acos', 'acosd', 'acosh', 'acoshm', 'acosm', 'acot', 'acotd', 'acoth', 'acsc', 'acscd', 'acsch', 'add_param',
            'addcolor', 'addhistory', 'addmenu', 'adj2sp', 'aff2ab', 'airy', 'amell', 'analpf', 'analyze', 'and',
            'ans', 'aplat', 'arhnk', 'arl2', 'arma', 'arma2p', 'arma2ss', 'armac', 'armax', 'armax1', 'arsimul',
            'ascii', 'asciimat', 'asec', 'asecd', 'asech', 'asin', 'asind', 'asinh', 'asinhm', 'asinm', 'assignation',
            'atan', 'atand', 'atanh', 'atanhm', 'atanm', 'augment', 'auread', 'autumncolormap', 'auwrite', 'balanc',
            'balreal', 'banner', 'bar', 'bar3d', 'barh', 'barhomogenize', 'base2dec', 'basename', 'bdiag', 'beep',
            'besselh', 'beta', 'bezout', 'bilin', 'bilt', 'bin2dec', 'binomial', 'bitand', 'bitcmp', 'bitget', 'bitor',
            'bitset', 'bitstring', 'bitxor', 'black', 'blanks', 'bloc2ss', 'block_parameter_error', 'blockdiag',
            'bode', 'bode_asymp', 'bonecolormap', 'bool2s', 'browsehistory', 'bsplin3val', 'bstap', 'buildouttb',
            'buttmag', 'bvodeS', 'cainv', 'calendar', 'calerf', 'calfrq', 'canon', 'captions', 'casc', 'cat', 'ccontrg',
            'cd', 'cdfbet', 'cdfbin', 'cdfchi', 'cdfchn', 'cdff', 'cdffnc', 'cdfgam', 'cdfnbn', 'cdfnor', 'cdfpoi',
            'cdft', 'ceil', 'cell', 'cell2mat', 'cellstr', 'center', 'cepstrum', 'champ', 'char', 'cheb1mag', 'cheb2mag',
            'checkNamedArguments', 'chepol', 'chfact', 'chol', 'chsolve', 'circshift', 'classmarkov', 'clc', 'clean',
            'clear', 'clearglobal', 'clf', 'clipboard', 'clock', 'close', 'cls2dls', 'cmndred', 'cmoment', 'coding_ga_binary',
            'coding_ga_identity', 'coeff', 'coff', 'coffg', 'colcomp', 'colcompr', 'colinout', 'color', 'colorbar',
            'colordef', 'colormap', 'colregul', 'comet', 'comet3d', 'companion', 'completion', 'complex', 'compute_initial_temp',
            'cond', 'cond2sp', 'condestsp', 'conj', 'conjgrad', 'console', 'cont_frm', 'cont_mat', 'contour', 'contour2d',
            'contour2di', 'contour2dm', 'contourf', 'contr', 'contrss', 'conv', 'conv2', 'convol', 'convol2d', 'convstr',
            'coolcolormap', 'copfac', 'coppercolormap', 'copy', 'copyfile', 'corr', 'correl', 'cos', 'cosd', 'cosh',
            'coshm', 'cosm', 'cotd', 'cotg', 'coth', 'cothm', 'cov', 'covar', 'createBorder', 'createBorderFont',
            'createConstraints', 'createLayoutOptions', 'createWindow', 'createdir', 'cross', 'crossover_ga_binary',
            'crossover_ga_default', 'csc', 'cscd', 'csch', 'csgn', 'cshep2d', 'csim', 'cspect', 'csvDefault', 'csvRead',
            'csvTextScan', 'csvWrite', 'ctr_gram', 'cumprod', 'cumsum', 'cutaxes', 'czt', 'dae', 'daeoptions', 'damp',
            'daskr', 'dasrt', 'dassl', 'datafit', 'datatipCreate', 'datatipGetEntities', 'datatipManagerMode', 'datatipMove',
            'datatipRemove', 'datatipRemoveAll', 'datatipSetDisplay', 'datatipSetInterp', 'datatipSetOrientation',
            'datatipSetStyle', 'date', 'datenum', 'datevec', 'dawson', 'dbphi', 'dcf', 'ddp', 'debug', 'dec2base',
            'dec2bin', 'dec2hex', 'dec2oct', 'definedfields', 'degree', 'delete', 'deletefile', 'delip', 'delmenu',
            'derivat', 'des2ss', 'des2tf', 'det', 'determ', 'detr', 'detrend', 'dhinf', 'dhnorm', 'diag', 'diary',
            'diff', 'diophant', 'dir', 'disp', 'dispfiles', 'displayhistory', 'dlgamma', 'double', 'dragrect', 'drawaxis',
            'drawlater', 'drawnow', 'driver', 'dscr', 'dsearch', 'dsimul', 'dt_ility', 'dtsi', 'edit_curv', 'eigenmarkov',
            'eigs', 'ell1mag', 'ellipj', 'emptystr', 'eomday', 'eqfir', 'eqiir', 'equil', 'equil1', 'ereduc', 'erf',
            'erfc', 'erfcx', 'erfi', 'erfinv', 'errbar', 'errclear', 'error', 'error_table', 'etime', 'eval3dp',
            'eval_cshep2d', 'evans', 'evstr', 'exists', 'exp', 'expm', 'exportUI', 'extraction', 'eye', 'factor',
            'factorial', 'factors', 'faurre', 'fchamp', 'fec', 'feedback', 'ffilt', 'fft2', 'fftshift', 'fftw_flags',
            'fftw_forget_wisdom', 'fgrayplot', 'fieldnames', 'figure', 'file', 'fileext', 'fileinfo', 'fileparts',
            'filesep', 'filt_sinc', 'filter', 'find', 'findABCD', 'findAC', 'findBD', 'findBDK', 'findR', 'find_freq',
            'findfiles', 'findm', 'findobj', 'findx0BD', 'fix', 'flipdim', 'floor', 'flts', 'fminsearch', 'format',
            'fourplan', 'fplot3d', 'fplot3d1', 'fprintfMat', 'frep2tf', 'freq', 'freson', 'frfit', 'frmag', 'fscanfMat',
            'fsfirlin', 'fsolve', 'fspec', 'fspecg', 'fstabst', 'fstair', 'ftest', 'ftuneq', 'full', 'fullfile',
            'fullpath', 'fullrf', 'fullrfk', 'g_margin', 'gainplot', 'gamitg', 'gamma', 'gammaln', 'gca', 'gcare',
            'gcbo', 'gcd', 'gce', 'gcf', 'gda', 'gdf', 'ged', 'genfac3d', 'genmarkov', 'geom3d', 'geomean', 'get',
            'getModelicaPath', 'getURL', 'get_absolute_file_path', 'get_contents_infer', 'get_fftw_wisdom', 'get_param',
            'getcallbackobject', 'getcolor', 'getdate', 'getdebuginfo', 'getdrives', 'getenv', 'getfield', 'gethistory',
            'gethistoryfile', 'getinstalledlookandfeels', 'getio', 'getlongpathname', 'getlookandfeel', 'getmd5',
            'getmemory', 'getmodules', 'getos', 'getpid', 'getrelativefilename', 'getscilabmode', 'getshell', 'getshortpathname',
            'getvalue', 'getversion', 'gfare', 'gfrancis', 'givens', 'glever', 'global', 'glue', 'gmres', 'graduate',
            'grand', 'graycolormap', 'grayplot', 'graypolarplot', 'grep', 'group', 'gsort', 'gtild', 'h2norm', 'h5attr',
            'h5close', 'h5cp', 'h5dataset', 'h5dump', 'h5exists', 'h5flush', 'h5get', 'h5group', 'h5isArray', 'h5isAttr',
            'h5isCompound', 'h5isFile', 'h5isGroup', 'h5isRef', 'h5isSet', 'h5isSpace', 'h5isType', 'h5isVlen',
            'h5label', 'h5ln', 'h5ls', 'h5mount', 'h5mv', 'h5open', 'h5read', 'h5readattr', 'h5rm', 'h5umount',
            'h5write', 'h5writeattr', 'h_cl', 'h_inf', 'h_inf_st', 'h_norm', 'hallchart', 'hank', 'hankelsv', 'harmean',
            'hash', 'hermit', 'hess', 'hex2dec', 'hilb', 'hilbert', 'hinf', 'histc', 'historymanager', 'historysize',
            'histplot', 'horner', 'hotcolormap', 'householder', 'hrmt', 'hsv2rgb', 'hsvcolormap', 'htmlDump', 'htmlRead',
            'htmlReadStr', 'htmlWrite', 'htrianr', 'iconvert', 'idct', 'idst', 'ieee', 'ifft', 'ifftshift', 'iir',
            'iirgroup', 'iirlp', 'im_inv', 'imag', 'impl', 'importXcosDiagram', 'imrep2ss', 'imult', 'ind2sub',
            'inistate', 'init_ga_default', 'init_param', 'input', 'int', 'int2d', 'int3d', 'intc', 'intdec', 'integrate',
            'interp', 'interp1', 'interp2d', 'interp3d', 'interpln', 'intersect', 'intg', 'intl', 'intsplin', 'inttrap',
            'inttype', 'inv', 'inv_coeff', 'invr', 'invsyslin', 'iqr', 'is_absolute_path', 'is_handle_valid', 'is_param',
            'isalphanum', 'isascii', 'iscell', 'iscellstr', 'iscolumn', 'isdef', 'isdigit', 'isdir', 'isempty',
            'isequal', 'isfield', 'isfile', 'isglobal', 'isinf', 'isletter', 'ismatrix', 'isnan', 'isnum', 'isoview',
            'isreal', 'isrow', 'isscalar', 'issparse', 'issquare', 'isstruct', 'isvector', 'jetcolormap', 'justify',
            'kalm', 'karmarkar', 'kernel', 'kpure', 'krac2', 'kroneck', 'lasterror', 'lattn', 'lattp', 'lcf', 'lcm',
            'lcmdiag', 'ldiv', 'leastsq', 'legend', 'legendre', 'legends', 'length', 'leqr', 'lev', 'levin', 'lft',
            'light', 'lighting', 'lin', 'lin2mu', 'lincos', 'lindquist', 'linear_interpn', 'lines', 'linf', 'linfn',
            'linmeq', 'linsolve', 'linspace', 'list', 'list2vec', 'list_param', 'listfiles', 'listvarinfile', 'lmisolver',
            'lmitool', 'load', 'loadGui', 'loadScicos', 'loadXcosLibs', 'loadhistory', 'loadmatfile', 'loadwave',
            'locate', 'log', 'log10', 'log1p', 'log2', 'loglog', 'logm', 'logspace', 'lqe', 'lqg', 'lqg2stan', 'lqg_ltr',
            'lqi', 'lqr', 'ls', 'lsq', 'lsq_splin', 'lsqrsolve', 'lsslist', 'lstcat', 'ltitr', 'lu', 'ludel', 'lufact',
            'luget', 'lusolve', 'lyap', 'macglov', 'mad', 'makecell', 'mapsound', 'markp2ss', 'matfile2sci', 'matfile_close',
            'matfile_listvar', 'matfile_open', 'matfile_varreadnext', 'matfile_varwrite', 'matrix', 'max', 'mclearerr',
            'mclose', 'mdelete', 'mean', 'meanf', 'median', 'members', 'meof', 'merror', 'mese', 'mesh', 'mesh2d',
            'meshgrid', 'messagebox', 'mfprintf', 'mfprintf', 'mgeti', 'mgetl', 'mgetstr', 'min', 'minreal', 'minss',
            'mkdir', 'mlist', 'mode', 'moment', 'mopen', 'move', 'movefile', 'mprintf', 'mput', 'mputl', 'mputstr',
            'mrfit', 'mseek', 'msprintf', 'msscanf', 'mtell', 'mu2lin', 'mucomp', 'mutation_ga_binary', 'mutation_ga_default',
            'name2rgb', 'names', 'nancumsum', 'nand2mean', 'nanmean', 'nanmeanf', 'nanmedian', 'nanreglin', 'nanstdev',
            'nansum', 'narsimul', 'nchoosek', 'ndgrid', 'ndims', 'nearfloat', 'nehari', 'neigh_func_csa', 'neigh_func_default',
            'neigh_func_fsa', 'neigh_func_vfsa', 'neldermead', 'newaxes', 'newest', 'nextpow2', 'nf3d', 'nicholschart',
            'nlev', 'nmplot', 'nnz', 'norm', 'now', 'nthroot', 'null', 'num2cell', 'number_properties', 'numderivative',
            'nyquist', 'nyquistfrequencybounds', 'obs_gram', 'obscont', 'observer', 'obsv_mat', 'obsvss', 'oceancolormap',
            'oct2dec', 'ode', 'ode_discrete', 'ode_optional_output', 'ode_root', 'odedc', 'odeoptions', 'oldEmptyBehaviour',
            'ones', 'optim', 'optim_ga', 'optim_moga', 'optim_nsga', 'optim_nsga2', 'optim_sa', 'optimbase_cget',
            'optimbase_checkbounds', 'optimbase_checkcostfun', 'optimbase_checkx0', 'optimbase_configure', 'optimbase_destroy',
            'optimbase_function', 'optimbase_get', 'optimbase_hasbounds', 'optimbase_hasconstraints', 'optimbase_hasnlcons',
            'optimbase_histget', 'optimbase_histset', 'optimbase_incriter', 'optimbase_isfeasible', 'optimbase_isinbounds',
            'optimbase_isinnonlincons', 'optimbase_log', 'optimbase_new', 'optimbase_outputcmd', 'optimbase_outstruct',
            'optimbase_proj2bnds', 'optimbase_set', 'optimbase_stoplog', 'optimbase_terminate', 'optimget', 'optimplotfunccount',
            'optimplotfval', 'optimplotx', 'optimset', 'optimsimplex_center', 'optimsimplex_check', 'optimsimplex_compsomefv',
            'optimsimplex_computefv', 'optimsimplex_deltafv', 'optimsimplex_deltafvmax', 'optimsimplex_destroy',
            'optimsimplex_dirmat', 'optimsimplex_fvmean', 'optimsimplex_fvstdev', 'optimsimplex_fvvariance', 'optimsimplex_getall',
            'optimsimplex_getallfv', 'optimsimplex_getallx', 'optimsimplex_getfv', 'optimsimplex_getn', 'optimsimplex_getnbve',
            'optimsimplex_getve', 'optimsimplex_getx', 'optimsimplex_gradientfv', 'optimsimplex_new', 'optimsimplex_reflect',
            'optimsimplex_setall', 'optimsimplex_setallfv', 'optimsimplex_setallx', 'optimsimplex_setfv', 'optimsimplex_setn',
            'optimsimplex_setnbve', 'optimsimplex_setve', 'optimsimplex_setx', 'optimsimplex_shrink', 'optimsimplex_size',
            'optimsimplex_sort', 'optimsimplex_xbar', 'or', 'ordmmd', 'orth', 'orthProj', 'output_ga_default', 'overview',
            'overview', 'overview', 'p_margin', 'pack', 'param3d1', 'paramfplot2d', 'pareto_filter', 'parrot', 'part',
            'parulacolormap', 'pathconvert', 'pathsep', 'pbig', 'pca', 'pdiv', 'pen2ea', 'pencan', 'penlaur', 'perctl',
            'perms', 'permute', 'pertrans', 'pfss', 'phasemag', 'phaseplot', 'phc', 'pie', 'pinkcolormap', 'pinv',
            'playsnd', 'plot', 'plot2d', 'plot2d2', 'plot2d3', 'plot2d4', 'plot3d', 'plot3d1', 'plot3d2', 'plot3d3',
            'plotframe', 'plotimplicit', 'plzr', 'pmodulo', 'pol2des', 'pol2str', 'polar', 'polarplot', 'polfact',
            'poly', 'polyDisplay', 'polyint', 'power', 'ppol', 'prbs_a', 'predef', 'prettyprint', 'primes', 'princomp',
            'print', 'printf', 'printfigure', 'printsetupbox', 'prod', 'progressionbar', 'proj', 'projsl', 'projspec',
            'prompt', 'psmall', 'pspect', 'pwd', 'qld', 'qmr', 'qp_solve', 'qpsolve', 'qr', 'quart', 'quaskro',
            'rainbowcolormap', 'rand', 'randpencil', 'range', 'rank', 'rankqr', 'rat', 'rcond', 'read', 'read4b',
            'read_csv', 'readb', 'readmps', 'readxls', 'real', 'realtime', 'recons', 'recursionlimit', 'regexp',
            'reglin', 'remez', 'remezb', 'remove_param', 'removedir', 'removelinehistory', 'repfreq', 'replot',
            'repmat', 'res_with_prec', 'resethistory', 'residu', 'resize_matrix', 'rgb2name', 'ricc', 'riccati',
            'rlist', 'rmdir', 'roots', 'rotate', 'rotate_axes', 'round', 'routh_t', 'rowcomp', 'rowcompr', 'rowinout',
            'rowregul', 'rowshuff', 'rpem', 'rref', 'rtitr', 'rubberbox', 'sample', 'samplef', 'samwr', 'save',
            'saveGui', 'saveconsecutivecommands', 'savehistory', 'savematfile', 'savewave', 'sca', 'scaling', 'scanf',
            'scanf_conversion', 'scatter', 'scatter3d', 'scf', 'schur', 'sci2exp', 'sciargs', 'scicosDiagramToScilab',
            'scicos_debug', 'scicos_getvalue', 'scicos_log', 'scicos_simulate', 'scicosim', 'sda', 'sdf', 'sec',
            'secd', 'sech', 'secto3d', 'selection_ga_elitist', 'selection_ga_random', 'semidef', 'semilogx', 'semilogy',
            'sensi', 'set', 'set_fftw_wisdom', 'set_param', 'setdiff', 'setenv', 'seteventhandler', 'setfield',
            'sethistoryfile', 'setlookandfeel', 'setmenu', 'sfact', 'sgolay', 'sgolaydiff', 'sgolayfilt', 'sgrid',
            'show_margins', 'show_pca', 'show_window', 'sident', 'sign', 'signm', 'simp', 'simp_mode', 'sin', 'sinc',
            'sincd', 'sind', 'sinh', 'sinhm', 'sinm', 'size', 'sleep', 'sm2des', 'sm2ss', 'smooth', 'sorder', 'sound',
            'sp2adj', 'spaninter', 'spanplus', 'spantwo', 'sparse', 'spchol', 'spcompack', 'spec', 'specfact', 'speye',
            'spget', 'splin', 'splin2d', 'splin3d', 'splitURL', 'spones', 'sprand', 'springcolormap', 'sprintf',
            'spzeros', 'sqroot', 'sqrt', 'sqrtm', 'squarewave', 'squeeze', 'srfaur', 'srkf', 'ss2des', 'ss2ss',
            'ss2tf', 'ss2zp', 'sskf', 'ssprint', 'ssrand', 'st_ility', 'stabil', 'standard_define', 'standard_inputs',
            'standard_origin', 'standard_outputs', 'stdev', 'stdevf', 'steadycos', 'strange', 'strcat', 'strchr',
            'strcmp', 'strcspn', 'strindex', 'string', 'stringbox', 'stripblanks', 'strncpy', 'strrchr', 'strrev',
            'strsplit', 'strspn', 'strstr', 'strsubst', 'strtod', 'strtok', 'struct', 'sub2ind', 'subplot', 'sum',
            'summercolormap', 'surf', 'sva', 'svd', 'svplot', 'swap_handles', 'sylm', 'sylv', 'syredi', 'sysconv',
            'sysfact', 'syslin', 'syssize', 'system', 'systmat', 'tabul', 'tan', 'tand', 'tanh', 'tanhm', 'tanm',
            'taucs_chdel', 'taucs_chfact', 'taucs_chget', 'taucs_chinfo', 'taucs_chsolve', 'temp_law_csa', 'temp_law_default',
            'temp_law_fsa', 'temp_law_huang', 'temp_law_vfsa', 'tempname', 'testmatrix', 'tf2des', 'tf2ss', 'tf2zp',
            'thrownan', 'tic', 'time_id', 'timer', 'title', 'titlepage', 'tlist', 'toc', 'toeplitz', 'tohome', 'tokenpos',
            'tokens', 'toolbar', 'toprint', 'trace', 'trans', 'tree_show', 'trfmod', 'tril', 'trimmean', 'triu',
            'trzeros', 'twinkle', 'type', 'typename', 'typeof', 'uiConcatTree', 'uiCreateNode', 'uiCreateTree',
            'uiDeleteNode', 'uiDisplayTree', 'uiDumpTree', 'uiEqualsTree', 'uiFindNode', 'uiGetChildrenNode', 'uiGetNodePosition',
            'uiGetParentNode', 'uiInsertNode', 'ui_observer', 'uicontextmenu', 'uicontrol', 'uigetcolor', 'uigetdir',
            'uigetfile', 'uigetfont', 'uimenu', 'uint64', 'uiputfile', 'umf_ludel', 'umf_lufact', 'umf_luget', 'umf_luinfo',
            'umf_lusolve', 'umfpack', 'unglue', 'union', 'unique', 'unix', 'unix_g', 'unix_s', 'unix_w', 'unix_x',
            'unobs', 'unpack', 'unsetmenu', 'unwrap', 'unzoom', 'usecanvas', 'var2vec', 'variance', 'variancef',
            'varn', 'vec2list', 'vec2var', 'vectorfind', 'ver', 'waitbar', 'warning', 'wavread', 'wavwrite', 'wcenter',
            'weekday', 'wfir', 'wfir_gui', 'where', 'whereami', 'whitecolormap', 'who', 'who_user', 'whos', 'wiener',
            'wigner', 'window', 'winsid', 'wintercolormap', 'with_javasci', 'with_macros_source', 'with_module',
            'writb', 'write', 'write4b', 'write_csv', 'x_choices', 'x_choose', 'x_choose_modeless', 'x_dialog',
            'x_matrix', 'x_mdialog', 'xarc', 'xarcs', 'xarrows', 'xchange', 'xclick', 'xcorr', 'xcosAddToolsMenu',
            'xcosDiagramToScilab', 'xcosPal', 'xcosPalAdd', 'xcosPalAddBlock', 'xcosPalDelete', 'xcosPalExport',
            'xcosPalGenerateAllIcons', 'xcosPalMove', 'xcosUpdateBlock', 'xcosValidateBlockSet', 'xcosValidateCompareBlock',
            'xcos_simulate', 'xcov', 'xend', 'xfarc', 'xfarcs', 'xfpoly', 'xfpolys', 'xfrect', 'xget', 'xgetmouse',
            'xgraduate', 'xgrid', 'xinit', 'xlfont', 'xload', 'xls_open', 'xls_read', 'xmlAddNs', 'xmlAppend', 'xmlAsNumber',
            'xmlAsText', 'xmlDTD', 'xmlDelete', 'xmlDocument', 'xmlDump', 'xmlElement', 'xmlFormat', 'xmlGetNsByHref',
            'xmlGetNsByPrefix', 'xmlGetOpenDocs', 'xmlGetValues', 'xmlIsValidObject', 'xmlName', 'xmlNs', 'xmlRead',
            'xmlReadStr', 'xmlRelaxNG', 'xmlRemove', 'xmlSchema', 'xmlSetAttributes', 'xmlSetValues', 'xmlValidate',
            'xmlWrite', 'xmlXPath', 'xnumb', 'xpoly', 'xpolys', 'xrect', 'xrects', 'xrpoly', 'xs2bmp', 'xs2emf',
            'xs2eps', 'xs2gif', 'xs2jpg', 'xs2pdf', 'xs2png', 'xs2ppm', 'xs2ps', 'xs2svg', 'xsave', 'xsegs', 'xset',
            'xsetech', 'xstring', 'xstringb', 'xstringl', 'xtitle', 'yulewalk', 'zeropen', 'zeros', 'zgrid', 'zlabel',
            'zoom_rect', 'zp2ss', 'zp2tf', 'zpbutt', 'zpch1', 'zpch2', 'zpell', 'zpk', 'zpk2ss', 'zpk2tf'
            )
        ),
    'SYMBOLS' => array(
        '<', '>', '=',
        '!', '@', '~', '&', '|',
        '+','-', '*', '/', '\\','%', '^',
        ',', ';', '?', ':',
        '.*.', '.\.', './.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #339933;',
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
            0 => 'color: #0000ff;',
            1 => 'color: #009999;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm',
        2 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm',
        3 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Variable
        0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*',
        //File Descriptor
        1 => '&lt;[a-zA-Z_][a-zA-Z0-9_]*&gt;',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
