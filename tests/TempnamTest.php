<?php

use PHPUnit\Framework\TestCase;

class TempnamTest extends TestCase
{
    public function test_tmpfile()
    {
        $tmpfname = tempnam("/tmp", "FOO");
        echo "<pre>tmpfname = " . print_r($tmpfname, true) . "</pre>\n";
        $this->assertStringContainsString('/tmp', $tmpfname);
        $this->assertStringContainsString('/tmp/FOO', $tmpfname);
    }
}