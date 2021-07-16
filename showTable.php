<?php
    require_once 'connect.php';
    $sql = include ('queryString.php');

    $result = mysqli_query($link, $sql) or die(msqli_error($link));

    echo "<table class='table'>";
    echo "<tr class= 'row'>";
    echo "<th class='cell'>" . "ID" . "</th>";
    echo "<th class='cell'>" . "Fecha" . "</th>";
    echo "<th class='cell'>" . "Nombre" . "</th>";
    echo "<th class='cell'>" . "Dirección" . "</th>";
    echo "<th class='cell'>" . "País" . "</th>";
    echo "<th class='cell'>" . "Productos" . "</th>";
    echo "<th class='cell'>" . "Estado" . "</th>";
    echo"</tr>";

    while($row=mysqli_fetch_array($result)){
        if(!empty($_GET)){
            $by_country = $_GET['by_country'];
            $by_state = $_GET['by_state'];

            if(!empty($by_country) && !empty($by_state) && $row['country']===$by_country && $row['orderState']===$by_state){
                include ('printRow.php');
            }elseif (empty($by_state) && $row['country'] ===$by_country ){
                include ('printRow.php');
            }elseif (empty($by_country) && $row['orderState'] ===$by_state){
                include ('printRow.php');
            }
        }elseif ($row['orderState'] ==="Preparación en proceso" || $row['orderState'] ==="Pago aceptado"){
            include ('printRow.php');
        }
    }
    
    echo "</table>";
?>