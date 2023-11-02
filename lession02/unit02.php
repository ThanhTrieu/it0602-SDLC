<?php
// dinh nghia - khai bao ham( ham do LTV tu dinh nghia)
function sumNumber($a, $b = 0){
    return $a + $b;
}
// keyword function: tu khoa de dinh nghia ham(bat buoc hoc thuoc)
// sumNumber: ten ham do LTV tu dinh nghia ra
// () : la noi de truyen tham so vao ham neu co (bat buoc phai khai bao) va giup thuc thi(chay) ham khi goi ra su dung
// $a va $b : tham so hinh thuc truyen vao ham, tham so nay do LTV tu khai bao (khong bat buoc luc nao cung phai co)
// {} : la noi de khai bao than ham(body function) - la noi chua toan bo ma lenh de giai quyet logic cua bai toan
// keyword return : tra ket qua ve cho ham, thoat luon khoi ham - khong bat buoc luc nao cung phai co, phu thuoc vao logic giai quyet bai toan

// SU DUNG HAM DA DC DINH NGHIA
$result = sumNumber(1, 4);
// tham so 1,2 : tham so thuc(tham so that) , tham so nay moi co hieu luc thuc su ve mat gia tri, dau hieu nhan biet tham so nay - tham so truyen vao ham khi ham goi ra su dung
//echo $result;

// viet 1 ham kiem  tra do dai cua 3 canh co phai la 3 canh cua 1 tam giac hay ko?
function kiemTraDoDaiCanhTamGiac($a, $b, $c){
    // logic cua ham
    if ( $a+$b > $c && $b + $c > $a && $a + $c > $b) {
        //echo "day la mot tm giac";
        return true;
        //echo "day la mot tm giac";
    } 
    return false;
        //echo"Day k phai la tam giac";
}
$result = kiemTraDoDaiCanhTamGiac(1,2,3);
if($result){
    echo "day la mot tam giac";
} else {
    echo"Day k phai la tam giac";
}
// viet ham tinh dien tich hinh thang
function tinhDTHT($dayTo, $dayNho, $chieuCao){
 return($dayTo+$dayNho)*$chieuCao/2; 
 
}
echo "<br/>";
echo "Dien tich cua Hinh Thang la ". tinhDTHT (3,5,6);

// viet ham giai bien luan phuong trinh bac nhat
// can kiem tra tham so a va b co hop le la 1 phuong trinh bac nhat ko
function giaiPTBN($a, $b){
    if($a == 0){
        if($b == 0){
            return "PT vo so nghiem";
        }
        return "PT vo nghiem";
    }
    // a khac 0
    $x= -$b/$a;
    return "ngiem pt la =$x";
}
echo "<br/>";
echo giaiPTBN (5,10);
// viet ham giai phuong trinh bac hai
function GiaiPTBacII($a,$b, $c){

    $d = (pow($b,2)-(4*$a*$c));
    if($d<0)
    {
        return "PT vo nghiem";
    }
    if($d==0)
    {
        return "PT co nghiem kep x1 = x2 = ". -$b/2*$a;
    }
    if($d>0)
    {
        $x1 =(-$b+sqrt($d))/(2*$a);
        $x2 =(-$b-sqrt($d))/(2*$a);
        return "PT co 2 nghiem phan biet x1 = {$x1} va x2 = {$x2}";
    }
}
echo GiaiPTBacII(4, -2, -6);
 function hephuongtrinh($a1,$b1,$c1,$a2,$b2,$c2){
    $d = $a1*$b2 - $a2 * $b1;
    if($d == 0){
        return "phuongtrinhvonghiem";
    }
    $dx = ($c1*$b2) - ($c2*$b1);
    $dy = ($a1*$c2) - ($a2*$c1);
    if ($dx == 0 && $dy == 0){
        return"phuong trinh vo so nghiem";
    }
    $x = $dx/$d;
    $y = $dy/$d;
    return "nghiem cua phuong trinh x= {$x} y={$y}";
 }
echo hephuongtrinh(2,-4,6,1,1,15);