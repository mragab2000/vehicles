<?php

class bmw extends common
{
    public function engineStarting(){
        echo "Welcome";
    }
}

$bmw = new bmw();
$bmw->setName("BMW");
$bmw->setModel("X6");
$bmw->setPrice("€43K");
$bmw->setColor(array("grey","black","red"));
$bmw->setMaxSpeed("260km/h");
$bmw->setExtraSpecs(array("fullOption","free maintenance for 6 months","8 Airbags"));
$bmw->engineStarting();
$bmw->moving();
echo "<pre>";
print_r($bmw);
echo "</pre>";


class Skoda extends common
{

}

$skoda = new skoda();
$skoda->setName("skoda");
$skoda->setModel("octavia");
$skoda->setPrice("€20K");
$skoda->setColor(array("silver","black","red"."white"));
$skoda->setMaxSpeed("230km/h");
$skoda->setExtraSpecs(array("fullOption","free maintenance for 3 months"));
$skoda->moving();
echo "<pre>";
print_r($skoda);
echo "</pre>";

