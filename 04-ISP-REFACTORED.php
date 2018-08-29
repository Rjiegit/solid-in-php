<?php

interface Workable
{
    public function work(): void;
}

interface Eatable
{
    public function eat(): void;
}

class Human implements Workable, Eatable
{
    public function work(): void
    {

    }

    public function eat(): void
    {

    }
}

class Robot implements Workable
{
    public function work(): void
    {

    }
}