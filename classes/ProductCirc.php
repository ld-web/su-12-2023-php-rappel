<?php

require_once __DIR__ . '/Product.php';

class ProductCirc extends Product
{
    private int $diameter;

    public function getDiameter(): int
    {
        return $this->diameter;
    }
    public function setDiameter(int $diameter): self
    {
        $this->diameter = $diameter;
        return $this;
    }
}
