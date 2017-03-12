<?php

require_once __DIR__ . '/LanguageProvider.php';

class langcheck_TestCase extends PHPUnit_Framework_TestCase {

    public function languageProvider() {
        $files = glob(__DIR__ . '/../src/geshi/*.php');
        $files = array_map(function ($in) {
            return array($in);
        }, $files);
        return $files;
    }


    /**
     * @dataProvider languageProvider
     * @param string $file
     */
    public function test_fileformat($file) {
        $content = file_get_contents($file);
        $lang = basename($file);

        $this->assertFalse(
            (bool)preg_match('/\?>(?:\r?\n|\r(?!\n)){2,}\Z/', $content),
            "$lang has trailing empty lines at EOF"
        );
        $this->assertFalse(
            (bool)preg_match('/\?>(?:\r?\n|\r(?!\n))?\Z/', $content),
            "$lang has PHP end marker at EOF"
        );
        $this->assertTrue(
            (bool)preg_match('/(?:\r?\n|\r(?!\n))\Z/', $content),
            "$lang has missing newline at EOF"
        );
        $this->assertFalse(
            (bool)preg_match('/(\r?\n|\r(?!\n))\\1\Z/', $content),
            "$lang has trailing empty line before EOF"
        );
        $this->assertFalse(
            (bool)preg_match('/[\x20\t]$/m', $content),
            "$lang has trailing whitespace at EOL"
        );
        $this->assertFalse(
            (bool)preg_match('/\t/', $content),
            "$lang has unescaped tabulator chars (probably for indentation)"
        );
        $this->assertFalse(
            (bool)preg_match('/^(?:    )*(?!    )(?! \*) /m', $content),
            "$lang has irregular indentation (other than 4 spaces per indentation level)"
        );
        $this->assertFalse(
            (bool)preg_match('/\015\012/s', $content),
            "$lang has DOS line endings"
        );
        $this->assertFalse(
            (bool)preg_match('/\015/s', $content),
            "$lang has MAC line endings"
        );
    }

    /**
     * @dataProvider languageProvider
     * @param string $file
     */
    public function test_docblock($file) {
        $content = file_get_contents($file);
        $lang = basename($file);

        $ok = (bool)preg_match('/\/\*\*\**\s(.*?)(?:\s*\*\/)/s', $content, $m);
        $this->assertTrue($ok, "$lang is missing initial comment block");
        $comment = $m[1];

        $this->assertTrue(
            (bool)preg_match('/Author: +\S+/', $comment),
            "$lang does not contain a specification of an author"
        );
        $this->assertTrue(
            (bool)preg_match('/Copyright: +\S+/', $comment),
            "$lang does not contain a specification of the copyright"
        );
        $this->assertTrue(
            (bool)preg_match('/Release Version: +\d+\.\d+\.\d+\.\d+/', $comment),
            "$lang does not contain a specification of the release version"
        );
        $this->assertTrue(
            (bool)preg_match('/Date Started: +\S+/s', $comment),
            "$lang does not contain a specification of the date it was started"
        );
        $this->assertTrue(
            (bool)preg_match('/This file is part of GeSHi\./', $comment),
            "$lang does not state that it belongs to GeSHi"
        );
        $this->assertTrue(
            (bool)preg_match('/\S+ language file for GeSHi\./', $comment),
            "$lang does not state that it is a language file for GeSHi"
        );
        $this->assertTrue(
            (bool)preg_match('/GNU General Public License/', $comment),
            "$lang does not state that it is provided under the terms of the GNU GPL"
        );


    }

}
