<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <?php
        require_once("userclass.php");
        $nguyenanh = new User('nguyen anh','dinhanhvnn@gmail.com');
        echo "<h2>---User Info ---</h2>";
        echo "UserID: ".$nguyenanh->GetUserID()."<br/>";
        echo "UserName:".$nguyenanh ->GetUserName()."<br/>";

        $nguyenanhmore = new User('Nguyen Van A','youremail@gmail.com');
        echo "<h2>---More user ---</h2>";
        echo "UserID: ".$nguyenanhmore->GetUserID()."<br/>";
        echo "UserName:".$nguyenanhmore ->GetUserName()."<br/>";

        include("employeeclass.php");
        $person_a = new Person("Nguyen van B", 1234);
        echo "<h2>--more oop php----</h2>";
        echo "Person Name:".$person_a -> GetName()."<br/>";
        echo "Person ID ".$person_a ->GetNationalID()."<br/>";

        echo "<h2> Employee</h2>";
        $employee_a = new Employee("Nguyen van C",5678,"Security");
        echo "Employee ID:".$employee_a -> GetEmployeeID()."<br/>";
        echo "Employee Name:".$employee_a -> GetName()."<br/>";
        echo "Employee Department:".$employee_a -> GetDepartment()."<br/>";
        echo "<h2> More Employee</h2>";
        $employee_b = new Employee("Nguyen van D",112233,"Offical");
        echo "Employee ID:".$employee_b -> GetEmployeeID()."<br/>";
        echo "Employee Name:".$employee_b -> GetName()."<br/>";
        echo "Employee Department:".$employee_b -> GetDepartment()."<br/>";
        ?>
    </div>
    <br>
    <footer>
        &#169 2016 -Anh nguyen - faculty of information technology (HUTECH)
    </footer>
</body>
</html>