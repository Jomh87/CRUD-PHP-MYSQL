<?php
class shoppingListElement{
    private int $idProduct;
    private string $name;
    private string $categoria;
    private float $quantity;
    private float $price;

    public function __construct(int $idProduct, string $name,string $categoria, float $quantity, float $price){
        $this->idProduct=$idProduct;
        $this->name=$name;
        $this->categoria=$categoria;
        $this->quantity=$quantity;
        $this->price=$price;
    }

    public function getIdProduct(){
        return $this->idProduct;
    }

    public function getName(){
        return $this->name;
    }

    public function getCategoria()    {
        return $this->categoria;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setIdProduct(int $idProduct){
        $this->idProduct=$idProduct;
    }

    public function setName(string $name){
        $this->name=$name;
    }

    public function setCategoria(string $categoria)
    {
        $this->categoria=$categoria;
    }

    public function setQuantity(float $quantity){
        $this->quantity=$quantity;
    }

    public function setPrice(float $price){
        $this->price=$price;
    }
    
}

?>