<?php
class Producto {
    private string $nombre;
    private float $precio;
    private int $cantidad;
    private int $id;


    public function __construct(string $nombre, float $precio, int $cantidad, int $id){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->id = $id;
    }

    //Metodos getters
    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getId(){
        return $this->id;
    }

    //Metodos setters
    public function setNombre(string $nombre):bool{
        if($nombre = ""){
            return "No se puede meter un nombre a vacio";
        }else{
            $this->nombre = $nombre;
        }
    }

    public function setCantidad(float $cantidad):bool{
        if($cantidad > 0){
            $this->cantidad = $cantidad;
        }else{
            return "No se puede añadir cantidades menores que 0 ";
        }
    }

    public function setId(int $id){
        if($id > 0){
            $this->id = $id;
        }else{
            return "No se pueden añadir id menores que 0 ";
        }
    }

    public function setPrecio(float $precio){
        if($precio > 0){
            $this->precio = $precio;
        }else{
            return "No se pueden añadir precios menores que 0";
        }
    }

    //Metodo para devolver el precio total
    public function getPrecioTotal(){
        return $this->precio * $this->cantidad;
    }
}
