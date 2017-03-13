<?php


class dogfood_TestCase extends PHPUnit_Framework_TestCase {

    /**
     * very simple dog fooding test
     *
     * highlight the GeShi source and check some key values
     */
    public function test_dogfood() {
        $source = file_get_contents(__DIR__.'/../src/geshi.php');
        $geshi = new GeSHi($source, 'php');
        $geshi->set_header_type(GESHI_HEADER_PRE_VALID);
        $geshi->enable_classes();
        $geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 5);


        $result = $geshi->parse_code();

        // comment line at the top
        $this->assertContains('<span class="co4">&nbsp;* GeSHi - Generic Syntax Highlighter</span>', $result);

        // comment line at the bottom
        // FIXME this is actually broken currently!
        //$this->assertContains('<span class="co4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Easy way to highlight stuff. Behaves just like highlight_string</span>', $result);
    }


}
