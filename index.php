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

	class Cat {
		public $firstname = "default name";
		public $lastname = "default last name";
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

	class House {
		public $color = "default color";
		public $price = 0;

		function getColor() {
			return "{$this->color}".
			"{$this->price}";
		}
	}

	$house1 = new House();
	$house1->color = "white";
	$house1->price = "400,000";

	print "The house is {$house1->getColor()}";

	// _____________________________________________________________________________________

	// Lecture 2 Examples

	class Person {
		public $firstname;
		public $lastname;
		public $age;
		public $gender;

		function __construct($title, $firstname, $lastname, $age, $gender) {
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

	$person1 = new Person("Lianna", "K", "15", "female");
	print "Person 1 : {$person1->getName()}";

	class Cat {
		public $firstname;
		public $lastname;
		public $gender;

		function __construct($title, $firstname, $lastname, $gender) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
		}

		function getName() {
			return "{$this->firstname}".
			"{$this->lastname}";
		}

		$cat1 = new Cat("Benji", "K", "male");
		print "Cat 1 : {$cat1->getname()}";
	
	class House {
		public $color;
		public $price;

		function __construct($title, $color, $price) {
			$this->color = $color;
			$this->price = $price;
		}

		function getColor() {
			return "{$this->color}".
			"{$this->price}";
		}
	}

	$house1 = new House("white", "400,000");
	print "House 1 : {$house1->getColor()}";
