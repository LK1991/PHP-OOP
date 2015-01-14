<?php

class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $color;
	public $moo;
	public $howl;

	function __construct($firstName, $lastName, $scientificName, $gender, $color, $moo, $howl) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->scientificName = $scientificName;
		$this->gender = $gender;
		$this->color = $color;
		$this->moo = $moo;
		$this->howl = $howl;
	}

	function getName() {
		return "The cow's first name is " . $this->firstName .
		"and the cow's last name is " . $this->lastName;
	}
}

class Cow extends Animal {
	function greet() {
		return $this->moo;
	}
}

class Wolf extends Animal {
	function greet() {
		return $this->howl;
	}
}

$cow = new Cow(" Lady ", " Mew ","Cow", "female", "black and white", "moo", "howl");
print $cow->getName();

echo "<br>_________________________________________________________________________________________________<br><br>";

class Person {
	public $firstName;
	public $lastName;
	public $gender;
	public $singer;
	public $guitarist;
	public $microphone;
	public $guitar;

	function __construct($firstName, $lastName, $gender, $singer, $guitarist, $microphone, $guitar) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->singer = $singer;
		$this->guitarist = $guitarist;
		$this->microphone = $microphone;
		$this->guitar = $guitar;
	}

	function getName() {
		return "The singer's first name is " . $this->firstName .
		"and his last name is " . $this->lastName;
	}
}

class Singer extends Person {
	function greet() {
		return $this->microphone;
	}
}

class Guitarist extends Person {
	function greet() {
		return $this->guitar;
	}
}

$singer = new Singer("Gerard ", "Way ", "male", "singer", "guitarist", "microphone", "guitar");
print $singer->getName();

echo "<br>_________________________________________________________________________________________________<br><br>";

class SuperHero {
	public $marvelHeroName1;
	public $marvelHeroName2;
	public $movie1;
	public $movie2;
	public $power1;
	public $power2;

	function __construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power1, $power2) {
		$this->marvelHeroName1 = $marvelHeroName1;
		$this->marvelHeroName2 = $marvelHeroName2;
		$this->movie1 = $movie1;
		$this->movie2 = $movie2;
		$this->power1 = $power1;
		$this->power2 = $power2;
	}

	function getName() {
		return "Superhero 1 is the " . $this->marvelHeroName1 . ", he's from the movie" . $this->movie1 . "and his power is having " . $this->power1 . "in his hands and body" .
		" and Superhero 2 is " . $this->marvelHeroName2 . ", he's from the movie" . $this->movie2 . "and his power is using a " . $this->power2 . " to fight his enemies";
	}
}

class Wolverine extends SuperHero {
	function greet() {
		return $this->power1;
	}
}

class Thor extends SuperHero {
	function greet() {
		return $this->power2;
	}
}

$wolverine = new Wolverine("Wolverine", "Thor", " 'The Wolverine' ", " 'Thor' ", " adamantium ", " hammer");
print $wolverine->getName();