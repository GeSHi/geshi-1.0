<?php

require_once __DIR__ . '/LangCheck.php';

class langcheck_TestCase extends PHPUnit_Framework_TestCase {

    /**
     * Read all available language files
     *
     * @return array
     */
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
    public function test_file($file) {

        $check = new LangCheck($file);
        $result = $check->runChecks();
        $issues = $check->getIssuesAsString();

        $this->assertTrue($result, "The following issues were found in $file:\n" . $issues);
    }


}
