<?php

	class Person {
		public $firstname = "default name";
		public $lastname = "default last name";
		public $age = "age";
		public $gender = "female";

		function getName() {
			return "{$this->firstname}";
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
			return "{$this->firstname}";
			"{$this->lastname}";
		}
	}

	$cat1 = new Cat();
	$cat1->firstname = "Benji";
	$cat1->lastname = "K";

	print "The cat's name is {$cat1->getName()}.";