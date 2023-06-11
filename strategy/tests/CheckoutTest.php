<?php

use GatoLazy\Strategy\Checkout;
use GatoLazy\Strategy\FreeDelivery;
use GatoLazy\Strategy\Product;
use GatoLazy\Strategy\StandardDelivery;
use \PHPUnit\Framework\TestCase;

final class CheckoutTest extends TestCase
{
    public function testFreeDeliveryOnLowestAmount(): void
    {
        $product = new Product(
            37,
            'Ball of Nothing',
            Product::TYPE_ELETTRODOMESTICO, Product::SIZE_S
        );

        $checkout = new Checkout(new StandardDelivery());

        // i want use free delivery
        $checkout->changeDeliveryStrategy(new FreeDelivery());

        $this->assertEquals(
            0,
            $checkout->getDeliveryAmount($product),
            'Delivery Amount should be equals to 0'
        );
    }

    public function testStandardDeliveryOnLargeSizeBook(): void
    {
        $product = new Product(
            37,
            'The secrets of delivery',
            Product::TYPE_LIBRO, Product::SIZE_L
        );

        $checkout = new Checkout(new StandardDelivery());

        $this->assertEquals(
            2.70,
            $checkout->getDeliveryAmount($product),
            'Delivery Amount should be equals to 2.70'
        );
    }

    public function testStandardDeliveryOnLargeSizeGenericProduct(): void
    {
        $product = new Product(
            37,
            'The secrets of delivery',
            Product::TYPE_ABIGLIAMENTO, Product::SIZE_L
        );

        $checkout = new Checkout(new StandardDelivery());

        $this->assertEquals(
            6.99,
            $checkout->getDeliveryAmount($product),
            'Delivery Amount should be equals to 6.99'
        );
    }

    public function testExceptionOnFreeDeliveryToWrongPrice(): void
    {
        $product = new Product(
            34,
            'The secrets of delivery',
            Product::TYPE_ABIGLIAMENTO,
            Product::SIZE_L
        );

        $checkout = new Checkout(new FreeDelivery());

        $this->expectException(Exception::class);

        $checkout->getDeliveryAmount($product);
    }
}