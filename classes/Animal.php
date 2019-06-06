<?php
	abstract class Animal {

		private $id;
		
		public function __construct($id){
			$this->id = $id;
		}
					
		public function getId(){
			return $this->id;
		}

		abstract protected function getProduction();

		function collect(){
			$collectedProduction = [];
	
			foreach($this->getProduction() as $type => $limits){
				$collectedProduction[$type] = rand($limits['min'], $limits['max']);
			}
	
			return $collectedProduction;
		}

	}

