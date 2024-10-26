<?php
    include("dbconnect.php");

     $limit = 8;
     $start = ($_GET['page']-1)*$limit;

     $sql = "Select * from person limit $start, $limit";
     $result = $conn->query($sql);
     $count = $result->num_rows;

     $sql1 = "select * from person";
     $result1 = $conn->query($sql1);
     $count1 = $result1->num_rows;

     $output1 = '';

     if(!$result1 || !$result) {
         die("Invalid query: " . $conn->error);
     }

     if($count == 1){
        $output1 = "<p>
        Hiện tại có " . ($start+1) . " trong tổng " . $count1 . "</p";
     }
     else{
        $output1 = "<p>
        Hiện tại có " . ($start+1) . "-" . ($start+$count) . " trong tổng " . $count1 . "</p";
     }
     
     echo $output1;


     $conn->close();
?>