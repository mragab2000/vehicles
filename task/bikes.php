<?php


class trinx extends common
{
    private $wheelSize;
    public function getWheelSize()
    {
        return $this->wheelSize;
    }

    public function setWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;
    }

}

$trinx = new trinx();
$trinx->setName("trinxBike");
$trinx->setModel("MT16");
$trinx->setPrice("€150");
$trinx->setMaxSpeed("limitless");
$trinx->setExtraSpecs(array("one year warranty","extra 1 tire for free"));
$trinx->setWheelSize(array("20","24","26"));
$trinx->moving();
echo "<pre>";
print_r($trinx);
echo "</pre>";

class peugeot extends common{
    public function getWheelSize()
    {
        return $this->wheelSize;
    }

    public function setWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;
    }
    private $wheelSize;
}

$peugeot = new peugeot();
$peugeot->setName("peugeotBike");
$peugeot->setModel("silverStar");
$peugeot->setPrice("€220");
$peugeot->setMaxSpeed("limitless");
$peugeot->setExtraSpecs(array("one year warranty","extra 2 tire for free"));
$peugeot->setWheelSize(array("20","24","26","28"));
$peugeot->moving();
echo "<pre>";
print_r($peugeot);
echo "</pre>";