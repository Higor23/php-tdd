<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Product;

class ProductUnitTest extends TestCase
{

  public function testCalc()
  {
    $product = new Product(
      id: '1',
      name: 'prodx',
      price: 10,
      total: 12
    );

    $this->assertEquals('prodx', $product->getName());
    $this->assertEquals(10, $product->getPrice());
    $this->assertEquals(1, $product->getId());

    // Verifica se o cálculo está correto;
    $this->assertEquals(120, $product->total());
  }

  public function testCalcTaxTest()
  {
    $product = new Product(
      id: '1',
      name: 'prodx',
      price: 10,
      total: 12
    );

    // Verifica se o cálculo está correto;
    $this->assertEquals(132, $product->totalTax10(0.10));
  }
}
