<?php
/*************************************************************************************
 * gdscript.php
 * -----------
 * Author: Jean-Michel Bernard (bernardjm@gmail.com)
 * Copyright: (C) 2020 Jean-Michel Bernard
 * Release Version: 1.0.9.1
 * Date Started: 20/04/07
 *
 * Godot Gdscript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2020/08/18 (1.0.1)
 *   - Adding new builtins (Godot 4.0) and some annotations not conflicting with godot 3
 * 2020/04/07 (1.0.0)
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
    'LANG_NAME' => 'gdscript',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
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
        ** https://docs.godotengine.org/en/3.1/getting_started/scripting/gdscript/gdscript_basics.html
        */
        1 => array(
            'if','elif','else','for','while','match','break','continue','pass','return','class','extends','is','as','self','tool','signal','func','static','const','enum','var','onready','export','setget','breakpoint','preload','yield','assert','remote','master','puppet','remotesync','mastersync','puppetsync','PI','TAU','INF','NAN', 'and'
            ),

        /*
        ** Set 2: builtins
        ** http://docs.godotengine.org/en/stable/classes/class_@gdscript.html
        */
        2 => array(
            'Color8','ColorN','abs','acos','asin','assert','atan','atan2','bytes2var','cartesian2polar','ceil','char','clamp','convert','cos','cosh','db2linear','decimals','dectime','deg2rad','dict2inst','ease','exp','floor','fmod','fposmod','funcref','get_stack','hash','inst2dict','instance_from_id','inverse_lerp','is_equal_approx','is_inf','is_instance_valid','is_nan','is_zero_approx','len','lerp','lerp_angle','linear2db','load','log','max','min','move_toward','nearest_po2','ord','parse_json','polar2cartesian','posmod','pow','preload','print','print_debug','print_stack','printerr','printraw','prints','printt','push_error','push_warning','rad2deg','rand_range','rand_seed','randf','randi','randomize','range','range_lerp','round','seed','sign','sin','sinh','smoothstep','sqrt','step_decimals','stepify','str','str2var','tan','tanh','to_json','type_exists','typeof','validate_json','var2bytes','var2str','weakref','wrapf','wrapi','yield','class_name','await','super',
            'StringName','Vector2i','Vector3i','Callable','set','get'
            ),

        /*
        ** Set 3: Godot Nodes
        ** https://docs.godotengine.org/en/3.2/classes/index.html
        */
        3 => array(
            '@C#','@GDScript','@GlobalScope','@NativeScript','@VisualScript','AABB','AcceptDialog','AnimatedSprite','AnimatedSprite3D','AnimatedTexture','Animation','AnimationNode','AnimationNodeAdd2','AnimationNodeAdd3','AnimationNodeAnimation','AnimationNodeBlend2','AnimationNodeBlend3','AnimationNodeBlendSpace1D','AnimationNodeBlendSpace2D','AnimationNodeBlendTree','AnimationNodeOneShot','AnimationNodeOutput','AnimationNodeStateMachine','AnimationNodeStateMachinePlayback','AnimationNodeStateMachineTransition','AnimationNodeTimeScale','AnimationNodeTimeSeek','AnimationNodeTransition','AnimationPlayer','AnimationRootNode','AnimationTrackEditPlugin','AnimationTree','AnimationTreePlayer','Area','Area2D','Array','ArrayMesh','ARVRAnchor','ARVRCamera','ARVRController','ARVRInterface','ARVRInterfaceGDNative','ARVROrigin','ARVRPositionalTracker','ARVRServer','AStar','AStar2D','AtlasTexture','AudioBusLayout','AudioEffect','AudioEffectAmplify','AudioEffectBandLimitFilter','AudioEffectBandPassFilter','AudioEffectChorus','AudioEffectCompressor','AudioEffectDelay','AudioEffectDistortion','AudioEffectEQ','AudioEffectEQ10','AudioEffectEQ21','AudioEffectEQ6','AudioEffectFilter','AudioEffectHighPassFilter','AudioEffectHighShelfFilter','AudioEffectInstance','AudioEffectLimiter','AudioEffectLowPassFilter','AudioEffectLowShelfFilter','AudioEffectNotchFilter','AudioEffectPanner','AudioEffectPhaser','AudioEffectPitchShift','AudioEffectRecord','AudioEffectReverb','AudioEffectSpectrumAnalyzer','AudioEffectSpectrumAnalyzerInstance','AudioEffectStereoEnhance','AudioServer','AudioStream','AudioStreamGenerator','AudioStreamGeneratorPlayback','AudioStreamMicrophone','AudioStreamOGGVorbis','AudioStreamPlayback','AudioStreamPlaybackResampled','AudioStreamPlayer','AudioStreamPlayer2D','AudioStreamPlayer3D','AudioStreamRandomPitch','AudioStreamSample','BackBufferCopy','BakedLightmap','BakedLightmapData','BaseButton','Basis','BitMap','BitmapFont','Bone2D','BoneAttachment','bool','BoxContainer','BoxShape','BulletPhysicsDirectBodyState','BulletPhysicsServer','Button','ButtonGroup','Camera','Camera2D','CameraFeed','CameraServer','CameraTexture','CanvasItem','CanvasItemMaterial','CanvasLayer','CanvasModulate','CapsuleMesh','CapsuleShape','CapsuleShape2D','CenterContainer','CharFXTransform','CheckBox','CheckButton','CircleShape2D','ClassDB','ClippedCamera','CollisionObject','CollisionObject2D','CollisionPolygon','CollisionPolygon2D','CollisionShape','CollisionShape2D','Color','ColorPicker','ColorPickerButton','ColorRect','ConcavePolygonShape','ConcavePolygonShape2D','ConeTwistJoint','ConfigFile','ConfirmationDialog','Container','Control','ConvexPolygonShape','ConvexPolygonShape2D','CPUParticles','CPUParticles2D','Crypto','CryptoKey','CSGBox','CSGCombiner','CSGCylinder','CSGMesh','CSGPolygon','CSGPrimitive','CSGShape','CSGSphere','CSGTorus','CSharpScript','CubeMap','CubeMesh','Curve','Curve2D','Curve3D','CurveTexture','CylinderMesh','CylinderShape','DampedSpringJoint2D','Dictionary','DirectionalLight','Directory','DynamicFont','DynamicFontData','EditorExportPlugin','EditorFeatureProfile','EditorFileDialog','EditorFileSystem','EditorFileSystemDirectory','EditorImportPlugin','EditorInspector','EditorInspectorPlugin','EditorInterface','EditorNavigationMeshGenerator','EditorPlugin','EditorProperty','EditorResourceConversionPlugin','EditorResourcePreview','EditorResourcePreviewGenerator','EditorSceneImporter','EditorSceneImporterAssimp','EditorScenePostImport','EditorScript','EditorSelection','EditorSettings','EditorSpatialGizmo','EditorSpatialGizmoPlugin','EditorSpinSlider','EditorVCSInterface','EncodedObjectAsID','Engine','Environment','Expression','File','FileDialog','float','Font','FuncRef','GDNative','GDNativeLibrary','GDScript','GDScriptFunctionState','GDScriptNativeClass','Generic6DOFJoint','Geometry','GeometryInstance','GIProbe','GIProbeData','GodotSharp','Gradient','GradientTexture','GraphEdit','GraphNode','GridContainer','GridMap','GrooveJoint2D','HashingContext','HBoxContainer','HeightMapShape','HingeJoint','HScrollBar','HSeparator','HSlider','HSplitContainer','HTTPClient','HTTPRequest','Image','ImageTexture','ImmediateGeometry','Input','InputDefault','InputEvent','InputEventAction','InputEventGesture','InputEventJoypadButton','InputEventJoypadMotion','InputEventKey','InputEventMagnifyGesture','InputEventMIDI','InputEventMouse','InputEventMouseButton','InputEventMouseMotion','InputEventPanGesture','InputEventScreenDrag','InputEventScreenTouch','InputEventWithModifiers','InputMap','InstancePlaceholder','int','InterpolatedCamera','IP','IP_Unix','ItemList','JavaClass','JavaClassWrapper','JavaScript','Joint','Joint2D','JSON','JSONParseResult','JSONRPC','KinematicBody','KinematicBody2D','KinematicCollision','KinematicCollision2D','Label','LargeTexture','Light','Light2D','LightOccluder2D','Line2D','LineEdit','LineShape2D','LinkButton','Listener','MainLoop','MarginContainer','Marshalls','Material','MenuButton','Mesh','MeshDataTool','MeshInstance','MeshInstance2D','MeshLibrary','MeshTexture','MobileVRInterface','MultiMesh','MultiMeshInstance','MultiMeshInstance2D','MultiplayerAPI','MultiplayerPeerGDNative','Mutex','NativeScript','Navigation','Navigation2D','NavigationMesh','NavigationMeshInstance','NavigationPolygon','NavigationPolygonInstance','NetworkedMultiplayerENet','NetworkedMultiplayerPeer','NinePatchRect','Node','Node2D','NodePath','NoiseTexture','Object','OccluderPolygon2D','OmniLight','OpenSimplexNoise','OptionButton','OS','PackedDataContainer','PackedDataContainerRef','PackedScene','PacketPeer','PacketPeerGDNative','PacketPeerStream','PacketPeerUDP','Panel','PanelContainer','PanoramaSky','ParallaxBackground','ParallaxLayer','Particles','Particles2D','ParticlesMaterial','Path','Path2D','PathFollow','PathFollow2D','PCKPacker','Performance','PHashTranslation','PhysicalBone','Physics2DDirectBodyState','Physics2DDirectBodyStateSW','Physics2DDirectSpaceState','Physics2DServer','Physics2DServerSW','Physics2DShapeQueryParameters','Physics2DShapeQueryResult','Physics2DTestMotionResult','PhysicsBody','PhysicsBody2D','PhysicsDirectBodyState','PhysicsDirectSpaceState','PhysicsMaterial','PhysicsServer','PhysicsShapeQueryParameters','PhysicsShapeQueryResult','PinJoint','PinJoint2D','Plane','PlaneMesh','PlaneShape','PluginScript','PointMesh','Polygon2D','PolygonPathFinder','PoolByteArray','PoolColorArray','PoolIntArray','PoolRealArray','PoolStringArray','PoolVector2Array','PoolVector3Array','Popup','PopupDialog','PopupMenu','PopupPanel','Position2D','Position3D','PrimitiveMesh','PrismMesh','ProceduralSky','ProgressBar','ProjectSettings','ProximityGroup','ProxyTexture','QuadMesh','Quat','RandomNumberGenerator','Range','RayCast','RayCast2D','RayShape','RayShape2D','Rect2','RectangleShape2D','Reference','ReferenceRect','ReflectionProbe','RegEx','RegExMatch','RemoteTransform','RemoteTransform2D','Resource','ResourceFormatLoader','ResourceFormatLoaderCrypto','ResourceFormatSaver','ResourceFormatSaverCrypto','ResourceImporter','ResourceInteractiveLoader','ResourceLoader','ResourcePreloader','ResourceSaver','RichTextEffect','RichTextLabel','RID','RigidBody','RigidBody2D','RootMotionView','SceneState','SceneTree','SceneTreeTimer','Script','ScriptCreateDialog','ScriptEditor','ScrollBar','ScrollContainer','SegmentShape2D','Semaphore','Separator','Shader','ShaderMaterial','Shape','Shape2D','ShortCut','Skeleton','Skeleton2D','SkeletonIK','Skin','SkinReference','Sky','Slider','SliderJoint','SoftBody','Spatial','SpatialGizmo','SpatialMaterial','SpatialVelocityTracker','SphereMesh','SphereShape','SpinBox','SplitContainer','SpotLight','SpringArm','Sprite','Sprite3D','SpriteBase3D','SpriteFrames','StaticBody','StaticBody2D','StreamPeer','StreamPeerBuffer','StreamPeerGDNative','StreamPeerSSL','StreamPeerTCP','StreamTexture','String','StyleBox','StyleBoxEmpty','StyleBoxFlat','StyleBoxLine','StyleBoxTexture','SurfaceTool','TabContainer','Tabs','TCP_Server','TextEdit','TextFile','Texture','Texture3D','TextureArray','TextureButton','TextureLayered','TextureProgress','TextureRect','Theme','Thread','TileMap','TileSet','Timer','ToolButton','TouchScreenButton','Transform','Transform2D','Translation','TranslationServer','Tree','TreeItem','TriangleMesh','Tween','UndoRedo','UPNP','UPNPDevice','Variant','VBoxContainer','Vector2','Vector3','VehicleBody','VehicleWheel','VideoPlayer','VideoStream','VideoStreamGDNative','VideoStreamTheora','VideoStreamWebm','Viewport','ViewportContainer','ViewportTexture','VisibilityEnabler','VisibilityEnabler2D','VisibilityNotifier','VisibilityNotifier2D','VisualInstance','VisualScript','VisualScriptBasicTypeConstant','VisualScriptBuiltinFunc','VisualScriptClassConstant','VisualScriptComment','VisualScriptComposeArray','VisualScriptCondition','VisualScriptConstant','VisualScriptConstructor','VisualScriptCustomNode','VisualScriptDeconstruct','VisualScriptEditor','VisualScriptEmitSignal','VisualScriptEngineSingleton','VisualScriptExpression','VisualScriptFunction','VisualScriptFunctionCall','VisualScriptFunctionState','VisualScriptGlobalConstant','VisualScriptIndexGet','VisualScriptIndexSet','VisualScriptInputAction','VisualScriptIterator','VisualScriptLists','VisualScriptLocalVar','VisualScriptLocalVarSet','VisualScriptMathConstant','VisualScriptNode','VisualScriptOperator','VisualScriptPreload','VisualScriptPropertyGet','VisualScriptPropertySet','VisualScriptResourcePath','VisualScriptReturn','VisualScriptSceneNode','VisualScriptSceneTree','VisualScriptSelect','VisualScriptSelf','VisualScriptSequence','VisualScriptSubCall','VisualScriptSwitch','VisualScriptTypeCast','VisualScriptVariableGet','VisualScriptVariableSet','VisualScriptWhile','VisualScriptYield','VisualScriptYieldSignal','VisualServer','VisualShader','VisualShaderNode','VisualShaderNodeBooleanConstant','VisualShaderNodeBooleanUniform','VisualShaderNodeColorConstant','VisualShaderNodeColorFunc','VisualShaderNodeColorOp','VisualShaderNodeColorUniform','VisualShaderNodeCompare','VisualShaderNodeCubeMap','VisualShaderNodeCubeMapUniform','VisualShaderNodeCustom','VisualShaderNodeDeterminant','VisualShaderNodeDotProduct','VisualShaderNodeExpression','VisualShaderNodeFaceForward','VisualShaderNodeFresnel','VisualShaderNodeGlobalExpression','VisualShaderNodeGroupBase','VisualShaderNodeIf','VisualShaderNodeInput','VisualShaderNodeIs','VisualShaderNodeOuterProduct','VisualShaderNodeOutput','VisualShaderNodeScalarClamp','VisualShaderNodeScalarConstant','VisualShaderNodeScalarDerivativeFunc','VisualShaderNodeScalarFunc','VisualShaderNodeScalarInterp','VisualShaderNodeScalarOp','VisualShaderNodeScalarSmoothStep','VisualShaderNodeScalarSwitch','VisualShaderNodeScalarUniform','VisualShaderNodeSwitch','VisualShaderNodeTexture','VisualShaderNodeTextureUniform','VisualShaderNodeTextureUniformTriplanar','VisualShaderNodeTransformCompose','VisualShaderNodeTransformConstant','VisualShaderNodeTransformDecompose','VisualShaderNodeTransformFunc','VisualShaderNodeTransformMult','VisualShaderNodeTransformUniform','VisualShaderNodeTransformVecMult','VisualShaderNodeUniform','VisualShaderNodeVec3Constant','VisualShaderNodeVec3Uniform','VisualShaderNodeVectorClamp','VisualShaderNodeVectorCompose','VisualShaderNodeVectorDecompose','VisualShaderNodeVectorDerivativeFunc','VisualShaderNodeVectorDistance','VisualShaderNodeVectorFunc','VisualShaderNodeVectorInterp','VisualShaderNodeVectorLen','VisualShaderNodeVectorOp','VisualShaderNodeVectorRefract','VisualShaderNodeVectorScalarMix','VisualShaderNodeVectorScalarSmoothStep','VisualShaderNodeVectorScalarStep','VisualShaderNodeVectorSmoothStep','VScrollBar','VSeparator','VSlider','VSplitContainer','WeakRef','WebRTCDataChannel','WebRTCDataChannelGDNative','WebRTCMultiplayer','WebRTCPeerConnection','WebRTCPeerConnectionGDNative','WebSocketClient','WebSocketMultiplayerPeer','WebSocketPeer','WebSocketServer','WindowDialog','World','World2D','WorldEnvironment','X509Certificate','XMLParser','YSort'
        ),
        /*
        ** Set 34: Annotations
        ** https://godotengine.org/article/gdscript-progress-report-new-gdscript-now-merged
        */
        4 => array(
            '@','@export_range','@icon'
            )
        ),
    'SYMBOLS' => array(
        '<', '>', '=', '!', '<=', '>=',             //·comparison·operators
        '~', '@',                                   //·unary·operators
        ';', ','                                    //·statement·separator
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
            1 => 'color: #ff7085;',                      // Identifiers
            2 => 'color: #ff7085;',                      // Builtins
            3 => 'color: #42ffc2;',                       // Godot Nodes
            4 => 'color: #a6c2f7;'                       // Annotation

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
        2 => '',
        3 => '',
        4 => ''
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
