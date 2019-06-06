<?php
	class Barn {

        private $registry = 0;
        private $Animals = [];
        private $Production = [];

        public function addAnimal(Animal $animal){
            array_push($this->Animals, $animal);
        }

        public function getUniqId(){
            return $this->registry++;
        }

        public function collect(){
            foreach ($this->Animals as $key => $animal) {
                $this->putInStorage($animal->collect());
            }

            return $this->Production;
        }

        private function putInStorage($incoming){
            foreach($incoming as $productType => $productValue){

                if (!array_key_exists($productType, $this->Production)) {
                    $this->Production[$productType] = 0;
                }

                $this->Production[$productType] += $productValue;
            }
        }
    }


