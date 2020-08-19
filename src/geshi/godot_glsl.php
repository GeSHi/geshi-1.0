<?php
/*************************************************************************************
 * godot_glsl.php
 * -----------
 * Author: Jean-Michel Bernard (bernardjm@gmail.com)
 * Copyright: (C) 2020 Jean-Michel Bernard
 * Release Version: 1.0.9.1
 * Date Started: 18/08/07
 *
 * Godot Gdscript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2020/08/18 (1.0.0)
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
    'LANG_NAME' => 'godot_glsl',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    //Longest quotemarks ALWAYS first
    'QUOTEMARKS' => array('"""', "'''", '"', "'"),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX_0O | GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_NONSCI | GESHI_NUMBER_FLT_NONSCI_F |
        GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        /*
        ** Set 1: Identifiers
        ** https://docs.godotengine.org/en/3.0/tutorials/shading/shading_language.html#
        */
        1 => array(
            'shader_type','render_mode','void','bool','bvec2','bvec3','bvec4','int','ivec2','ivec3','ivec4',
            'uint','uvec2','uvec3','uvec4','float','vec2','vec3','vec4','mat2','mat3','mat4','sampler2D','isampler2D','usampler2D','samplerCube',
            'if','else','for','while','break','continue','return','const','uniform','varying','default',
            'hint_color','hint_range','hint_albedo','hint_black_albedo','hint_normal','hint_white','hint_black','hint_aniso'
            ),
        /*
        ** Set 2: builtins
        ** https://docs.godotengine.org/en/3.0/tutorials/shading/shading_language.html#
        */
        2 => array(
            'abs','acos','acosh','ACTIVE','ALBEDO','all','ALPHA','ALPHA_SCISSOR','ANISOTROPY','ANISOTROPY_FLOW','any','AO','AO_LIGHT_AFFECT',
            'asin','asinh','AT_LIGHT_PASS','atan','atanh','ATTENUATION','BINORMAL','blend_add','blend_mix','blend_mul','blend_premul_alpha',
            'blend_sub','CAMERA_MATRIX','ceil','clamp','CLEARCOAT','CLEARCOAT_GLOSS','COLOR','cos','cosh','cross','cull_back','cull_disabled',
            'cull_front','CUSTOM','degrees','DELTA','depth_draw_alpha_prepass','depth_draw_always','depth_draw_never','depth_draw_opaque',
            'depth_test_disable','DEPTH_TEXTURE','determinant','dFdx','dFdy','diffuse_burley','diffuse_lambert','diffuse_lambert_wrap',
            'DIFFUSE_LIGHT','diffuse_oren_nayar','diffuse_toon','disable_force','disable_velocity','distance','dot','EMISSION','EMISSION_TRANSFORM',
            'equal','exp','exp2','EXTRA_MATRIX','faceforward','floatBitsToInt','floatBitsToUint','floor','fract','FRAGCOORD','FRONT_FACING',
            'fwidth','greaterThan','greaterThanEqual','INDEX','INSTANCE_CUSTOM','INSTANCE_ID','intBitsToFloat','INV_CAMERA_MATRIX',
            'INV_PROJECTION_MATRIX','inverse','inversesqrt','isinf','isnan','keep_data','length','lessThan','lessThanEqual','LIFETIME','LIGHT',
            'LIGHT_COLOR','LIGHT_HEIGHT','light_only','LIGHT_UV','LIGHT_VEC','LIGHTVELOCITY','log','log2','MASS','matrixCompMult','max','METALLIC',
            'min','mix','mod','MODELVIEW_MATRIX','modf','NORMAL','NORMAL_TEXTURE','normalize','NORMALMAP','NORMALMAP_DEPTH','not','notEqual','NUMBER',
            'outerProduct','POINT_COORD','POINT_SIZE','pow','PROJECTION_MATRIX','radians','RANDOM_SEED','reflect','refract','RESTART','RIM','RIM_TINT',
            'ROUGHNESS','ROUGHNESSINV_PROJECTION_MATRIX','round','roundEven','SCREEN_PIXEL_SIZE','SCREEN_TEXTURE','SCREEN_TEXTUREPOSITION','SCREEN_UV',
            'SHADOW_COLOR','sign','sin','sinh','skip_vertex_transform','smoothstep','SPECULAR','specular_blinn','specular_disabled','SPECULAR_LIGHT',
            'specular_phong','specular_schlick_ggx','specular_toon','sqrt','SSS_STRENGTH','step','tan','TANGENT','tanh','texelFetch','texture',
            'TEXTURE','TEXTURE_PIXEL_SIZE','textureLod','textureProj','textureProjLod','textureSize','TIME','TRANSFORM','TRANSMISSION','transpose',
            'trunc','uintBitsToFloat','unshaded','UV','UV2','VERTEX','vertex_lighting','VIEW','VIEWPORT_SIZE','WORLD_MATRIX','world_vertex_coords'
            ),
        ),
    'SYMBOLS' => array(
        '<', '>', '=', '!', '<=', '>=',             //·comparison·operators
        '~', '@',                                   //·unary·operators
        ';', ','                                    //·statement·separator
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ff7085;',                      // Identifiers
            2 => 'color: #ff7085;'                      // Builtins
            ),
        'COMMENTS' => array(
            1 => 'color: #767982',
            'MULTI' => 'color: #767982; '
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ffeca0;'
            ),
        'BRACKETS' => array(
            0 => 'color: #abc8ff;'
            ),
        'STRINGS' => array(
            0 => 'color: #ffeca0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #a0ffe0;'
            ),
        'METHODS' => array(
            1 => 'color: #66e6ff;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #abc8ff;'
            ),
        'REGEXPS' => array(
            0 => 'color: #63c259;',
            1 => 'color: #66e6ff;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //Variables
        0 => "[\\$]+[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*",
        1 => "[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*\("
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
