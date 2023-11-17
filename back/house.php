<?php
class House extends Property
{
    public $dorms;
    public $baths;
    public $area;
    public $totalArea;
    public $garage;
    public $year;

    // Constructor
    public function __construct(
        $referenceId,
        $state,
        $description,
        $images,
        $street,
        $department,
        $neighborhood,
        $dorms,
        $baths,
        $area,
        $totalArea,
        $garage,
        $year
    ) {
        parent::__construct($referenceId,$state,$description,$images,$street,$department,$neighborhood); 
        $this->dorms = $dorms;
        $this->baths = $baths;
        $this->area = $area;
        $this->totalArea = $totalArea;
        $this->garage = $garage;
        $this->year = $year;
    }

    public function getDorms()
    {
        return $this->dorms;
    }
    public function setDorms($dorms): self
    {
        $this->dorms = $dorms;
        return $this;
    }
    public function getBaths()
    {
        return $this->baths;
    }
    public function setBaths($baths): self
    {
        $this->baths = $baths;
        return $this;
    }
    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area): self
    {
        $this->area = $area;
        return $this;
    }
    public function getTotalArea()
    {
        return $this->totalArea;
    }
    public function setTotalArea($totalArea): self
    {
        $this->totalArea = $totalArea;
        return $this;
    }
    public function getGarage()
    {
        return $this->garage;
    }
    public function setGarage($garage): self
    {
        $this->garage = $garage;
        return $this;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year): self
    {
        $this->year = $year;
        return $this;
    }

    public function toJson() {
        $data = parent::toJson(); 
        $data['dorms'] = $this->dorms;
        $data['baths'] = $this->baths;
        $data['area'] = $this->area;
        $data['totalArea'] = $this->totalArea;
        $data['garage'] = $this->garage;
        $data['year'] = $this->year;

        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
