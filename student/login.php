<?php

require("./students.php");
$students = getAllStudents();
if(isset($_POST['submit'])){
    $user = htmlspecialchars($_POST['username']);
    $pass = $_POST['password'];
    print_r($students);
    echo $pass;
    foreach($students as $key => $item){
        if($item['student_name'] == $user &&  $pass ="123"){
            $_SESSION['username'] = $user;
            header("Location: student-list.php");
        }
    }
}
?>



<!DOCTYPE html>
<html lang="v1">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Đăng nhập</title>

</head>

<body>
    <h1>Đăng nhập</h1>
    <form method="post">
        <label for="username">Tài khoản</label>
        <input type="text" id ="username" name="username"><br> <br>
        <label for="password">mật khẩu</label>
        <input type="text" id ="password" name="password"><br> <br>

        <input type="submit" value="Đăng nhập"name="submit">
    </form>
</body>

</html>