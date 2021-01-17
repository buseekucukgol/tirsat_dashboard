<?php
session_start();
$baglanti=mysqli_connect("localhost","root","","proje");
if($baglanti){
        if($_POST){
            if(strip_tags(trim(isset($_POST["eposta"])))){
                $kullaniciEposta=$_POST["eposta"];
            }
            if(strip_tags(trim(isset($_POST["sifre"])))){
                $kullaniciSifre=$_POST["sifre"];
            }
            $sorgu=mysqli_query($baglanti,"SELECT * FROM yonetici WHERE eposta='".$kullaniciEposta."' AND 
            	sifre='".$kullaniciSifre."'");
            if(mysqli_num_rows($sorgu)>0){
        $row=mysqli_fetch_assoc($sorgu);
        session_regenerate_id();
        $_SESSION['loggedin']= FALSE;
        $_SESSION['gelenid']=$row["yonetici_id"];
        $_SESSION['ad']=$row["adi"];
        $_SESSION['soyad']=$row["soyadi"];
        $_SESSION['resim']=$row["avatar"];
        echo 1;
    }else{
        echo 0;
    };
mysqli_close($baglanti);
}else{
    echo "";
}
}else{
	die("Baglanti sağlanamadı");
};
?>