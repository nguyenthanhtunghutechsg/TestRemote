<?php
if(!empty($_POST['delete'])){
    require("./students.php");
    $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
    deleteStudent($student_id);
}
header("Location:student-list.php");
//  function deletestudent($student_id, $student_name, $student_email){
//  $students = getallstudents();
     
//  /// Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
//  foreach ($students as $key => $item)
//  {
//      // Đã tìm thấy thì dùng hàm unset để xóa
//      if ($item['student_id'] == $student_id){
//          unset($students[$key]);
//      }
//  }
  
//  // Cập nhật lại Session
//  $_SESSION['students'] = $students;
//  return $students;
// 
// 
?>

