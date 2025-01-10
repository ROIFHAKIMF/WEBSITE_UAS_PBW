<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=login.css?v:1.0">
    <title>php dasar</title>
</head>
<body>
    <div class="container">
        <div class="wraper">
            <form method="POST">
                <h1>LOGIN</h1>
                <div class="input">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password">
                </div>
                <input type="submit" value="login" class="tombol">
            </form>
        <div class="hasil">
            <?php
                //memulai session atau melanjutkan session yang sudah ada
                session_start();
                
                //menyertakan code dari file koneksi
                include "koneksi.php";
                //check jika sudah ada user yang login arahkan ke halaman admin
                if (isset($_SESSION['username'])) { 
                    header("location:admin.php"); 
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
                    $password = md5($_POST['password']);
                    //prepared statement
                    $stmt = $conn->prepare("SELECT username FROM login WHERE username=? AND password=?");
                    //parameter binding 
                    $stmt->bind_param("ss", $username, $password);//username string dan password string
                  //database executes the statement
                    $stmt->execute();
                  //menampung hasil eksekusi
                    $hasil = $stmt->get_result();
                  //mengambil baris dari hasil sebagai array asosiatif
                    $row = $hasil->fetch_array(MYSQLI_ASSOC);
                
                  //check apakah ada baris hasil data user yang cocok
                    if (!empty($row)) {
                    //jika ada, simpan variable username pada session
                    $_SESSION['username'] = $row['username'];
                    echo "<p style='color:lime;'>LOGIN BERHASIL</p>";
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'admin.php';
                        }, 3000); // Redirect setelah 3 detik
                    </script>";
                    } else {
                        echo "<p style='color:red;'>LOGIN GAGAl</p>";
                        echo "<script>
                                window.location.href = 'login.php';
                            </script>";
                    }
                
                    //menutup koneksi database
                    $stmt->close();
                    $conn->close();
                } else {
                ?>
        </div>
    </div>
    </div>
</body>
</html>
<?php
}
?>
