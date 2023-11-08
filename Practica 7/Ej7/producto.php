<?php
     class Producto {
        public $id;
        public $producto;
        public $precio;
     

        
        function setId($id){
                $this -> id = $id;
        }
        function getId(){
            return  $this -> id;
        }
        function setProducto($producto){
            $this -> producto = $producto;
        }
        function getProducto(){
            return  $this -> producto;
        }
        function setPrecio($precio){
            $this -> precio = $precio;
        }
        function getPrecio(){
            return  $this -> precio;
        }

        

        

    }

?>
