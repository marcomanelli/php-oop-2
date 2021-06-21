<?php 

    require_once __DIR__ . "/CreditCard.php";

    require_once __DIR__ . "/../showcase.php";

    class User{

        use creditCard;
        public $name;
        public $lastname;
        public $email;
        private $address;
        private $password;
        private $phone_number;
        public $cart;

        public function __construct($_name,$_lastname)
        {
            $this->name = $_name;
            $this->lastname = $_lastname;
        }
        /**********************************
         * SETTER
         **********************************/
         
        public function setAddress($_address){
            
            $this->address = $_address;
        }
         
        public function setPassword($_password){
            
            $this->password = $_password;
        }

        public function setPhoneNumber($_phone_number){
            
            $this->phone_number = $_phone_number;
        }

        public function setCart(...$products_string){ //qui restituisco tot elemnti all'interno della funziona che comporanno un array
            
            $this->cart = $products_string;
        }


        /**********************************
         * GETTER
         **********************************/

        public function getAddress(){
            
            return $this->address;
        }
        public function getPassword(){
            
            return $this->password;
        }

        public function getPhoneNumber(){
            
            return $this->phone_number;
        }
        public function getCart(){
            $this->cart = implode(",", $this->cart); // qui scompongo l'array e lo trasformo in stringa
            return $this->cart;
        }
        public function getInfoUser(){
           return "Nome: " . $this->name .", cognome:  " . $this->lastname .", email: " .$this->email .", numero carta: ". $this->num_card .", cvv: " . $this->cvv .", scadenza carta : ". $this->getExpirationDate() .", carrello : " . $this->getCart();
        }

    }

