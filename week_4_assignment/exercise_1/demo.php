<?php



class Person 
{
	public function walk()
	{
		return "Person is walking.";
	}
}



trait CanWalk
{
	public function walk()
	{
		return "Object is walking.";
	}
}



trait HasSchool
{
	public $school;

	public function enroll()
	{
		echo "I enroll at " . $this->school . ".";
	}

	public function leave()
	{
		echo "I left " . $this->school . " school.";
	}
}

// class Student extends Person 
// {
// 	use CanWalk;
// }

// $student = new Student();

// echo $student->walk();

class Student extends Person 
{
	use HasSchool;

	public function __construct($school)
	{
		$this->school = $school;
	}
}

$student = new Student("PIU");

echo $student->enroll() . "\n";
echo $student->leave() . "\n";