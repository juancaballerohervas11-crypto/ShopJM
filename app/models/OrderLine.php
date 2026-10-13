<?php
class OrderLine{
    private $order_id;
    private $product_id;
    private $quantity;
    private $price;

    public function __construct($order_id, $product_id, $quantity, $price) {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getId() {
        return $this->product_id;
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getOrder() {
        return $this->order_id;
    }
}
