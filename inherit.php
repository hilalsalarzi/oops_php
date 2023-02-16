<?php 
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name,$age,$salary ){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }
    function info(){
        // echo "<h3>Employee Profile</h3>";
        echo "Name: ".$this->name."<br>";
        echo "Age: ". $this->age."<br>";
        echo "Salary: ". $this->salary."<br><br>";
        echo"________________________________________________________________<br>";
    }
    
}
class manager extends employee{
    public $ta=900;
    public $phone=800;
    public $topiad;
    public $address="lahore";
    function info(){
        $this->salary=$this->ta+ $this->phone + $this->topiad;
        // echo "<h3>Employee Profile</h3>";
        echo "Name: ".$this->name."<br>";
        echo "Age: ". $this->age."<br>";
        echo "Salary: ". $this->salary."<br><br>";
        echo "address: ". $this->address."<br><br>";
        echo"________________________________________________________________<br>";
    }
}

$emp=new employee("John","22","2000");
$emp2=new employee("kamal","2","3000");

$manager=new manager("Manager","25","37000","peshawar");
echo "<h3>Employee</h3>";
$emp->info();
$emp2->info();
echo "<h3> Manager</h3>";
$manager->info();

?>