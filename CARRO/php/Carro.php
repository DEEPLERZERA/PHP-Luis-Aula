<?php
    class Carro{   //Gerando classe
        private $name;      //Atributos
        private $key = false;
        public function getKey(){ //Métodos
            return $this->key;
        }  
        public function setKey($key){
            $this->key = $key;
        }         
        public function getName()
        {
                return $this->name;
        }       
        public function setName($name): self
        {
                $this->name = $name;
                return $this;
        }
        public function inserirChave(){
            $this->setKey($this->getKey()+true);     

        }
        public function retirarChave(){
            $this->setKey(false);
           
        }
        
        public function ligarCarro(){
            if($this->getKey()==true){
            print('<br>Estou ligado bruuummmm<br>');
        }
            else{
                print('<br>Estou desligado porque não inseriu a chave');
            }
    }
        public function desligarCarro(){
            if($this->getKey()==true){
                
                print('<br>Não posso desligar retire a chave<br>');
            }
            else{
                print('<br>Já desliguei<br>');
            }
        }
        public function status(){
            print("O carro é {$this->getName()}");
        }
    }
?>