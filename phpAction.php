<?php

class universities{

    public $name;

    public $abbr;

    public $location;

    //creating functions

    public function __construct($name, $abbr, $location)

    {

        $this->name = $name;

        $this->abbr = $abbr;
        
        $this->location = $location;

    }

    function getName(){

        return $this->name;

    }

    function getAbbr(){

        return $this->abbr;

    }

    function getLocation(){

        return $this->location;

    }

}

//creating multiple objects of the class universities!!

$unilag = new universities('University of Lagos','UNILAG','Lagos');

$oau = new universities('Obafemi Awolowo University','OAU','Ife');

$uniport = new universities('University of Port-harcourt','UNIPORT','Port-harcourt');

echo $unilag->getName(); //prints the location of $unilag

echo "<br/>";

echo $uniport->getName(); //prints the name of $uniport

echo "<br/>";

echo $uniport->getLocation();  //prints the location of $uniport

echo "<br/>";

echo $uniport->getAbbr();  //prints the acronym of $uniport

echo "<br/>";

echo "The name of this university is ". $unilag->getName() .". It is fondly called " .$unilag->getAbbr() ." and it is situated in ". $unilag->getLocation().", Nigeria.";

?>
