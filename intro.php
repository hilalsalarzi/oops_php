<?php class calculator{
    public $a,$b,$c;
    
    function sum(){
        $this->c=$this->a +$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a -$this->b;
        return $this->c;
    }
}
$c1=new calculator();
 $c1->a=20;
$c1->b=20;
echo $c1->sum()."\n <br>\n \n\n";
$c1=new calculator();
 $c1->a=20;
$c1->b=2;
echo $c1->sub();
?>