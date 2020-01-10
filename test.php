<?php

class TestParent {
    public $testVar = 0;
    
    public function __construct() {
        echo "Hi from constructor\n";
        $this->testVar = 11;
    }
    
    public function __call($fnName, $fnArgs) {
        if (method_exists($this, $fnName)){
            echo "run private or protected {$fnName} ...\n";
            return $this->$fnName($fnArgs);
        } else {
            echo "method not exist!";
        }
        
    }
    
    public function __toString() {
        return "to string method";
    }
    
    public function getTestVar(){
        return $this->testVar;
    }
}

class Test extends TestParent
{   
    public function getTestVarPlus($x) {
        return $this->testVar+$x;
    }
    
    protected function getInitial() {
        return 0;
    }
}

echo (new Test())->getTestVarPlus(14) . "\n";
echo (new Test())->getTestVar() . "\n";

echo (new Test())->getInitial() . "\n";

echo (new Test() . " - String conversion.");