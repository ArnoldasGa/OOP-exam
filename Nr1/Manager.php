<?php

class Manager extends Employee
{
    const EMPLOYEE_TYPE = 2;
    protected float $owertimeHours;

    public function __construct(string $name, float $salary, float $owertimeHours )
    {
        $this->owertimeHours = $owertimeHours;
        parent::__construct($name, $salary);
    }

    public function calculateSalary()
    {
        return $this->salary + ($this->salary / 40 *  $this->owertimeHours) * 2;
    }
}