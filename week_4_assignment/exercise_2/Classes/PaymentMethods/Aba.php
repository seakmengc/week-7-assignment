<?php

include_once './Interfaces/IPayable.php';

class Aba implements IPayable
{
    public function pay(float $total)
    {
        return ['method' => 'ABA', 'total' => $total];
    }
}