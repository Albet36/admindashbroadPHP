
<?php 
require_once("./connect.php");
function execute($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    mysqli_query($sql, $conn);
    mysqli_close($conn);
}


?>