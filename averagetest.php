<?php
require_once 'average.php';

use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    public function testaverage_a_and_b()
    {
        $this->assertEquals(2.5, Average(2,3));
    }
}

?>
