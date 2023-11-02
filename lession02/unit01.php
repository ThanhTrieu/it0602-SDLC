<?php
// string trong php la gi ?
$myString = "Hom nay sap la cuoi tuan";
$myString2 = 'Mai moi la cuoi tuan';
var_dump($myString, $myString2);
// tap hop moi ky tu(so,chu cai, cac ky tu dac biet) nam trong dau nhay kep hoac nhay don thi php deu se hieu la string
// ghep chuoi trong php - dung toan tu dau "."
echo "<br/>";
echo $myString . $myString2;
// de su dung bien trong chuoi thi bat buoc khai bao chuoi nam trong nhay kep
$age = 20;
$string = "Nam nay toi {$age} tuoi";
$string2 = 'Nam nay toi {$age} tuoi';
echo "<br/>";
echo $string;
echo "<br/>";
echo $string2;
$string3 = 'Nay nay toi' . $age . ' tuoi';
echo "<br/>";
echo $string3;
echo "<br/>";
/// su dung nhay kep nam trong nhay kep
$string4 = "Dang hoc \"PHP\" ";
// sung nhay don trong nhay don
$string5 = 'Dang hoc \'Laravel\' PHP';
echo $string5;
// https://www.php.net/manual/en/ref.strings.php
// day la tai lieu lam viec voi chuoi trong php
echo "<br/>";
$countLength = strlen($string5); // dem do dai cac ki tu trong chuoi
echo $countLength;
echo "<br/>";
echo md5($string5); // tra ve chuoi 32 ky tu dc ma hoa - khong the giai ma nguoc lai dc
/************ Mot so ham tien ich phai nho khi lam vie **********/
// 1- kiem tra xem 1 bien co ton tai ko ? (trong php mot bien goi la ton tai khi no duoc khai bao va khong duoc gan bang null);
// dung ham isset() - tra ve true or false
$number = null;
if(isset($number)){
    echo "OK";
} else {
    echo "NO";
}
echo "<br/>";
// 2 : kiem tra gia tri cua bien co rong khong?
// dung ham empty - tra ve true or flase
$testValue = " "; // 0 hay false de hieu la rong
if(empty($testValue)){
    echo "Yes";
} else {
    echo "No";
}
/// mot so ham tien ich khac
// is_int(), is_integer() : kiem tra xem co phai so nguyen hay ko(vua kiem ve mat gia tri va kieu du lieu)
// is_float(), is_double(): kiem tra so thuc (vua kiem ve mat gia tri va kieu du lieu)
// is_string(): kiem tra co phai la chuoi hay ko?
// is_null(): kiem tra 1 bien co null hay ko
// is_bool(): kiem tra 1 bien co phai boolean hay ko?
// is_numeric(): kiem tra ve mat gia tri co phai so nguyen hay so thuc hay ko (khong quan tam den kieu du lieu) - Number String