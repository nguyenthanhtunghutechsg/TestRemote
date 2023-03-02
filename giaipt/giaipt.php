<?php

$heso_a = "";
$heso_b = "";
$heso_c = "";
// đọc các hệ số từ FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
if (isset ( $_POST ['heso_c'] )) {
    $heso_c = $_POST ['heso_c'];
}
class ptbac1{
    public int $c ;
    public int $b ;


    public function __construct( $c, $b) {
        $this->c = $c;
        $this->b = $b;
    }

    public function cal(){
        if ($this->c ==0){
            echo ("Phương trình vô nghiệm!");
            return -1;
        }
        echo ("Phương trình có một nghiệm: " . "x = " . (- $this->c / $this->b));
        return   $this->c /  $this->b;
    }
}


class ptbac2 extends ptbac1{
    public int $a ;
    public int $b ;
    public int $c ;

    public function __construct(  $a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    public function cal(){
        if( $this->a == 0)
         parent:: cal();
         else{
            $delta =  $this->b *  $this->b - 4 * $this->a * $this->c;
            $x1 = 0;
            $x2 = 0;
            if ($delta > 0) {
                $x1 = (- $this->b + sqrt ( $delta )) / (2 * $this->a);
                $x2 = (- $this->b - sqrt ( $delta )) / (2 * $this->a);
                echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
            } else if ($delta == 0) {
                $x1 = (- $this->b / (2 * $this->a));
                echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
            } else {
                echo ("Phương trình vô nghiệm!");
            }
         }
    }

}
?>





<form action="#" method="post">
 <table>
  <tr>
   <td>Hệ số bậc 2, a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>Hệ số bậc 1, b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>
   <td>Hệ số tự do, c</td>
   <td><input type="text" name="heso_c" value="<?=$heso_c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php


// gọi hàm giải phương trình bậc 2
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] ) 
        && is_numeric ( $GLOBALS ['heso_c'] )) {
            $var = new ptbac2($heso_a, $heso_b,$heso_c);   $var->cal();
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>