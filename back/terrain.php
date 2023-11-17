<?php
class Terrain extends Property
{
    public $totalArea;

    // Constructor
    public function __construct(
        $referenceId,
        $state,
        $description,
        $images,
        $street,
        $department,
        $neighborhood,
        $totalArea
    ) {
        parent::__construct($referenceId,$state,$description,$images,$street,$department,$neighborhood);
        $this->totalArea = $totalArea;
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

    public function toJson() {
        $data = parent::toJson(); // Include data from the base class
        $data['totalArea'] = $this->totalArea;

        return json_encode($data, JSON_PRETTY_PRINT);
    }
}

?>