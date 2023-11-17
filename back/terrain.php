<?php
class Terrain extends Property {
    public $totalArea;

        // Constructor
        public function __construct(
            $totalArea,
        ) {
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
}

?>