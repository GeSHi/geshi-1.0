<?php

/**
 * Ensures the number of output lines are the same as the input
 */
class NewlineTest extends PHPUnit_Framework_TestCase
{

    /**
     * No fancy settings
     */
    public function testDefault()
    {
        $input = <<< END
void main () {
    printf ("Hello World");
    exit 0;
}
END;
        $input_lines = count(explode("\n", $input));

        $geshi = new GeSHi($input, 'c');
        $geshi->highlight_lines_extra(2);
        $output = $geshi->parse_code();
        $output_lines = count(explode("\n", $output));

        $this->assertEquals($input_lines, $output_lines, "number of line mismatch between input and output");
    }

    /**
     * Highlighting a line
     *
     * checks for SF bug 190
     *
     * @link https://sourceforge.net/p/geshi/bugs/190/
     */
    public function testHighlight()
    {
        $input = <<< END
void main () {
    printf ("Hello World");
    exit 0;
}
END;
        $input_lines = count(explode("\n", $input));

        $geshi = new GeSHi($input, 'c');
        $geshi->highlight_lines_extra(2);
        $output = $geshi->parse_code();
        $output_lines = count(explode("\n", $output));

        $this->assertEquals($input_lines, $output_lines, "number of line mismatch between input and output");
    }
}
