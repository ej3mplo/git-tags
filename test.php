<?php

class TestParent {
    public function getTestVar(){
        return $this->testVar;
    }
}

class Test extends TestParent
{
    public $testVar = 0;
    
    public function __construct() {
        echo "Hi from constructor\n";
        $this->testVar = 11;
    }
    
    public function getTestVarPlus($x) {
        return $this->testVar+$x;
    }
}

echo (new Test())->getTestVarPlus(14) . "\n";
echo (new Test())->getTestVar() . "\n";