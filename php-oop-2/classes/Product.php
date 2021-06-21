<?php 

    class product {

        public $name;
        public $ean;
        public $price;
        public $description;

        public function getInfoProduct(){
            
            return "Nome Prodotto : " . $this->name .", ean: " . $this->ean .", prezzo: " . $this->price ."€, descrizione: " . $this->description;
    
        }
    }

?>