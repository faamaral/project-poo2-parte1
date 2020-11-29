<?php

class Product{
    public $name;
    public $manufacturer;
    public $amount;
    public $price;

    function __construct($arg = array())
    {
        $this->name = $arg['name'];
        $this->manufacturer = $arg['manufacturer'];
        $this->amount = $arg['amount'];
        $this->price = $arg['price'];
    }

    public function showAll($pdo)
    {
        $query = $pdo->query("SELECT * FROM product");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

