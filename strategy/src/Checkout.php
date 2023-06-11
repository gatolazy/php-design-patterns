<?php

namespace GatoLazy\Strategy;

use GatoLazy\Strategy\DeliveryStrategy;

// Context
class Checkout
{
    private DeliveryStrategy $deliveryStrategy;

    public function __construct(DeliveryStrategy $deliveryStrategy)
    {
        $this->deliveryStrategy = $deliveryStrategy;
    }

    public function changeDeliveryStrategy(DeliveryStrategy $deliveryStrategy)
    {
        $this->deliveryStrategy = $deliveryStrategy;
    }

    public function getDeliveryAmount(Product $product): float
    {
        return $this->deliveryStrategy->getAmount($product);
    }

}