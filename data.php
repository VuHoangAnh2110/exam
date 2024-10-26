<?php
include("dbconnect.php");

     $limit = 8;
     $start = ($_GET['page']-1)*$limit;

     $sql = "Select * from person limit $start, $limit";
     $result = $conn->query($sql);

     $output = '';

     if(!$result){
         die("Invalid query: " . $conn->error);
     }

     $count = 1;
     while ($row = $result->fetch_assoc()){
            if($row["Sex"] == 1){
                $sex = "Nam";
            } else if ($row["Sex"] == 2){
                $sex = "Nữ";
            }else{
                $sex = "Khác";
            }

            if($count % 2 == 0){
                $output.= "<tr class='hover:bg-slate-50 border-b bg-blue-100 border-slate-200'>
                <td class='p-3 py-2'>" . $row["ID"] . "</td>
                <td class='p-3 py-2'>" . $row["Name"] . "</td>
                <td class='p-3 py-2'>" . $row["BirthDay"] . "</td>
                <td class='p-3 py-2'>" . $sex . "</td>
                <td class='p-3 py-2'>" . $row["Email"] . "</td>
            </tr>";
            }else{
                $output.= "<tr class='hover:bg-slate-50 border-b border-slate-200'>
                <td class='p-3 py-2'>" . $row["ID"] . "</td>
                <td class='p-3 py-2'>" . $row["Name"] . "</td>
                <td class='p-3 py-2'>" . $row["BirthDay"] . "</td>
                <td class='p-3 py-2'>" . $sex . "</td>
                <td class='p-3 py-2'>" . $row["Email"] . "</td>
            </tr>";
            }        
            $count++;
     }

     echo $output;

     $conn->close();
?>