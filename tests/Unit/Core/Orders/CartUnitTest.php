<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Cart;
use Core\Orders\Product;
class CartUnitTest extends TestCase
{

  public function testCart()
  {
    $cart = new Cart();
    $cart->add(new Product(
      id: '1',
      name: 'teste',
      price: 12,
      total: 1
    ));
    $cart->add(new Product(
      id: '1',
      name: 'teste',
      price: 12,
      total: 1
    ));
    $cart->add(new Product(
      id: '2',
      name: 'teste',
      price: 20,
      total: 1
    ));
    $this->assertCount(2, $cart->getItems());
    $this->assertEquals(32, $cart->total());

  }

}
