<?php
   include("dbconnect.php");

        $sql = "select * from person";
        $result1 = $conn->query($sql);
        $count1 = mysqli_num_rows($result1);
        $limit = 8;
        $paginate = ceil($count1/$limit);

        for($i = 1; $i <= $paginate; $i++){
            if($i > 3 && $i < $paginate){
                if ($i > 3 && $i < 5){
                    echo"<ul class='flex space-x-2'>
                    <li class='page-item' >
                    <p class='page-link px-4 pb-2 
                    text-gray-700'> . . . </p>
                    </li>
                    </ul>";
                }else{
                    continue;
                }
            }else{
                echo "<ul class='flex space-x-2'>
                <li class='page-item' data-page='". $i . "' onclick='loadtable(" . $i ."); total(" . $i .")'>
                <a class='page-link px-4 py-2 border border-gray-300 
                rounded hover:bg-gray-200 text-gray-700' href='javascript:void(0)'>" . $i . "</a>
                </li>
                </ul>";
            }
        }
    
    $conn->close();
?>