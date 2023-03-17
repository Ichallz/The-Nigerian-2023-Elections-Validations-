<?php
    $voter_age = '18';
    $voter_pvc = 'yes';
    $voter_ward = '020';

//  check if voter is above 18 years  
    if ($voter_age < 18) {
        echo "Sorry, you must be at least 18 years old for you to be eligible to vote";
    } 
//  check if voter has PVC  
    elseif ($voter_pvc != "yes") {
        echo "Sorry, you must have a PVC to be an eligible voter";
    } 
//  check if voter's ward is 020  
    elseif ($voter_ward != "020") {
        echo "Sorry, you must be a registered voter in 020 ward for you to be able to vote in ward 020";
    }
    else {
        echo "Voter eligible to vote";
    }
    
?>