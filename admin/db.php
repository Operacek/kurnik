<?php
function Connection(){
    global $connection;

    $connection = mysqli_connect("sql.endora.cz:3309","operak","LznC6LF3Zb","skladoprk");
    if($connection){
        
    }else{
        die("nah DB");
    }
}

?>