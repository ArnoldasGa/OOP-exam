<?php

class Employee
{
    const EMPLOYEE_TYPE = 1;
    public string $name;
    protected float $salary;
    protected int $experience;
    private int $id;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = rand();
    }

    public function getExperience() : int
    {
        return $this->experience;
    }

    public function setExperience($experience) : void
    {
        $this->experience = $experience;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function calculateSalary() : float
    {
        return $this->salary;
    }

    public function __toString() : string
    {
        return "Darbuotojas " .  $this->id . ": " . $this->name . " - " . $this->salary . "EUR";
    }

    public function __clone() : void
    {
        $this->id = 0;
    }

    public static function getTypeDescription() : string
    {
        return "Darbuotojo tipas " . static::EMPLOYEE_TYPE;
    }
}