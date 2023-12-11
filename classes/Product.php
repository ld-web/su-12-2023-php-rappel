<?php

class Product
{
    public function __construct(
        protected string $name,
        protected float $priceVatFree
    ) {
    }

    public function getFullPrice(float $taxRate): float
    {
        if ($taxRate >= 1) {
            throw new InvalidArgumentException('Le taux doit être entre 0 et 1');
        }

        return $this->priceVatFree * (1 + $taxRate);
    }

    public function setName(string $name): void
    {
        if ($name === "") {
            throw new InvalidArgumentException('Le name est obligatoire');
        }

        $this->name = $name;
    }

    public function getPriceVatFree(): float
    {
        return $this->priceVatFree;
    }
    public function setPriceVatFree($priceVatFree): self
    {
        $this->priceVatFree = $priceVatFree;
        return $this;
    }
}