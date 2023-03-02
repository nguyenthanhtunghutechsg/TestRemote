<?php
$is_Update_action = false;

?>


<!DOCTYPE html>
<html>
<title> Add student</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</html>

<body>
    <a href="student-list.php"> Back </a>
    <form method="post">
        <table border="1" cellspacing="10">
            <tr>
                <td>Id</td>
                <td>
                    <input type="text" name="id" value="<?php echo !empty($data['student_id']) ? $data["student_id"] : ''; ?>">
                    <?php echo !empty($errors["student_id"]) ? $error['student_id'] : ''; ?>
                </td>
            </tr>

            <tr>
                <td>name</td>
                <td>
                    <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data["student_name"] : ''; ?>">
                    <?php echo !empty($errors["student_name"]) ? $error['student_name'] : ''; ?>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" value="<?php echo !empty($data['student_email']) ? $data["student_email"] : ''; ?>">
                    <?php echo !empty($errors["student_email"]) ? $error['student_email'] : ''; ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="add_student" value="<?php echo($is_Update_action) ? "Cap nhat" : "Them moi"; ?>"/></td>

            </tr>


        </table>

    </form>




</body>

<?php
require("./students.php");
$data = array();
$errors = array();
if (!empty($_GET['id'])) {
    $data = getAllStudents($_Get['id']);
    $is_Update_action = true;
}
if (!empty($_POST['add_student'])) {
    $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';
    if (empty($data['student_id'])) {
        $errors['student_id'] = "Ban chua nhap id";
    }


    if (empty($data['student_name'])) {
        $errors['student_name'] = "Ban chua nhap name";
    }
    if (empty($data['student_email'])) {
        $errors['student_email'] = "Ban chua nhap email";
    }
    if (empty($errors)) {
        updateStudent($data['student_id'], $data['student_name'], $data['student_email']);
        header("Location:student-list.php");
    }
}
?>