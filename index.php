<?php

	class Person {
		public $firstname = "default name";
		public $lastname = "default last name";
		public $age = "age";
		public $gender = "female";

		function getName() {
			return "{$this->firstname}".
			"{$this->lastname}";
		}
	}

	$person1 = new Person();
	$person1->firstname = "Lianna";
	$person1->lastname = "K";

	print "The person's name is {$person1->getName()}.";

	echo "<br>____________________________________________________________________<br>" . "<br>";

	class Cat {
		public $firstname = "Man";
		public $lastname = " Kitty";
		public $gender = "male";
		public $price = 0;

		function getName() {
			return "{$this->firstname}".
			"{$this->lastname}";
		}
	}

	$cat1 = new Cat();
	$cat1->firstname = "Benji";
	$cat1->lastname = "K";

	print "The cat's name is {$cat1->getName()}.";

	echo "<br>____________________________________________________________________<br>" . "<br>";

	class House {
		public $color = "yellow";
		public $price = 0;

		function getColor() {
			return "{$this->color}";
		}
	}

	$house1 = new House();
	$house1->color = "white";
	$house1->price = "400,000";

	print "The house is {$house1->getColor()}";

	echo "<br>____________________________________________________________________<br>" . "<br>";

	class Human {
		public $firstname;
		public $lastname;
		public $age;
		public $gender;

		function __construct( $firstname, $lastname, $age, $gender) {
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

	class Catt {
		public $firstname;
		public $lastname;
		public $gender;

		function __construct( $firstname, $lastname, $gender) {
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
	
	class Housee {
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

