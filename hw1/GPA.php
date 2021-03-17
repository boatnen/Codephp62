<?php
function GPA($score)
{
    $gpa = "";
   // >79 = A
    //>69 <80 = B
    //>59 <70 = c
    //>49 <60 = D
    //<50 = F
    switch ($score) {
        case $score > 79:
            $gpa = "A";
            break;
            case $score > 70:
                $gpa = "B";
                break;
                case $score > 60:
                    $gpa = "D";
                    break;
                    case $score > 50:
                        $gpa = "F";
                        break;
            
        default:
        # code..  
        break;
    }
    return $gpa;
    
