<?php
class Apartment extends Property
{
        public $dorms;
        public $baths;
        public $area;
        public $commonExpenses;
        public $garage;
        public $disposition;
        public $year;

        // Constructor
        public function __construct(
                $dorms,
                $baths,
                $area,
                $commonExpenses,
                $garage,
                $disposition,
                $year,
                $referenceId,
                $state,
                $description,
                $images,
                $street,
                $department,
                $neighborhood
        ) {
                parent::__construct($referenceId, $state, $description, $images, $street, $department, $neighborhood);
                $this->dorms = $dorms;
                $this->baths = $baths;
                $this->area = $area;
                $this->commonExpenses = $commonExpenses;
                $this->garage = $garage;
                $this->disposition = $disposition;
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
        public function getCommonExpenses()
        {
                return $this->commonExpenses;
        }
        public function setCommonExpenses($commonExpenses): self
        {
                $this->commonExpenses = $commonExpenses;

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
        public function getDisposition()
        {
                return $this->disposition;
        }
        public function setDisposition($disposition): self
        {
                $this->disposition = $disposition;

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

        public function toJson()
        {
                $data = parent::toJson(); // Include data from the base class
                $data['dorms'] = $this->dorms;
                $data['baths'] = $this->baths;
                $data['area'] = $this->area;
                $data['commonExpenses'] = $this->commonExpenses;
                $data['garage'] = $this->garage;
                $data['disposition'] = $this->disposition;
                $data['year'] = $this->year;

                return json_encode($data, JSON_PRETTY_PRINT);
        }
}
