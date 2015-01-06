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
	$person1->firstName = "Lianna";
	$person1->lastname = "K";

	print "The person's name is {$person1->getName()}.";