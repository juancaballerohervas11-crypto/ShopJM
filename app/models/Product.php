<?php
class Product{
    private $id;
    private $name;
    private $description;
    private $price;
    private $stock;

    public function __construct($id, $name, $description, $price, $stock) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->name;
    }

    public function getDescripcion() {
        return $this->description;
    }

    public function getPrecio() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }
}
