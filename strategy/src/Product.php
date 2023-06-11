<?php

namespace GatoLazy\Strategy;

final class Product
{
    const TYPE_LIBRO = 'LIBRO';
    const TYPE_ABIGLIAMENTO = 'ABIGLIAMENTO';
    const TYPE_ELETTRODOMESTICO = 'ELETTRODOMESTICO';

    const SIZE_S = 'SMALL';
    const SIZE_M = 'MEDIUM';
    const SIZE_L = 'LARGE';

    private float $price;
    private string $name;
    private string $type;
    private string $size;


    public function __construct(
        float $price,
        string $name,
        string $type,
        string $size
    ) {
        if ($price < 0) {
            throw new \InvalidArgumentException("Price should be a positive value: {$price}.");
        }

        if (!in_array($type, $this->getAvailableCurrencies())) {
            throw new \InvalidArgumentException("Type should be a valid one: {$type}.");
        }

        if (!in_array($size, $this->getAvailableSize())) {
            throw new \InvalidArgumentException("Size should be a valid one: {$size}.");
        }

        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getSize(): string
    {
        return $this->size;
    }


    public function getAvailableCurrencies(): array
    {
        return [
            self::TYPE_LIBRO,
            self::TYPE_ABIGLIAMENTO,
            self::TYPE_ELETTRODOMESTICO
        ];
    }


    public function getAvailableSize(): array
    {
        return [
            self::SIZE_S,
            self::SIZE_M,
            self::SIZE_L,
        ];
    }
}