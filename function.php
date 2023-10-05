<?php
    require_once 'templates/dbconnect.php';

    function query($query) {
        global $dbconnect;
        $result=mysqli_query($dbconnect,$query);
        $rows=[];
        while($row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }
    
?>