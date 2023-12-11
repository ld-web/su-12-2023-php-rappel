<?php

require_once __DIR__ . "/Product.php";

final class ProductRect extends Product
{
    public function __construct(
        string $name,
        float $priceVatFree,
        private int $width,
        private int $height
    ) {
        parent::__construct($name, $priceVatFree);
    }

    public function getSurface(): float
    {
        return $this->width * $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
    public function setWidth(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
    public function setHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }
}
