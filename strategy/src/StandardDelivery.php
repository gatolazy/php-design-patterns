<?php

namespace GatoLazy\Strategy;

use GatoLazy\Strategy\Product;
use GatoLazy\Strategy\DeliveryStrategy;


class StandardDelivery implements DeliveryStrategy
{
    const BOOK_PRODUCT_DELIVERY_PRICE = 2.70;
    const GENERIC_PRODUCT_DELIVERY_PRICE = 3.99;
    const LARGE_PRODUCT_DELIVERY_PRICE = 6.99;

    public function canApply(Product $product)
    {
    }

    public function getAmount(Product $product): float
    {
        if ($product->getType() === Product::TYPE_LIBRO) {
            return self::BOOK_PRODUCT_DELIVERY_PRICE;
        }

        if ($product->getSize() === Product::SIZE_L) {
            return self::LARGE_PRODUCT_DELIVERY_PRICE;
        }

        return self::GENERIC_PRODUCT_DELIVERY_PRICE;
    }
}