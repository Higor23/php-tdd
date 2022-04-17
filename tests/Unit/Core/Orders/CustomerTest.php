<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
  public function testAttributes()
  {
    // instacia a classe
    $customer = new Customer(
      name: "Higor Lemos"
    );

    #Verifica se o retorno do nome atribuído é igual ao fornecido no teste 
    $this->assertEquals('Higor Lemos', $customer->getName());

    // chama o método changeName
    $customer->changeName(
      name: "new name"
    );

    #Verifica se o retorno do nome atribuído é igual ao fornecido no teste 
    $this->assertEquals('new name', $customer->getName());

    $this->assertTrue(true);
  }
}