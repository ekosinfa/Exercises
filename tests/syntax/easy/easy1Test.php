<?php

require __DIR__.'/../../../src/syntax/easy/easy1.php';

class easy1Test extends PHPUnit_Framework_TestCase
{
    public function testVariableIsAssigned()
    {
        $this->assertEquals('value', returnValue());
    }
}

?>
