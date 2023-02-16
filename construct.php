<?php
class person{
    public $nm;
    public $ng;

    function __construct($nm="No nm", $ng="No ng")

    {
      $this ->nm = $nm;
      $this ->ng = $ng;

    }
    function show(){
        echo " <b>Name </b>". $this ->nm."<br/>  ";
        echo "<b>Age </b>". $this ->ng."  ";
    
    }
}
$ty="kamal";
$hilal=new Person();
$hilal->nm=$ty;
$hilal->ng=22;
echo $hilal-> show()."<br/>";
$bilal=new Person();
$bilal->nm="bilal Ahamd";
$bilal->ng=22;
 echo $bilal-> show();

?>