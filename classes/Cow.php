<?php
	class Cow extends Animal{

		function getProduction(){
			return [
				'Milk' => ['min' => 8, 'max' => 12],
				'TestItem' => ['min' => 0,  'max' => 1], 
			];
		}
	}

