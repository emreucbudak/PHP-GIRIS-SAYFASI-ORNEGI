<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// IF YAPISI
$kad = "emreucbudak";
$pass = "emrektü";
if($kad != "emreucbudak") {
    echo("Kullanıcı Adı Yanlış");
}
elseif ($kad == "emreucbudak" and $pass != "emrektü") {
    echo("Şifre Yanlış");
}
else {
    echo("Giriş Yapıldı");
}


?>
