<?php

require __DIR__.'/../../../src/syntax/easy/easy2.php';

class easy2Test extends PHPUnit_Framework_TestCase
{
    public function testVariableIsAssigned()
    {
        $this->assertEquals(100, returnNumbers());
    }
}

?>
