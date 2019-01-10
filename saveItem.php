<?php

$arr = json_decode($_POST['json']);



$pdodb = new PDO('mysql:host=localhost; dbname=bondardb', 'root', '');
$pdodb -> exec("SET NAMES UTF8 ");
$params = [ "nameeng"=>$arr->dano->name, "Vh"=>$arr->dano->Vh, "H"=>$arr->dano->H, "Dv"=>$arr->dano->Dv, "d_v"=>$arr->dano->dv,
    "Lv"=>$arr->dano->Lv, "Lv2"=>$arr->dano->Lv2,
            "Lop"=>$arr->dano->Lop, "Ddv"=>$arr->dano->Ddv, "Lukl"=>$arr->dano->Lukl, "Deltal"=>$arr->dano->DeltaL, "Gv"=>$arr->dano->Gv,
    "Ve"=>$arr->dano->V_e, "Roh"=>$arr->dano->Roh, "Ro"=>$arr->dano->Ro,
            "k2"=>$arr->dano->k2, "k4"=>$arr->dano->k4, "L"=>$arr->rozrah->L, "Fe"=>$arr->rozrah->Fe, "Fet"=>$arr->rozrah->Fe_t,
    "De"=>$arr->rozrah->De, "Dm"=>$arr->rozrah->Dm, "Delta"=>$arr->rozrah->Delta,
            "Romin"=>$arr->rozrah->Ro_min, "Fmin"=>$arr->rozrah->Fmin, "LopLop1"=>$arr->rozrah->Lop_lop1, "c"=>$arr->rozrah->c, "k"=>$arr->rozrah->k,
    "Dmin"=>$arr->rozrah->Dmin, "R"=>$arr->rozrah->R, "Tgbx"=>$arr->rozrah->TgBx, "F2"=>$arr->rozrah->F2
];
$querysave = $pdodb->prepare("INSERT INTO savedeng SET nameeng=:nameeng, Vh=:Vh, H=:H, Dv=:Dv, d_v=:d_v,	Lv=:Lv, Lv2=:Lv2, Lop=:Lop, Ddv=:Ddv, Lukl=:Lukl, Deltal=:Deltal, Gv=:Gv, Ve=:Ve, Roh=:Roh, Ro=:Ro, k2=:k2, k4=:k4, L=:L, Fe=:Fe, Fet=:Fet, De=:De, Dm=:Dm, Delta=:Delta, Romin=:Romin, Fmin=:Fmin, LopLop1=:LopLop1, c=:c, k=:k, Dmin=:Dmin, R=:R, Tgbx=:Tgbx, F2=:F2");
if($querysave -> execute($params))
{

    echo 'Yeah';
}
else{
    print_r(json_decode($_POST['json']));
}

?>