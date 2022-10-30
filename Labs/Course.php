<?php 
    class Course{
        protected $cName;
        protected $cCode;
        protected $cDesc;
        protected $cGrade;

        public function setCName($cName){
            $this->cName = $cName;
        }
        public function setCCode($cCode){
            $this->cCode = $cCode;
        }
        public function setCDesc($cDesc){
            $this->cDesc = $cDesc;
        }
        public function setCGrade($cGrade){
            $this->cGrade = $cGrade;
        }

        public function getCName(){
            return $this->cName;
        }
        public function getCCode(){
            return $this->cCode;
        }
        public function getCDesc(){
            return $this->cDesc;
        }
        public function getCGrade(){
            return $this->cGrade;
        }

        public function isA($getCGrade){
            if ($this->getCGrade() == "A+"){
            return true;
        } else return false;
        }

        }
 
    
?>