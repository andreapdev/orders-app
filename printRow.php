<script type="text/javascript" src="openPopUp.js"></script>
<?php
    require_once 'connect.php';
    echo "<tr class= 'clickableRow row' onClick='onRowClick( ". json_encode( $row ) .")'>";
    echo "<td class='cell'>" . $row['idOrder'] . "</td>";
    echo "<td class='cell'>" . $row['dateStamp'] . "</td>";
    echo "<td class='cell'>" . $row['fullName'] . "</td>";
    echo "<td class='cell'>" . $row['fullAddress'] . "</td>";
    echo "<td class='cell'>" . $row['country'] . "</td>";
    echo "<td class='cell'>" . $row['products'] . "</td>";
    echo "<td class='cell'>" . $row['orderState'] . "</td>";
    echo "</tr>"; 
?>