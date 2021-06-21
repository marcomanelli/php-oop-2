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
            try{
                $this->expiration_date = $this->calcExpirationDate($_expiration_date);
            }catch(Exception $e){
                echo $e->getMessage();
            }
            
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
        //creo una funzione per confrontare la data di scadenza della carta di credito
        public function calcExpirationDate($_expiration_date){
            $_expiration_date = date_create_from_format("m/y","$_expiration_date"); // qui dichiaro che la stringa della data di scadenza della carta diventa un dato "date" dicendogli che il primo parametro è il mese e il secondo è l'anno
            $this->expiration_date = date_format($_expiration_date,"y/m");//qui riformatto l'ordine e metto prima l'anno del mese,in modo che quando farà il confronto lo farà prima in base all'anno
            if($this->expiration_date < strftime("%y/%m")){ //grazie al metodo "strftime" vado a prendere la data attuale dandogli le regole all'interno
                throw new Exception("Attenzione! " . $this->name . " " . $this->lastname ." la tua carta è scaduta, aggiorna la tua carta.");
            }else{
                $this->expiration_date = date_format($_expiration_date,"m/y");// qui riformatto la data in modo che se non ci sono errori sarà come l'originale
                return $this->getExpirationDate();
            }
        }

        public function getExpirationDate(){

            return $this->expiration_date;
            
        }
    }

?>