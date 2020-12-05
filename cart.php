<?php

include 'database.php';
global $cart;
class cart{

    public $customerId;
    public $cartItems;

    function __construct($customerId, $cartitems){
        $this->customerId=$customerId;
        $this->cartItems[]=$cartitems;
    }
    function getCartItems()
    {
        if ($this->getCount() == 1)
        {
            $array = array($this->cartItems);
            return $array;
        }
        else {
            return $this->cartItems;
        }
    }

    function addCartItem($cartItem): void
    {
        array_push($cartItems, $cartItem);
    }
    function removeCartItem($itemID): void
    {
        for ($i=0; $i < count($cartItems); $i++){
                if($cartItems[$i]->getID() == $itemID)
                {
                    array_splice($cartItems,1 ,1);
                }
        }
    }

    function getCustomerId()
    {
        return $this->customerId;
    }

    function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }
    function exists($customerID)
    {
        if ($this->customerId = $customerID)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function getCount()
    {
        return count($this->cartItems);
    }


    /*public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }*/



}
