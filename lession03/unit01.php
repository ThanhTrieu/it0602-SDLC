<?php
// tim hieu ve array trong php
// mang php : dung luu tru nhieu gia tri khac nhau trong 1 bien don
// cac gia tri luu tru trong mang php ko can thiet phai cung kieu du lieu voi nhau
$arrNumbers = [1,2,3,4,5,6,7,8,9]; // mang chua nhieu con so
$arrLetters = ['a','b','c','d','e']; // mang chua nhieu chu cai
$arrNumbers2 = array(1,2,3,4,5,6,7,8,9,'a','b',true,false); // bieu dien mot mang
// hien thi mang ra ngoai trinh duyet
echo "<pre>";
print_r($arrNumbers);
echo "</pre>";
// trong mang chu y den 2 khai niem :
// (index, key) : vi tri cua phan tu nam trong mang(luon luon bat dau tu 0)
// value: gia tri cua phan tu trong mang
// mang co index hay key ma tu dong dc tao ra va sap xep tang dan(theo cac con so) : mang tuan tu

$infoStudent = ["name" => "Teo", "age" => 20, "address" => "Ha Noi"];
echo "<pre>";
print_r($infoStudent);
echo "</pre>";
// mang ket hop: key cua mang khong phai la so va ko dc sap xap theo trat tu
// truy cap vao gia tri cua 1 phan tu nam trong mang
// cu phap: nameArray[index];
$name = $infoStudent["name"];
echo $name;
echo "<br/>";
echo $arrNumbers[5];
// bo sung phan tu vao mang
$fruits = []; // khai bao 1 mang rong
$fruits["name"] = "Apple";
$fruits["weight"] = 3;
echo "<pre>";
print_r($fruits);
echo "</pre>";
$numbers = [];
$numbers[0] = 10;
$numbers[1] = 9;
$numbers[2] = 8;
echo "<pre>";
print_r($numbers);
echo "</pre>";
/////// mang mot chieu
////// mang da chieu
$listStudents = [
    ["name" => "Teo", "age" => 20],
    ["name" => "Ty", "age" => 21],
    ["name" => "Hoi", "age" => 19]
];
echo "<pre>";
print_r($listStudents);
echo "</pre>";
// dem so luong phan tu trong mang
$count = count($listStudents);
echo $count;
echo "<br/>";
echo $listStudents[2]["name"];
echo "<br/>";
echo $listStudents[1]["age"];
//////////////////// Duyet mang ////////////////////////
echo "<br/>";
$myArr = [1,2,3,4,5,6,7,8];
$sum = 0;
for($i = 0; $i < count($myArr); $i++){
    // $i : chinh la vi tri(index) cua cac phan tu
    //echo $myArr[$i];
    //echo "<br/>";
    if($myArr[$i] % 2 == 0){
        $sum += $myArr[$i];
    }
}
//echo "Tong so chan {$sum}";
$myStudents = [
    ["name" => "Teo", "age" => 20],
    ["name" => "Ty", "age" => 21],
    ["name" => "Hoi", "age" => 19]
];
// tinh tong so tuoi cac ban sinh vien
$sumAge = 0;
foreach($myStudents as $key => $value){
    // $key : 0,1,2
    // $value:  3 mang con 
    // in ra lan luot ten cua tung ban sinh vien ???
    // echo $value["name"];
    // echo "<br/>";
    $sumAge += $value["age"];
}
echo "<br/>";
echo "Tong so tuoi {$sumAge}";
echo "<br/>";
$randomNumber = [10,2,3,4,1,5,6,7];
// viet ham tim phan tu nho nhat trong mang
function findMinElement($arr){
    $min = $arr[0]; // gan phan tu nho nhat bang phan tu dau tien trong mang
    // duyet mang, qua lan luot tat ca cac phan tu khac, kiem tra xem con phan tu nao nho min nua ko?
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo "<br/>";
echo findMinElement($randomNumber);