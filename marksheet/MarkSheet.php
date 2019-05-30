<?php



class MarkSheet{

    

    public $name;
    public $id;
    public $averageGrade;
    public $subjectMarks;
    public $subjectCredit;
    public $subjectCode;
    public $subjectName;
    public $totalCredits;
    public $totalGrade ;
    public $perSubjGrade;



    public function __construct($name,$id){

        $this->name = $name;
        $this->id = $id;
        
    }

    
    
    public function getCourseInfo($subjectCode,$subjectName,$subjectCredit,$subjectMarks){
        $this->subjectName = $subjectName;
        $this->subjectCode = $subjectCode;
        $this->subjectCredit = $subjectCredit;
        $this->subjectMarks = $subjectMarks;

        $this->totalCredits = 0;
        $this->totalGrade = 0;
        $this->perSubjGrade = [];
    }
        

    public function attendenceChecker($attendence){
        $this->attendence = $attendence;
        
        for($i=0;$i<count($this->attendence);$i++){
            if($this->attendence[$i] < 5){
                $this->subjectMarks[$i] = 0;
            }
        }
                    
    }

    public function perSubjGrade(){
        for($i=0; $i<count($this->subjectMarks); $i++){
            if($this->subjectMarks[$i] >= 80){
                $this->perSubjGrade[] =4;
            }
            else if($this->subjectMarks[$i]<80 && $this->subjectMarks[$i] >=75 ){
                $this->perSubjGrade[] =3.75;
            }
            else if($this->subjectMarks[$i]<75 && $this->subjectMarks[$i] >=70){
                $this->perSubjGrade[] =3.5;
            }
            else if($this->subjectMarks[$i]<70 && $this->subjectMarks[$i] >=65){
                $this->perSubjGrade[] =3.25;
            }
            else if($this->subjectMarks[$i]<65 && $this->subjectMarks[$i] >=60){
                $this->perSubjGrade[] =3.00;
            }
            else if($this->subjectMarks[$i]<60 && $this->subjectMarks[$i] >=55){
                $this->perSubjGrade[] =2.75;
            }
            else if($this->subjectMarks[$i]<55 && $this->subjectMarks[$i] >=50){
                $this->perSubjGrade[] =2.5;
            }
            else if($this->subjectMarks[$i]<50 && $this->subjectMarks[$i] >=45){
                $this->perSubjGrade[] =2.25;
            }
            else if($this->subjectMarks[$i]<45 && $this->subjectMarks[$i] >=40){
                $this->perSubjGrade[] =2.00;
            }
            else{
                $this->perSubjGrade[] =0;
            }

        }
       
    }

    public function gradeGenerator(){

        for($i=0; $i<count($this->perSubjGrade);$i++){
            if($this->perSubjGrade[$i] == 0){
            
                $this->subjectCredit[$i] = 0;
            
            }
            
        }
        
        for($i=0; $i< count($this->subjectCredit);$i++){
            $this->totalGrade+= $this->perSubjGrade[$i] * $this->subjectCredit[$i];
            $this->totalCredits += $this->subjectCredit[$i];
        }
        $this->averageGrade = $this->totalGrade/$this->totalCredits ;

    }

   
   

    public function printMarksheet(){

        echo $this->name ."\t".$this->id."\n";

        for($i=0; $i<count($this->subjectCode);$i++){
            echo $this->subjectCode[$i] ."\t".$this->subjectName[$i]."\t".$this->perSubjGrade[$i]."\n";
        }
        echo "CGPA ".$this->averageGrade; 
    }
}




?>