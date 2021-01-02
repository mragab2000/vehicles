<?php


class airbusA380 extends common
{
    private $passengers;
    public function flying(){}

    public function getPassengers()
    {
        return $this->passengers;
    }


    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;
    }
}
$airbusA380 = new airbusA380();
$airbusA380->setName("airbusA380");
$airbusA380->setModel("A380");
$airbusA380->setPrice("€50M");
$airbusA380->setColor("white");
$airbusA380->setMaxSpeed("1,185 km/h");
$airbusA380->setPassengers("853 passengers");
$airbusA380->flying();
echo "<pre>";
print_r($airbusA380);
echo "</pre>";