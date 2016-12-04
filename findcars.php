<?php
    echo "Pickup Date is :";
    echo $_POST['pickup'];
    echo "<br />\n";
    
    echo "For No of Days :";
    echo $_POST['noofdays'];
    echo "<br />\n";
    
    $date = strtotime("+".$_POST['noofdays']." days", strtotime($_POST['pickup']));
    echo "Return Date is :";
    echo date("m/d/Y", $date);
    echo "<br />\n";
    
    echo "Location selected is:";
    echo $_POST['loc'];
  
?>