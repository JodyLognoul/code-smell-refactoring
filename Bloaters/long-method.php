<?php

use PHPUnit\Framework\TestCase;

class Box {
    public function __construct($unitCost, $height, $width)
    {
        $this->unitCost = $unitCost;
        $this->height = $height;
        $this->width = $width;
    }

    public function serializeCost()
    {
        // Calculate the cost.
        $cost = $this->height * $this->width * $this->unitCost;

        // print the cost.
        return json_encode(["cost" => $cost]);
    }
}
//
class RefactoredBox {

    public function __construct($unitCost, $height, $width)
    {
        $this->unitCost = $unitCost;
        $this->height = $height;
        $this->width = $width;
    }

    public function serializeCost()
    {
        return $this->serialize(["cost" => $this->calculateCost()]);
    }

    protected function calculateCost()
    {
        return $this->height * $this->width * $this->unitCost;
    }

    protected function serialize($cost)
    {
        return json_encode($cost);
    }
}

Class BoxTest extends TestCase {
    public function testPrintCost()
    {
        $this->assertEquals('{"cost":140}', (new Box(1.4, 10, 10))->serializeCost());
        $this->assertEquals('{"cost":140}', (new RefactoredBox(1.4, 10, 10))->serializeCost());
    }
}