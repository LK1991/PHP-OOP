<?php

class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $color;


	function __construct($firstName, $lastName, $scientificName, $gender, $color) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->scientificName = $scientificName;
		$this->gender = $gender;
		$this->color = $color;
	}

	function getName() {
		return "The cow's first name is " . $this->firstName .
		"and the cow's last name is " . $this->lastName;
	}
}

class Cow extends Animal {
	function __construct($firstName, $lastName, $scientificName, $gender, $color, $moo) {
		parent::__construct($firstName, $lastName, $scientificName, $gender, $color);
		$this->moo = $moo;
	}
	function greet() {
		return $this->moo;
	}
}

class Wolf extends Animal {
	function __construct($firstName, $lastName, $scientificName, $gender, $color, $howl) {
		parent::__construct($firstName, $lastName, $scientificName, $gender, $color);
		$this->howl = $howl;
	}
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

	function __construct($firstName, $lastName, $gender, $singer, $guitarist) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->singer = $singer;
		$this->guitarist = $guitarist;
	}

	function getName() {
		return "The singer's first name is " . $this->firstName .
		"and his last name is " . $this->lastName;
	}
}

class Singer extends Person {
	function __construct($firstName, $lastName, $gender, $singer, $guitarist, $microphone) {
		parent::__construct($firstName, $lastName, $gender, $singer, $guitarist);
		$this->microphone = $microphone;
	}
	function greet() {
		return $this->microphone;
	}
}

class Guitarist extends Person {
	function __construct($firstName, $lastName, $gender, $singer, $guitarist, $guitar) {
		parent::__construct($firstName, $lastName, $gender, $singer, $guitarist);
		$this->guitar = $guitar;
	}
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
	public $power2;

	function __construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power2) {
		$this->marvelHeroName1 = $marvelHeroName1;
		$this->marvelHeroName2 = $marvelHeroName2;
		$this->movie1 = $movie1;
		$this->movie2 = $movie2;
		$this->power2 = $power2;
	}

	function getName() {
		return "Superhero 1 is the " . $this->marvelHeroName1 . ", he's from the movie" . $this->movie1 .  
		"and his power is having " . $this->power1 . " and Superhero 2 is " . $this->marvelHeroName2 . 
		", he's from the movie" . $this->movie2 . "and his power is using a " . $this->power2 . " to fight his enemy";
	}
}

class Wolverine extends SuperHero
 {
	function __construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power2, $power1) {
		parent::__construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power2);
		$this->power1 = $power1;
	}
	function getPower1()
	 {
		return $this->power1;
	}
}

class Thor extends SuperHero {
	function __construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power2) {
		parent::__construct($marvelHeroName1, $marvelHeroName2, $movie1, $movie2, $power2);
	}
	function greet() {
		return $this->power2;
	}
}

$wolverine1 = new Wolverine("Wolverine", "Thor", " 'The Wolverine' ", " 'Thor' ", "hammer", " adamantium");
echo $wolverine1->getName() . "<br />";

?>
