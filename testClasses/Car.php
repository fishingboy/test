<?php

namespace TestClasses;

class Car
{
    public function getWidth(): int
    {
        return 100;
    }

    public function getHeight(): int
    {
        return 200;
    }

    public function getSize()
    {
        return $this->getWidth() * $this->getHeight();
    }
}