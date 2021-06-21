<?php 
    require_once __DIR__ ."/User.php";

    require_once __DIR__ . "/CreditCard.php";

    class Premium extends user{
        use CreditCard;
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
            return "Nome: " . $this->name .", cognome:  " . $this->lastname .", email: " .$this->email .", numero carta: ". $this->num_card .", cvv: " . $this->cvv .", scadenza carta : ". $this->getExpirationDate() .", carrello : " . $this->getCart() . ", numero carta fedeltà : " . $this->getFidelityCard() . ", punti premium: " . $this->getPointsPremium();
         }
    }

?>