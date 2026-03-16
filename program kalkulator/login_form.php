<!DOCTYPE html>
<?php 
$user_benar = "sofia";
$pass_benar = "255150400111013";
$pesan = "";

if($_server["request_method"]=="post"){
    //untuk cek apakah file dikim dgn method post(bkn get)
    $username = $post["username"];
    $passsword =$post["password"];
    //$usernbame adalh variabel yang simpan nilai

    if($username==$user_benar && $password==$pass_benar){
    header(location : dashboard.php) //nama apa?
    exit();
    } else {
        $pesan = "Login failed!";
    }
?>

//ini buat sembunyiin file atau script php dr user, aman?
//kasih tw browser kt gunain html 5
<html lang="en"> 
//lang = tag atribut yg jelasin tag, spyy browser tau klo halaman bhs inggris biar bs dipahami
//value dr lang
//html semacam method main

//metadata : data tntng data, informasi ttnng web untuk bantu SEO(mesin pencari)
<head>
#informasi halaman
    <meta charset="UTF-8"> //mendukung srluruh karketer,simbol dr bnyk bahasa
    <title>Login Page</title> //judul di halaman
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container"> //gunakan kelas css login_cobtainer

    <h2>Welcome Back</h2>

    <form action="#" method="post">
        //fungsi action, agar ktk di klik, 
        //
        //untuk kumpulkan data dan dikirim ke skrip php dgn atribut action,
        //
        <div class="input-group">
            <label>Username</label> //penjelasan untuk input
            <input type="text" placeholder="Enter username">
            //type = jenis data input
            //placeholder = teks sementara dalam kotak input
        
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Enter password">
        </div>

        <button type="submit">Login</button>

    </form>
</div>

    <?php
    // echo($pesan);
    //echo = sout;
    //biar bagus 
    echo("<h2 align = 'center'>".$pesan."</h2>")
    ?>

</body>
</html>