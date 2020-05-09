<?php

include_once './Interfaces/IPayable.php';

class Product
{
    public string $name;
    public IPayable $method;

    private float $price;
    private int $quantity;
    private $total;

    public function __construct(string $name, float $price, int $quantity, IPayable $method)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->method = $method;

        $this->total = $this->price * $this->quantity;
    }

    public function pay()
    {
        return $this->method->pay($this->total);
    }

    /**
     * @return float|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

}