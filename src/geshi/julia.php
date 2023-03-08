<?php
/*************************************************************************************
 * julia.php
 * -----------
 * Author: John Lynch (john.lynch@iname.com)
 * Contributors:
 *   - Magnus Lie Hetland
 *   - Curtis Vogt
 * Copyright: (c) 2013 John Lynch
 * Release Version: 1.0.9.1
 * Date Started: 2013/11/06
 *
 * Julia language file for GeSHi.
 *
 * CHANGES
 * -------
 *
 * 2015/11/04
 *   -  First Release submitted
 *
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

$language_data = array(
    'LANG_NAME' => 'Julia',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    //Longest quotemarks ALWAYS first
    'QUOTEMARKS' => array('"""', '"', "'"),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(

        /*
        ** reserved words
        */
        1 => array(
            'function', 'global', 'for', 'end', 'while', 'if', 'else', 'elseif', 'break',
            'switch', 'case', 'otherwise', 'try', 'catch', 'const', 'immutable',
            'import', 'importall', 'export', 'type', 'typealias', 'return', 'true',
            'false', 'macro', 'quote', 'in', 'abstract', 'module', 'using', 'continue',
            'ifelse', 'do', 'eval', 'let', 'finally', 'throw'
        ),

        /*
        ** builtins
        */
        2 => array(
            'AbstractArray', 'AbstractChar', 'AbstractFloat', 'AbstractString', 'Any',
            'ArgumentError', 'Array', 'AssertionError', 'Bool', 'BoundsError', 'Char',
            'ConcurrencyViolationError', 'Core', 'Cvoid', 'DataType', 'DenseArray',
            'DivideError', 'DomainError', 'ErrorException', 'Exception', 'Expr',
            'Float16', 'Float32', 'Float64', 'Function', 'GlobalRef', 'IO',
            'InexactError', 'InitError', 'Int', 'Int128', 'Int16', 'Int32', 'Int64',
            'Int8', 'Integer', 'InterruptException', 'LineNumberNode', 'LoadError',
            'Main', 'Method', 'MethodError', 'Module', 'NTuple', 'NamedTuple',
            'Nothing', 'Number', 'OutOfMemoryError', 'OverflowError', 'Pair', 'Ptr',
            'QuoteNode', 'ReadOnlyMemoryError', 'Real', 'Ref', 'SegmentationFault',
            'Signed', 'StackOverflowError', 'String', 'Symbol', 'Task', 'Tuple', 'Type',
            'TypeError', 'TypeVar', 'UInt', 'UInt128', 'UInt16', 'UInt32', 'UInt64',
            'UInt8', 'UndefInitializer', 'UndefKeywordError', 'UndefRefError',
            'UndefVarError', 'Union', 'UnionAll', 'Unsigned', 'Vararg', 'VecElement',
            'WeakRef', 'applicable', 'eval', 'fieldtype', 'getfield', 'ifelse',
            'invoke', 'isa', 'isdefined', 'modifyfield!', 'nfields', 'nothing',
            'replacefield!', 'setfield!', 'swapfield!', 'throw', 'tuple', 'typeassert',
            'typeof', 'undef', 'ARGS', 'AbstractChannel', 'AbstractDict',
            'AbstractDisplay', 'AbstractIrrational', 'AbstractMatch', 'AbstractMatrix',
            'AbstractPattern', 'AbstractRange', 'AbstractSet', 'AbstractUnitRange',
            'AbstractVecOrMat', 'AbstractVector', 'Array', 'Base', 'BigFloat', 'BigInt',
            'BitArray', 'BitMatrix', 'BitSet', 'BitVector', 'Broadcast',
            'CapturedException', 'CartesianIndex', 'CartesianIndices', 'Cchar',
            'Cdouble', 'Cfloat', 'Channel', 'Cint', 'Cintmax_t', 'Clong', 'Clonglong',
            'Cmd', 'Colon', 'Complex', 'ComplexF16', 'ComplexF32', 'ComplexF64',
            'ComposedFunction', 'CompositeException', 'Condition', 'Cptrdiff_t',
            'Cshort', 'Csize_t', 'Cssize_t', 'Cstring', 'Cuchar', 'Cuint', 'Cuintmax_t',
            'Culong', 'Culonglong', 'Cushort', 'Cwchar_t', 'Cwstring', 'DEPOT_PATH',
            'DenseMatrix', 'DenseVecOrMat', 'DenseVector', 'Dict', 'DimensionMismatch',
            'Dims', 'Docs', 'ENDIAN_BOM', 'ENV', 'EOFError', 'Enum',
            'ExponentialBackOff', 'GC', 'HTML', 'IOBuffer', 'IOContext', 'IOStream',
            'IdDict', 'IndexCartesian', 'IndexLinear', 'IndexStyle', 'Inf', 'Inf16',
            'Inf32', 'Inf64', 'InsertionSort', 'InvalidStateException', 'Irrational',
            'Iterators', 'KeyError', 'LOAD_PATH', 'Libc', 'LinRange', 'LinearIndices',
            'MIME', 'MathConstants', 'Matrix', 'MergeSort', 'Meta', 'Missing',
            'MissingException', 'NTuple', 'NaN', 'NaN16', 'NaN32', 'NaN64',
            'OrdinalRange', 'PROGRAM_FILE', 'Pair', 'PartialQuickSort',
            'PermutedDimsArray', 'Pipe', 'PipeBuffer', 'ProcessFailedException',
            'QuickSort', 'Rational', 'RawFD', 'ReentrantLock', 'Regex', 'RegexMatch',
            'Returns', 'RoundDown', 'RoundFromZero', 'RoundNearest',
            'RoundNearestTiesAway', 'RoundNearestTiesUp', 'RoundToZero', 'RoundUp',
            'RoundingMode', 'Set', 'Some', 'StackTraces', 'StepRange', 'StepRangeLen',
            'StridedArray', 'StridedMatrix', 'StridedVecOrMat', 'StridedVector',
            'StringIndexError', 'SubArray', 'SubString', 'SubstitutionString', 'Sys',
            'SystemError', 'TaskFailedException', 'Text', 'TextDisplay', 'Threads',
            'Timer', 'UnitRange', 'VERSION', 'Val', 'VecOrMat', 'Vector',
            'VersionNumber', 'WeakKeyDict', 'abs', 'abs2', 'abspath', 'accumulate',
            'accumulate!', 'acos', 'acosd', 'acosh', 'acot', 'acotd', 'acoth', 'acsc',
            'acscd', 'acsch', 'addenv', 'adjoint', 'all', 'all!', 'allunique', 'angle',
            'any', 'any!', 'append!', 'argmax', 'argmin', 'ascii', 'asec', 'asecd',
            'asech', 'asin', 'asind', 'asinh', 'asyncmap', 'asyncmap!', 'atan', 'atand',
            'atanh', 'atexit', 'atreplinit', 'axes', 'backtrace', 'basename', 'big',
            'bind', 'binomial', 'bitreverse', 'bitrotate', 'bitstring', 'broadcast',
            'broadcast!', 'bswap', 'bytes2hex', 'bytesavailable', 'cat',
            'catch_backtrace', 'cbrt', 'cd', 'ceil', 'cglobal', 'checkbounds',
            'checkindex', 'chmod', 'chomp', 'chop', 'chown', 'circcopy!', 'circshift',
            'circshift!', 'cis', 'cispi', 'clamp', 'clamp!', 'cld', 'close', 'cmp',
            'coalesce', 'code_lowered', 'code_typed', 'codepoint', 'codeunit',
            'codeunits', 'collect', 'complex', 'conj', 'conj!', 'contains', 'convert',
            'copy', 'copy!', 'copysign', 'copyto!', 'cos', 'cosc', 'cosd', 'cosh',
            'cospi', 'cot', 'cotd', 'coth', 'count', 'count!', 'count_ones',
            'count_zeros', 'countlines', 'cp', 'csc', 'cscd', 'csch', 'ctime',
            'cumprod', 'cumprod!', 'cumsum', 'cumsum!', 'current_exceptions',
            'current_task', 'deepcopy', 'deg2rad', 'delete!', 'deleteat!',
            'denominator', 'detach', 'devnull', 'diff', 'digits', 'digits!', 'dirname',
            'disable_sigint', 'display', 'displayable', 'displaysize', 'div', 'divrem',
            'download', 'dropdims', 'dump', 'eachcol', 'eachindex', 'eachline',
            'eachmatch', 'eachrow', 'eachslice', 'eltype', 'empty', 'empty!',
            'endswith', 'enumerate', 'eof', 'eps', 'error', 'errormonitor', 'esc',
            'escape_string', 'evalfile', 'evalpoly', 'exit', 'exp', 'exp10', 'exp2',
            'expanduser', 'expm1', 'exponent', 'extrema', 'factorial', 'falses', 'fd',
            'fdio', 'fetch', 'fieldcount', 'fieldname', 'fieldnames', 'fieldoffset',
            'fieldtypes', 'filemode', 'filesize', 'fill', 'fill!', 'filter', 'filter!',
            'finalize', 'finalizer', 'findall', 'findfirst', 'findlast', 'findmax',
            'findmax!', 'findmin', 'findmin!', 'findnext', 'findprev', 'first',
            'firstindex', 'fld', 'fld1', 'fldmod', 'fldmod1', 'flipsign', 'float',
            'floatmax', 'floatmin', 'floor', 'flush', 'fma', 'foldl', 'foldr',
            'foreach', 'frexp', 'fullname', 'functionloc', 'gcd', 'gcdx', 'gensym',
            'get', 'get!', 'get_zero_subnormals', 'gethostname', 'getindex', 'getkey',
            'getpid', 'getproperty', 'gperm', 'hasfield', 'hash', 'haskey', 'hasmethod',
            'hasproperty', 'hcat', 'hex2bytes', 'hex2bytes!', 'homedir', 'htol', 'hton',
            'hvcat', 'hvncat', 'hypot', 'identity', 'ifelse', 'ignorestatus', 'im',
            'imag', 'in', 'include_dependency', 'include_string', 'indexin', 'insert!',
            'insorted', 'instances', 'intersect', 'intersect!', 'inv', 'invmod',
            'invperm', 'invpermute!', 'isabspath', 'isabstracttype', 'isapprox',
            'isascii', 'isassigned', 'isbits', 'isbitstype', 'isblockdev', 'ischardev',
            'iscntrl', 'isconcretetype', 'isconst', 'isdigit', 'isdir', 'isdirpath',
            'isdisjoint', 'isdispatchtuple', 'isempty', 'isequal', 'iseven', 'isfifo',
            'isfile', 'isfinite', 'isimmutable', 'isinf', 'isinteger', 'isinteractive',
            'isless', 'isletter', 'islink', 'islocked', 'islowercase', 'ismarked',
            'ismissing', 'ismount', 'ismutable', 'ismutabletype', 'isnan', 'isnothing',
            'isnumeric', 'isodd', 'isone', 'isopen', 'ispath', 'isperm', 'ispow2',
            'isprimitivetype', 'isprint', 'ispunct', 'isqrt', 'isreadable',
            'isreadonly', 'isready', 'isreal', 'issetequal', 'issetgid', 'issetuid',
            'issocket', 'issorted', 'isspace', 'issticky', 'isstructtype',
            'issubnormal', 'issubset', 'istaskdone', 'istaskfailed', 'istaskstarted',
            'istextmime', 'isunordered', 'isuppercase', 'isvalid', 'iswritable',
            'isxdigit', 'iszero', 'iterate', 'join', 'joinpath', 'keepat!', 'keys',
            'keytype', 'kill', 'kron', 'kron!', 'last', 'lastindex', 'lcm', 'ldexp',
            'leading_ones', 'leading_zeros', 'length', 'lock', 'log', 'log10', 'log1p',
            'log2', 'lowercase', 'lowercasefirst', 'lpad', 'lstat', 'lstrip', 'ltoh',
            'macroexpand', 'map', 'map!', 'mapfoldl', 'mapfoldr', 'mapreduce',
            'mapslices', 'mark', 'match', 'max', 'maximum', 'maximum!', 'maxintfloat',
            'merge', 'merge!', 'mergewith', 'mergewith!', 'methods', 'min', 'minimum',
            'minimum!', 'minmax', 'missing', 'mkdir', 'mkpath', 'mktemp', 'mktempdir',
            'mod', 'mod1', 'mod2pi', 'modf', 'modifyproperty!', 'mtime', 'muladd', 'mv',
            'nameof', 'names', 'nand', 'ncodeunits', 'ndigits', 'ndims', 'nextfloat',
            'nextind', 'nextpow', 'nextprod', 'nonmissingtype', 'nor', 'normpath',
            'notify', 'ntoh', 'ntuple', 'numerator', 'objectid', 'occursin', 'oftype',
            'one', 'ones', 'oneunit', 'only', 'open', 'operm', 'pairs', 'parent',
            'parentindices', 'parentmodule', 'parse', 'partialsort', 'partialsort!',
            'partialsortperm', 'partialsortperm!', 'pathof', 'peek', 'permute!',
            'permutedims', 'permutedims!', 'pi', 'pipeline', 'pkgdir', 'pointer',
            'pointer_from_objref', 'pop!', 'popat!', 'popdisplay', 'popfirst!',
            'position', 'powermod', 'precision', 'precompile', 'prepend!', 'prevfloat',
            'prevind', 'prevpow', 'print', 'println', 'printstyled', 'process_exited',
            'process_running', 'prod', 'prod!', 'promote', 'promote_rule',
            'promote_shape', 'promote_type', 'propertynames', 'push!', 'pushdisplay',
            'pushfirst!', 'put!', 'pwd', 'rad2deg', 'rand', 'randn', 'range',
            'rationalize', 'read', 'read!', 'readavailable', 'readbytes!', 'readchomp',
            'readdir', 'readeach', 'readline', 'readlines', 'readlink', 'readuntil',
            'real', 'realpath', 'redirect_stderr', 'redirect_stdin', 'redirect_stdio',
            'redirect_stdout', 'redisplay', 'reduce', 'reenable_sigint', 'reim',
            'reinterpret', 'relpath', 'rem', 'rem2pi', 'repeat', 'replace', 'replace!',
            'replaceproperty!', 'repr', 'reset', 'reshape', 'resize!', 'rethrow',
            'retry', 'reverse', 'reverse!', 'reverseind', 'rm', 'rot180', 'rotl90',
            'rotr90', 'round', 'rounding', 'rpad', 'rsplit', 'rstrip', 'run',
            'schedule', 'searchsorted', 'searchsortedfirst', 'searchsortedlast', 'sec',
            'secd', 'sech', 'seek', 'seekend', 'seekstart', 'selectdim',
            'set_zero_subnormals', 'setdiff', 'setdiff!', 'setenv', 'setindex!',
            'setprecision', 'setproperty!', 'setrounding', 'show', 'showable',
            'showerror', 'sign', 'signbit', 'signed', 'significand', 'similar', 'sin',
            'sinc', 'sincos', 'sincosd', 'sincospi', 'sind', 'sinh', 'sinpi', 'size',
            'sizehint!', 'sizeof', 'skip', 'skipchars', 'skipmissing', 'sleep',
            'something', 'sort', 'sort!', 'sortperm', 'sortperm!', 'sortslices',
            'splice!', 'split', 'splitdir', 'splitdrive', 'splitext', 'splitpath',
            'sprint', 'sqrt', 'stacktrace', 'startswith', 'stat', 'stderr', 'stdin',
            'stdout', 'step', 'stride', 'strides', 'string', 'strip', 'success', 'sum',
            'sum!', 'summary', 'supertype', 'swapproperty!', 'symdiff', 'symdiff!',
            'symlink', 'systemerror', 'take!', 'tan', 'tand', 'tanh',
            'task_local_storage', 'tempdir', 'tempname', 'textwidth', 'thisind', 'time',
            'time_ns', 'timedwait', 'titlecase', 'to_indices', 'touch', 'trailing_ones',
            'trailing_zeros', 'transcode', 'transpose', 'trues', 'trunc', 'truncate',
            'trylock', 'tryparse', 'typeintersect', 'typejoin', 'typemax', 'typemin',
            'unescape_string', 'union', 'union!', 'unique', 'unique!', 'unlock',
            'unmark', 'unsafe_copyto!', 'unsafe_load', 'unsafe_pointer_to_objref',
            'unsafe_read', 'unsafe_store!', 'unsafe_string', 'unsafe_trunc',
            'unsafe_wrap', 'unsafe_write', 'unsigned', 'uperm', 'uppercase',
            'uppercasefirst', 'valtype', 'values', 'vcat', 'vec', 'view', 'wait',
            'walkdir', 'which', 'widemul', 'widen', 'withenv', 'write', 'xor', 'yield',
            'yieldto', 'zero', 'zeros', 'zip'
        ),

        /*
        ** system interaction
        */
        3 => array(
            'run', 'spawn', 'success', 'process_running', 'process_exited', 'kill',
            'readsfrom', 'writesto', 'readsandwrite', 'detach', 'setenv', 'ENV', 'getpid',
            'clipboard', 'strftime', 'time', 'gethostname', 'getipaddr', 'pwd',
            'mkdir', 'mkpath', 'rmdir', 'ignorestatus'
        ),

        /*
        ** prompt
        */
        4 => array(
            'julia>'
        )
    ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '*', '&', '|', '%', '!', ';', '<', '>', '?', '`'
    ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #4266d5;font-weight:bold;',    // Reserved
            2 => 'color: #0000A8;font-weight:bold;',    // Built-ins
            3 => 'color: #0000A8;font-weight:bold;',    // System Interaction
            4 => 'color: #3b972e;font-weight:bold;'     // Prompt
        ),
        'COMMENTS' => array(
            1 => 'color: #888888;',
            'MULTI' => 'color: #888888;'
        ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
        ),
        'BRACKETS' => array(
            0 => 'color: #3b972e;'
        ),
        'STRINGS' => array(
            0 => 'color: #c93d39;'
        ),
        'NUMBERS' => array(
            0 => 'color: black;'
        ),
        'METHODS' => array(
            1 => 'color: black;'
        ),
        'SYMBOLS' => array(
            0 => 'color: #6bab5b;'
        ),
        'REGEXPS' => array(),
        'SCRIPT' => array()
    ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
    ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
    ),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);
