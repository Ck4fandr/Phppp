<?php
interface N_exhauster{
    public function getBrand();
    public function getPower();
    public function Output();
}
class exhauster implements N_exhauster{
    private $brand;
    private $power;
function __construct($brand,$power){
    $this->brand = $brand;
    $this->power = $power;
}
public function getBrand(){
    return $this->brand;
}
public function getPower(){
    return $this->power;
}
public function Output(){
    return "{$this->brand}" . "{$this->power}";
}
}
$objectOne = new exhauster("Tefal",550);
echo "Марка - " . $objectOne->getBrand() . " ";
echo "Мощность - " . $objectOne->getPower();
?>