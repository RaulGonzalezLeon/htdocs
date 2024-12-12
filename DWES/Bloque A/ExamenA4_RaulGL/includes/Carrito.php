<?php
require_once 'includes/Producto.php';
class Carrito {
    private array $productos;
    private float $impuestos;

    public function __construct(array $productos = [], float $impuestos = 0.21){
        $this->productos = $productos;
        $this->impuestos = $impuestos;
    }


    public function agregarProducto(Producto $productos){
        if (in_array($productos, $this->productos, true)) {
            echo "El producto ya esta añadido";
            return;
        }
        $this->productos[] = $productos;

    }

    public function calcularSubtotal(Producto $productos){
        for($i = 0; $i > 10; $i++){
            $this->getPrecioTotal();
        }
    }


    public function calcularTotal(Producto $productos){
        return $prouctos->getPrecioTotal() * $impuestos;
    }


    public function muestraCarrito(): string {
        $html = '';
        foreach ($this->productos as $producto) {
            $html .= "<tr>
                        <td>{$producto->getId()}</td>
                        <td>{$producto->getNombre()}</td>
                        <td>{$producto->getPrecio()}</td>
                        <td>{$producto->getCantidad()}</td>
                        <td>{$producto->getPrecioTotal()}</td>
                    </tr>";
        }
        return $html;
    }















}