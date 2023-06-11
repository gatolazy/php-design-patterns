<?php

namespace GatoLazy\Strategy;

// Strategy
interface DeliveryStrategy
{
    public function canApply(Product $product);
    public function getAmount(Product $product): float;
}