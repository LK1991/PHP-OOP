<?php

	class Human {
		public $firstname;
		public $lastname;
		public $age;
		public $gender;

		function __construct($firstname, $lastname, $age, $gender) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->age = $age;
			$this->gender = $gender;
		}

		function getName() {
			return "{$this->firstname}".	
			"{$this->lastname}";
		}
	}

	$human1 = new Human("Lianna", " K", "15", "female");
	print "Human 1 : {$human1->getName()}";

	echo "<br>____________________________________________________________________<br>" . "<br>";

	class Cat {
		public $firstname;
		public $lastname;
		public $gender;

		function __construct($firstname, $lastname, $gender) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
		}

		function getName() {
			return "{$this->firstname}".
			"{$this->lastname}";
		}
}
	$cat1 = new Cat("Benji", "K", "male");
	print "Cat 1 : {$cat1->getname()}";

	echo "<br>____________________________________________________________________<br>" . "<br>";
	
	class House {
		public $color;
		public $price;

		function __construct($color, $price) {
			$this->color = $color;
			$this->price = $price;
		}

		function getColor() {
			return $this->color;
		}
	}

	$house1 = new House("white", true);
	print "House 1 : {$house1->getColor()}";

