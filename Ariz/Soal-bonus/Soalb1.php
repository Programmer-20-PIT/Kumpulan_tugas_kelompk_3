<?php
class Product{
    public $name;
    public $price;
    public $quantity;
  
    function __construct($name,$price,$quantity){
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;}
  
    function calculateTotal(){
      $total = $this->price * $this->quantity;
      return $total;}
    function __destruct(){
      echo " Total harga:
  Name\t\tQuantity\t\tPrice\t\tTotal
  \n$this->name\t\t$this->quantity\t\t$this->price\t\t{$this->calculateTotal()}";
}}

$produk = new Product("Garuda Rosa", "1500",15);
?>