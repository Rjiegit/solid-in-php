<?php

interface Employee
{
    public function work(): void;
}

class Human implements Employee
{
    public function work(): void
    {

    }
}

class Robot implements Employee
{
    public function work(): void
    {

    }
}

class Manager
{
    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function manage(): void
    {
        $this->employee->work();
    }
}