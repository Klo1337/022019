<?php
	class Chicken extends Animal {

		function getProduction(){
			return [
				'Eggs' => ['min' => 0, 'max' => 1],
			];
		}
		
	}

