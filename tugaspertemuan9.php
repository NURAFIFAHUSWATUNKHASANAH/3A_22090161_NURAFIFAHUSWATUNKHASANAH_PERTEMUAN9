<html>
<head>
<style>
    
        body {
            margin: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
            margin-bottom: 60px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            margin-top: 200px;
            width: 100%;
        }

        .error {
            color: #FF0000;
        }
</style>
</head>
<body>
    <header>
        <h1>Form Mahasiswa</h1>
    </header>

    <h2>Silahkan Masukkan Data Yang Benar</h2>

<?php
$nim=$nama=$email=$noHP=$prodi=$alamat="";
$nimErr=$namaErr=$emailErr=$noHPErr=$prodiErr=$alamatErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST"
&& isset($_POST["nim"]) 
  && isset($_POST["nama"]) 
  && isset($_POST["email"])
  && isset($_POST["noHP"])
  && isset($_POST["prodi"]) 
  && isset($_POST["alamat"])) {
    $nim = $_POST["nim"];
    $nama = $_POST ["nama"];
    $email = $_POST["email"];
    $noHP = $_POST["noHP"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST ["alamat"];
  }
?>

<?php
$nama=$email=$alamat="";
$namaErr=$emailErr=$alamatErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST" 
&& isset($_POST["nim"]) 
&& isset($_POST["nama"]) 
&& isset($_POST["email"])
&& isset($_POST["noHP"])
&& isset($_POST["prodi"]) 
&& isset($_POST["alamat"])) {
    if (empty($_POST["nim"])) {
        $nimErr = "Silahkan Masukan Nim";
      } else {
        $nim = test_input($_POST["nim"]);
    }
    if (empty($_POST["nama"])) {
        $namaErr = "Silahkan Masukan Nama";
      } else {
        $nama = test_input($_POST["nama"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Silahkan Masukan Email";
      } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["noHP"])) {
        $noHPErr = "Silahkan Masukan noHP";
      } else {
        $noHP = test_input($_POST["noHP"]);
    }
    if (empty($_POST["prodi"])) {
        $prodiErr = "Silahkan Masukan Prodi";
      } else {
        $prodi = test_input($_POST["prodi"]);
    }
    if (empty($_POST["alamat"])){
        $alamatErr = "Silahkan Masukan Alamat";
    } else {
        $alamat = test_input($_POST["alamat"]);
    }

}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action ="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method = "POST">
  NIM :  <input type ="text" name="nim"><span class="error">* <?php echo $nimErr;?></span><br><br>
  Nama : <input type ="text" name="nama"><span class="error">* <?php echo $namaErr;?></span><br><br>
  Email : <input type ="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
  NoHP : <input type ="text" name="noHP"><span class="error">* <?php echo $noHPErr;?></span><br><br>
  Prodi : <input type ="text" name="prodi"><span class="error">* <?php echo $prodiErr;?></span><br><br>
  Alamat : <input type = "text" name="alamat"><span class="error">* <?php echo $alamatErr;?></span><br><br>
<input type="submit">
</form>

<?php
    echo "Nim:";
    echo $nim;
    echo "<br>";
    echo "Nama:";
    echo $nama;
    echo "<br>";
    echo "Email:"; 
    echo $email;
    echo "<br>";
    echo "NoHP:";
    echo $noHP;
    echo "<br>";
    echo "Prodi:";
    echo $prodi;
    echo "<br>";
    echo "Alamat:"; 
    echo $alamat;
    echo "<br>";

?>
</body>
<footer>
        <p>&copy; 3A_22090161_NUR AFIFAH USWATUN KHASANAH.</p>
    </footer>
</html>