<?php

    //id만 GET으로 전달받을 수 있음
    $id= $_GET['id'];

    // post로 전달받은 값들
    $pass= $_POST['pass'];
    $name= $_POST['name'];
    $email1= $_POST['email1'];
    $email2= $_POST['email2'];

    $email= $email1 . "@" . $email2;

    include "../lib/dbconn.php";

    // 업데이트 쿼리문
    $sql= "UPDATE member SET pass='$pass', name='$name', email='$email' WHERE id='$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo "
    <script>
        location.href='../index.php';
    </script>
    ";

?>