<?php

namespace GatoLazy\Strategy;

use GatoLazy\Strategy\Product;
use GatoLazy\Strategy\DeliveryStrategy;


class FreeDelivery implements DeliveryStrategy
{
    const LOWEST_PRICE = 35.00;

    public function canApply(Product $product)
    {
        if ($product->getPrice() <= self::LOWEST_PRICE) {
            throw new \Exception("The Price must be a least: " . self::LOWEST_PRICE);
        }
    }

    public function getAmount(Product $product): float
    {
        $this->canApply($product);
        return 0.0;
    }
}