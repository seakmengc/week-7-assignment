<?php

include_once './Interfaces/IPayable.php';

class PiPay implements IPayable
{
    public function pay(float $total)
    {
        return ['method' => 'PiPay', 'total' => $total];
    }
}