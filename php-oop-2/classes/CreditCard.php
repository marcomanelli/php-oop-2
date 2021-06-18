<?php 

    trait CreditCard{

        private $num_card;
        private $cvv;
        private $expiration_date;

         /**********************************
         * SETTER
         **********************************/
         
        public function setNumCard($_num_card){
            
            $this->num_card = $_num_card;
        }
         
        public function setCvv($_cvv){
            
            $this->cvv = $_cvv;
        }

        public function setExpirationDate($_expiration_date){
            
            $this->expiration_date = $_expiration_date;
            
       /*  public function setExpirationDate($_expiration_date){
            try{
                $this->expiration_date = $this->getExpirationDate($_expiration_date);
            }catch(Exception $e){
                echo $e->getMessage();
            } */
            
        }


        /**********************************
         * GETTER
         **********************************/

        public function getNumCard(){
            
            return $this->num_card;
        }

        public function getCvv(){
            
            return $this->cvv;
        }

        public function getExpirationDate(){
          
            return $this->expiration_date;
        }
        
        /* public function getExpirationDate($_expiration_date){
            $this->expiration_date = $_expiration_date;
            if($this->expiration_date < date("m/y")){
                throw new Exception("Attenzione! la carta è scaduta,aggiorna la tua carta");
            }else{
            return $this->expiration_date;
            }
        } */
    }

?>