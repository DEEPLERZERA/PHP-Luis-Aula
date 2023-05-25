<?php 
    Class Calc {
        private $a;
        
        private $b;
        private $c;


         public function __construct(float $a, float $b) {
                $this->a = $a;
                $this->b = $b;
            }
        

        public function somar(float $a, float $b) {
             $this->setC($this->getA()+$this->getB());
             print("O valor da soma de C é = {$this->getC()}<br>");
             return $this;
        }

		public function subtrair(float $a, float $b) {
			$this->setC($this->getA()-$this->getB());
			print("O valor da subtração de C é = {$this->getC()}<br>");
            return $this;
		}

		public function multiplicacao(float $a, float $b) {
			$this->setC($this->getA()*$this->getB());
			print("O valor da multiplicação de C é = {$this->getC()}<br>");
            return $this;
		}

		public function divisao(float $a, float $b) {
			$this->setC($this->getA()/$this->getB());
			print("O valor da divisão de C é = {$this->getC()}");
            return $this;
		}
    

       
        public function getC() {
            return $this -> c;
        }

        public function setC($c) {
            $this-> c = $c;
        }

    
	/**
	 * @return mixed
	 */
	public function getA() {
		return $this->a;
	}
	
	/**
	 * @param mixed $a 
	 * @return self
	 */
	public function setA($a): self {
		$this->a = $a;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getB() {
		return $this->b;
	}
	
	/**
	 * @param mixed $b 
	 * @return self
	 */
	public function setB($b): self {
		$this->b = $b;
		return $this;
	}
}

?>