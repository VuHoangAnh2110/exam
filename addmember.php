<?php
    include("dbconnect.php");

    function ConvertSex($sex) {
        switch ($sex) {
            case "Nam": return 1;
            case "Nữ": return 2;
            case "Khác": return 3;
            default: return 0;
        }
    }

    $daynow = date("Y-m-d");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
        $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
        $birth = isset($_POST["birth"]) ? $_POST["birth"] : "";
        $sex = isset($_POST["sex"]) ? trim($_POST["sex"]) : "";

        // Kiểm tra nếu ngày sinh và giới tính không được nhập
        if(empty($name) || empty($email) || empty($birth) || empty($sex) 
            || check_email(trim($email))) {
            if (empty($name)) {
                echo "<script>
                    document.getElementById('err-name').innerText = 'Không để trống';
                    </script>";
            } 
            if (empty($email)){
                echo "<script>
                document.getElementById('err-email').innerText = 'Không để trống';
                </script>";
            }
            if (empty($birth)) {
                echo "<script>
                document.getElementById('err-birth').innerText = 'Không để trống';
                </script>";
            } 
            if (empty($sex)) {
                echo "<script>
                document.getElementById('err-sex').innerText = 'Không để trống';
                </script>";
            } 
            if(check_email(trim($email))) {
                $message = "Đã tồn tại email";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }else {
            $sexNumber = ConvertSex($sex);
            $sql = "INSERT INTO person (Name, BirthDay, Sex, Email) VALUES ('$name', '$birth', '$sexNumber', '$email')";

            if ($conn->query($sql) === TRUE) {
                // Chuyển đến trang mới nhất có dữ liệu mới được thêm vào database   
                $sql1 = "SELECT * FROM person";
                $result1 = $conn->query($sql1);
                $count1 = mysqli_num_rows($result1);
                $limit = 8;
                $end_page = ceil($count1 / $limit);
                echo "<script>
                    pagination();
                    loadtable(" . $end_page . ");
                    total(" . $end_page . ");
                </script>";

                // Xử lý thông báo thành công
                $message = "Success!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                // Thông báo lỗi khi không thực hiện được insert
                $message = "Fail!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }

        // Làm sạch biến
        $name = $birth = $email = $sex = $sexNumber = "";
    }

    function check_email ( $email ) {
        global $conn;
        $sql2 = "SELECT * from person where email = '$email'";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0) {
            return true;
        }
        return false;
    };

    $conn->close();
?>
