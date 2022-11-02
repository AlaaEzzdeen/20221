<?php 
    class Course{
        protected $cName;
        protected $cCode;
        protected $cDesc;
        protected $cGrade;

        function __construct($name,$code,$desc,$grade){
            $this->cName = $name;
            $this->cCode = $code;
            $this->cDesc = $desc;
            $this->cGrade = $grade;
        }

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

        public function isA(){
            if ($this->getCGrade()== 'A+'){
            return true;
        }
        }
        public function courseDetails(){
            if($this->isA() == true) {
            echo "<tr class=A>";
            echo "<td>".$this->getCName()."</td><td>".$this->getCCode()."</td><td>".$this->getCDesc()."</td><td>".$this->getCGrade()."</td>";
            echo "</tr>";
            }
            else {
            echo "<tr>";
            echo "<td>".$this->getCName()."</td><td>".$this->getCCode()."</td><td>".$this->getCDesc()."</td><td>".$this->getCGrade()."</td>";
            echo "</tr>";
            }
        }
}
 
    
?>