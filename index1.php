<?php

class Person {
		public $firstname;
		public $lastname;

		function __construct($firstname, $lastname) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
		}

		function getName() {
			return "{$this->firstname}".	
			"{$this->lastname}";
		}
	}

	$person1 = new Person("Lianna ", "K");
	print "Person 1 : {$person1->getName()}";
