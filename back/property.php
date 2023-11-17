<?php
class Property
{
        public $referenceId;
        public $state;
        public $description;
        public $images;
        public $location;
        public $department;
        public $neighborhood;

        // Constructor
        public function __construct(
                $referenceId,
                $state,
                $description,
                $images,
                $location,
                $department,
                $neighborhood
        ) {
                $this->referenceId = $referenceId;
                $this->state = $state;
                $this->description = $description;
                $this->images = $images;
                $this->location = $location;
                $this->department = $department;
                $this->neighborhood = $neighborhood;
        }
        public function getReferenceId()
        {
                return $this->referenceId;
        }
        public function setReferenceId($referenceId): self
        {
                $this->referenceId = $referenceId;

                return $this;
        }
        public function getState()
        {
                return $this->state;
        }
        public function setState($state): self
        {
                $this->state = $state;

                return $this;
        }
        public function getDescription()
        {
                return $this->description;
        }
        public function setDescription($description): self
        {
                $this->description = $description;

                return $this;
        }
        public function getImages()
        {
                return $this->images;
        }
        public function setImages($images): self
        {
                $this->images = $images;

                return $this;
        }
        public function getLocation()
        {
                return $this->location;
        }
        public function setLocation($location): self
        {
                $this->location = $location;

                return $this;
        }
        public function getDepartment()
        {
                return $this->department;
        }
        public function setDepartment($department): self
        {
                $this->department = $department;

                return $this;
        }
        public function getNeighborhood()
        {
                return $this->neighborhood;
        }
        public function setNeighborhood($neighborhood): self
        {
                $this->neighborhood = $neighborhood;

                return $this;
        }
        
}
