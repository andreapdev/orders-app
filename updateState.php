<?php
    require 'connect.php';
    
    if(isset($_POST['id'])){
        $id= intval($_POST['id']);
        updateState($success, $link, $id);    
    }

    function updateState($success, $link, $id){
        
        if (!$success) {
            echo "Unable to Connect database: " . mysqli_connect_error();
        }

        $update_state = intval($_POST['update_state']);
        $query="UPDATE orders 
                SET current_state = $update_state
                WHERE id_order = $id;";
        $exec = mysqli_query($link, $query) or die(msqli_error($link));
        
        if($exec){
            echo "data was updated" ; 
        }else{
            $msg= "Error: " . $query  . mysqli_error($success);
            echo $msg; 
        }
    }
 
?>