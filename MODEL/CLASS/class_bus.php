<?php
class bus{
 
    private $nb_bus;
    private $plaque_matricul;
    private $capacite;

    public function __constracut( $nb_bus , $plaque_matricul , $capacite)
    { 
        $this->nb_bus = $nb_bus;
        $this->plaque_matricul = $plaque_matricul;
        $this->capacite = $capacite;
    }


    public function getNbBus()
    {
        return $this->nb_bus;
    }
    public function getPlaque_martricul()
    {
        return $this->plaque_matricul;
    }
    public function getCapacite()
    {
        return $this->capacite;
    }
}
?>

