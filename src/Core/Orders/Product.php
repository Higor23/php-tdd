<?php

namespace Core\Orders;

class Product{
  public function __construct(
    protected string $id = '',
    protected string $name,
    protected float $price,
    protected int $total
  ){}

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function total(): float
  {
    return $this->price * $this->total;
  }

  public function totalTax10(float $tax): float
  {
    $price = $this->price * $this->total;
    $total = $price * $tax + $price;
    return $total;
  }
}