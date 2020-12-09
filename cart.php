<?php

include 'database.php';
class cart{

    public $customerId;
    public $cartItems;

    function __construct($customerId,array $cartitems){
        $this->customerId=$customerId;
        $this->cartItems=$cartitems;
    }
    function getCartItems()
    {
        if (is_array($this->cartItems) == false)
        {
            return array($this->cartItems);
        }
        else {
            return $this->cartItems;
        }
    }

    function addCartItem($cartItem): void
    {
        array_push($this->cartItems, $cartItem);
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
    function removeItem($cartItem)
    {
                array_splice($this->cartItems, $cartItem, 1);

    }   


}
