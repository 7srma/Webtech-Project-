<?php
    require_once('../model/product-info-model.php'); 
    require_once('message-controller.php'); 
    if(!isset($_COOKIE['flag'])){
        popup("Error!","You need to sign-in in order to access this page.");
    }
    $id=$_GET['pid'];
    

     if(approveProduct($id)){
        popup("Success!","Product has been approved successfully");
     }else{
        popup("Error!", "Could not approve product. Please try again."); 
     }

?>