<?php
include "../php/common/config.php";

$query = "SELECT createat, count(status) as count,category  FROM `case` group by createat,category";

$result = mysqli_query($link,$query);
// print_r($result);
$emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
      echo json_encode($emparray);

?>