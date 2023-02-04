<?php

// Function to Return Restaurent Name
function restaurant_type($type){
switch($type){
    case 0:
        return "Restaurent (Full Access)";
    case 1:
        return "Billing (Without KOT)";
    case 2:
        return "Customer Account Handling";
    case 3:
        return "Simple Billing";
    default:
        return "Erron in Restaurent Type";

}
}

// Function to Retrun Restaurent Type
function restaurant_permission($con, $id){
    // SELECT * FROM `restaurant` WHERE 1
    $sql = "SELECT type as restaurant_type  FROM `restaurant` WHERE restaurantid = '$id'";
        if ($result = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return  $row['restaurant_type'];
                // $this->getadmin($this->userid)
            }
        }
}
?>