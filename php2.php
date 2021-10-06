<?php
interface N_eKettle{
    public function getBrand();
    public function getPower();
    public function Output();
}
class eKettle implements N_eKettle{
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
$objectOne = new eKettle("Tefal",1800);
echo "Марка - " . $objectOne->getBrand() . " ";
echo "Мощность - " . $objectOne->getPower();
?>