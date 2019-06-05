<?php
	class Barn {

		private $Animals = [];
		private $registry = 0;
		private $Production = [];

		public function __construct(){
			$this->Production = ['eggs' => 0, 'milk' => 0];
		}

		public function addAnimal(Animal $animal){
			array_push($this->Animals, $animal);
		}

		public function getUniqId(){
			return $this->registry++;
		}

		public function collect(){
			$eggs = 0;
			$milk = 0;
			foreach ($this->Animals as $key => $animal) {
				if($animal instanceof Cow){
					$milk += $animal->collect();
				}
				else if($animal instanceof Chiken)  {
					$eggs += $animal->collect();
				}
			}

			$this->Production = [
				'eggs' => $eggs + $this->Production['eggs'], 
				'milk' => $milk + $this->Production['milk']
			];

			return $this->Production;
		}
	}


