<?php
class Company{
        private $image;
        private $companyname;


    public function __construct($image, $companyname)
    {
        $this->image = $image; 
        $this->companyname =  $companyname;
    }
    public function __get ($property){
        return $this->$property;
    }
    public function __set ($property, $value){
        $this->$property = $value;
    }

}
?>