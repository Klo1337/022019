<?php
	class Animal {

		private $id;
		
		public function __construct($id){
			$this->id = $id;
		}
					
		public function getId(){
			return $this->id;
		}
	
		public function collect() {
			return 0;
		}
	}

