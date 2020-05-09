<?php

include_once './Interfaces/IPayable.php';

class Wing implements IPayable
{
    public function pay(float $total)
    {
        return ['method' => 'Wing', 'total' => $total];
    }
}