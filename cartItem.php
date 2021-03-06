<?php
include 'database.php';

class cartItem{

    public $itemId;
    public $customerId;
    public $quantity;
    public $size;

    public function __construct($itemId, $customerId, $quantity, $size){
        $this->itemId=$itemId;
        $this->customerId=$customerId;
        $this->quantity=$quantity;
        $this->size=$size;
    }
    public function getID()
    {
            return $this->itemId;
    }

    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return getRetailCost($this->itemId) * $this->quantity;


    }
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        $this->size = $size;
    }




}