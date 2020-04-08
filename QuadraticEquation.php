<?php


class QuadraticEquation
{
    private $value_A;
    private $value_B;
    private $value_C;
    private $delta;
    private $r1;
    private $r2;


    function _construct($A, $B, $C)
    {
        $this->value_A = $A;
        $this->value_B = $B;
        $this->value_C = $C;

    }

    function get_value_A()
    {
        echo $this->value_A;
    }

    function get_value_B()
    {
        echo $this->value_B;
    }

    function get_value_C()
    {
        echo $this->value_C;
    }
    function getDiscriminant() {
        $this->delta=$this->value_B*$this->value_B-(4*$this->value_A*$this->value_C);
        if ($this->delta>0){
            echo "the equation has two root their are : ";
            $this->getRoot1();
            $this->getRoot2();
        }else if($this->delta==0){
            echo "the equation has one root -1";
        }else{
            echo "the equation has no root ";
        }

    }
    function getRoot1() {
        $this->r1=(-$this->value_B+sqrt($this->value_B*$this->value_B-(4*$this->value_A*$this->value_C))/(2*$this->value_A) );   ;
        echo $this->r1.",";
    }
    function getRoot2(){
        $this->r2==(-$this->value_B-sqrt($this->value_B*$this->value_B-(4*$this->value_A*$this->value_C))/(2*$this->value_A) );
        echo $this->r2;
    }
    function display(){
        echo "value A :".$this->get_value_A();
        echo "value B :".$this->get_value_B();
        echo "value C :".$this->get_value_C();
        $this->getDiscriminant();

    }
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $A=$_REQUEST["A"];
    $B=$_REQUEST["B"];
    $C=$_REQUEST["C"];
    $result=new QuadraticEquation();
    $result->_construct($A,$B,$C);
    $result->display();
}