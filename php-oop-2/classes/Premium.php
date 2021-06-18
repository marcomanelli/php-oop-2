<?php 
    require_once __DIR__ ."/User.php";

    class Premium extends user{

        private $fidelity_card;
        private $points_premium;

        /**********************************
         * SETTER
         **********************************/

        public function setFidelityCard($_fidelity_card){
            
            $this->fidelity_card = $_fidelity_card;
        }

        public function setPointsPremium($_points_premium){
            
            $this->points_premium = $_points_premium;
        }

        /**********************************
         * GETTER
         **********************************/

         
        public function getFidelityCard(){
            
            return $this->fidelity_card;
        }

        public function getPointsPremium(){
            
            return $this->points_premium;
        }

        public function getInfoPremium(){
            return "Nome: " . $this->name .", cognome:  " . $this->lastname .", email: " .$this->email .", carrello : " . $this->getCart() . ", numero carta fedeltà : " . $this->getFidelityCard() . ", punti premium: " . $this->getPointsPremium();
         }
    }

?>