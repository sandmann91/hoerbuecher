<?php require_once('./../../../01_init_session_only.php');



class myDt extends Dt {

    public function editCustomColumn($row, $key, $value, $default) {
        return $default;
    }   

    public function editCustomColumnAfter($row, $key, $value, $default) {
        return $default;
    }  
}


// Get Variable übergeben
$dt = new myDt($_POST , "hoerbuecher");

// Verarbeiten
$dt->process();

// Output
$dt->output();

?>