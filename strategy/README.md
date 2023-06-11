# Strategy



## Nome
   
Strategy


## Problema
   
Quando esistono più algoritmi che risolvono lo stesso problema lo Strategy pattern permette di scegliere il migliore da usare in base alle necessità del momento. 


## Soluzione
   
Lo Strategy pattern permette di prendere una classe che fa qualcosa di specifico
in molti modi diversi ed estrapolarne gli algoritmi incapsulandoli in
diverse classi che chiameremo strategie.

### Soggetti

Nella implementazione della soluzione, dello Strategy pattern, entrano in gioco i seguenti soggetti:

* **Strategy**: si tratta dell'interfaccia che ogni algoritmo deve implementare

* **StrategyConcrete**: si tratta della classe concreta che implementerà la **Strategy**, questa classe incapsula uno specifico algoritmo e di fatto rappresenta una delle strategie per risolvere uno specifico problema

* **Context**: si tratta della classe che fa qualcosa di specifico, che mantiene un riferimento a una istanza della **Strategy** a cui puo assegnare runtime il valore di diverse **StrategyConcrete** in modo da usare l'algoritmo migliore in base al momento.


### Esempio semplificato

Gestire i costi di spedizione di un ecommerce può diventare molto complicato, nel nostro esempio ne avremo di tre tipi:

* gratuita: costo pari a 0, applicabile solo per prodotti con prezzo di almeno 35 €

* standard: 
    * 2.70 € per prodotti come libri, cd, vinili
    * 3.99 € altri tipi di prodotto, esclusi gli articoli ingombranti
    * 6.99 € per gli articoli ingombranti

Le diverse strategie di consegna generano costi diversi, ma avranno anche tempi di consegna diversi che in questo esempio non prenderemo in considerazione.


````php
<?php

// Strategy
interface DeliveryStrategy
{
    public function canApply(Product $product);
    public function getAmount(Product $product): float;
}

// StrategyConcrete
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

// StrategyConcrete
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


````

````php
<?php

// Client
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

// i want use free delivery
$checkout->changeDeliveryStrategy(new FreeDelivery());

$this->assertEquals(
    0, $checkout->getDeliveryAmount($product),
    'Delivery Amount should be equals to 0'
);
````




## Conseguenze 
   
TODO
