<!-- register -->
<?php 
    include 'config/classDB.php';
    if(isset($_POST['register'])){
        extract($_POST);
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $ins = $dbo-> insert("pelanggan","null, '$nama_pelanggan', '$alamat', '$nohp', '$username', '$pass', '1'" );
        if($ins){
            ?>
<script>
alert('Register Berhasil!!!');
location.href = "login.php";
</script>
<?php
        }else{
            ?>
<script>
alert('register gagal!! Perikasa data');
location.href = "register.php";
</script>
<?php
            
        }
    }
    
?>