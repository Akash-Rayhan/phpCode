<?php

    include('MarkSheet.php');

    $studentName = "Name";
    $studentId = "171743";
    $subjectName = ["electrodynamics","classical mechanics","nuclear physics"];
    $subjectCode = ["phy-3105","phy-3101","phy-3107"];
    $subjectMarks = [50,40,70];
    $subjectCredit = [3,3,3];
    $attendence = [5,5,4];

    $newStudent = new MarkSheet($studentName, $studentId);


    $newStudent->getCourseInfo($subjectCode,$subjectName,$subjectCredit,$subjectMarks);

    $newStudent->attendenceChecker($attendence);

    $newStudent->perSubjGrade();

    $newStudent->gradeGenerator();
    
    $newStudent->printMarksheet();
    
    
        
    
    
    
    

?>