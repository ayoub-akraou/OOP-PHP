<?php

class Human
{
   private $name;
   private $age;
   private $gender;

   public function __construct($name, $age, $gender)
   {
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
   }

   public function introduce()
   {
      return "Je suis {$this->name}, j'ai {$this->age} ans, et je suis un/une {$this->gender}.";
   }
}

class Patient extends Human
{
   private $illness;

   public function __construct($name, $age, $gender, $illness)
   {
      parent::__construct($name, $age, $gender);
      $this->illness = $illness;
   }

   public function introduce()
   {
      return parent::introduce() . " Je suis un patient, et je souffre de {$this->illness}.";
   }
}

class Doctor extends Human
{
   private $specialty;

   public function __construct($name, $age, $gender, $specialty)
   {
      parent::__construct($name, $age, $gender);
      $this->specialty = $specialty;
   }

   public function introduce()
   {
      return parent::introduce() . " Je suis un docteur spécialisé en {$this->specialty}.";
   }
}

$patient = new Patient("karim ismaili", 34, "homme", "diabète");
$doctor = new Doctor("Ayoub akraou", 23, "homme", "cardiologie");

echo $patient->introduce() . '<br>';
echo $doctor->introduce() . '<br>';
