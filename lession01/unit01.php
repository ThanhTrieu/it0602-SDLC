<?php

// dung vong lap for kiem tra 1 toi 10 co nhung so chinh phuong nao?
// php ho tro ham : is_int() : biet 1 so co phai so nguyen hay ko?
// sqrt() trong php luon luon tra ve kieu du lieu la float
for($i = 1; $i <= 10; $i++){
    $value = sqrt($i);
    if(preg_match("/^[0-9]$/", $value)){
        echo "{$i} la so chinh phuong";
        echo "<br/>";
    }
}