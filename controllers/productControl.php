<?php
    require_once("../models/model.php");


    function setData($pdo,$name, $manufacturer, $amount, $price)
    {
        $p = new Product([
            'name'=>$name,
            'manufacturer'=>$manufacturer,
            'amount' => $amount,
            'price' => $price
        ]);

        if ($p->insertNew($pdo,$p->name, $p->manufacturer,$p->amount, $p->price))
        {
            return 1;
        }
        return 0;
    }