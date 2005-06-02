<?php

/**
 * GeSHi example script
 * --------------------
 * Just point your browser at this script (with geshi.php in the parent directory,
 * and the language files in subdirectory "../geshi/")
 */

include('../geshi.php');
if ( isset($_POST['submit']) )
{
	if ( get_magic_quotes_gpc() ) $_POST['source'] = stripslashes($_POST['source']);
	if ( !strlen(trim($_POST['source'])) )
	{
		$_POST['source'] = implode('', @file('../geshi/' . $_POST['language'] . '.php'));
		$_POST['language'] = 'php';
	}
	$geshi = new GeSHi($_POST['source'], $_POST['language'], '../geshi/');
	$geshi->set_header_type(GESHI_HEADER_PRE);
	$geshi->enable_classes();
	$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 5);
	$geshi->set_overall_style('color: #000066; border: 1px solid #d0d0d0; background-color: #f0f0f0;', true);
	// Note the use of set_code_style to revert colours...
	$geshi->set_line_style('font: normal normal 95% \'Courier New\', Courier, monospace; color: #003030;', 'font-weight: bold; color: #006060;', true);
	$geshi->set_code_style('color: #000020;', 'color: #000020;');

	$geshi->set_link_styles(GESHI_LINK, 'color: #000060;');
	$geshi->set_link_styles(GESHI_HOVER, 'background-color: #f0f000;');

	$geshi->set_header_content('GeSHi &copy; 2004, Nigel McNie. View source of example.php for example of using GeSHi');
	$geshi->set_header_content_style('font-family: Verdana, Arial, sans-serif; color: #808080; font-size: 70%; font-weight: bold; background-color: #f0f0ff; border-bottom: 1px solid #d0d0d0; padding: 2px;');

	$geshi->set_footer_content('Parsed in <TIME> seconds,  using GeSHi <VERSION>');
	$geshi->set_footer_content_style('font-family: Verdana, Arial, sans-serif; color: #808080; font-size: 70%; font-weight: bold; background-color: #f0f0ff; border-top: 1px solid #d0d0d0; padding: 2px;');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GeSHi examples</title>
	<style type="text/css">
	<!--
	<?php
	if ( isset($_POST['submit']) )
	{
		echo $geshi->get_stylesheet();
	}
	?>
	html {
		background-color: #f0f0f0;
	}
	body {
		font-family: Verdana, Arial, sans-serif;
		margin: 10px;
		border: 2px solid #e0e0e0;
		background-color: #fcfcfc;
		padding: 5px;
	}
	h2 {
		margin: .1em 0 .2em .5em;
		border-bottom: 1px solid #b0b0b0;
		color: #b0b0b0;
		font-weight: normal;
		font-size: 150%;
	}
	h3 {
		margin: .1em 0 .2em .5em;
		color: #b0b0b0;
		font-weight: normal;
		font-size: 120%;
	}
	#footer {
		text-align: center;
		font-size: 80%;
		color: #a9a9a9;
	}
	#footer a {
		color: #9999ff;
	}
	textarea {
		border: 1px solid #b0b0b0;
		font-size: 90%;
		color: #333;
		margin-left: 20px;
	}
	select, input {
		margin-left: 20px;
	}
	p {
		font-size: 90%;
		margin-left: .5em;
	}
	-->
	</style>
</head>
<body>
<h2>GeSHi Example Script</h2>
<p>To use this script, make sure that <strong>geshi.php</strong> is in the parent directory, and that
the language files are in a subdirectory of the parent directory called <strong>geshi/</strong></p>
<p>Enter your source and a language to highlight the source in and submit, or just choose a language to
have that language file highlighted in PHP.</p>
<?php
if ( isset($_POST['submit']) )
{
	echo $geshi->parse_code();
	echo '<hr />';
}
?>
<form action="example.php" method="post">
<h3>Source to highlight</h3>
<textarea rows="10" cols="60" name="source"></textarea>
<h3>Choose a language</h3>
<select name="language">
<?php
$dir = @opendir('../geshi');

while ( $file = readdir($dir) )
{
	if ( $file == '..' || $file == '.' || !stristr($file, '.') || $file == 'css-gen.cfg' ) continue;
	$lang = substr($file, 0,  strpos($file, '.'));
	echo '<option value="' . $lang . '">' . $lang . "</option>\n";
}

closedir($dir);

?>
</select><br />
<input type="submit" name="submit" value="Highlight Source">
</form>
<div id="footer">GeSHi &copy; Nigel McNie, 2004, released under the GNU GPL<br />
For a better demonstration, check out the <a href="http://qbnz.com/highlighter/demo.php">online demo</a>
</body>
</html>