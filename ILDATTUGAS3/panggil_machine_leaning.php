<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Pilih file: <input type="file" name="berkas" />
        <input type="submit" name="upload" value="upload" />
    </form> 
</body> 
</html>

<?php 
function panggil_model(){
$perintah = "C:\\Users\\Lepo\\AppData\\Local\\Programs\\Python\\Python38\\python.exe C:\\xampp\\htdocs\\machine_learning\\e-nose.py";
#$perintah = "C:\\Users\\Lepo\\AppData\\Local\\Programs\\Python\\Python38\\python.exe D:\\tes_python.py";
$output = shell_exec($perintah); 
return "$output"; 
}
?> 

<?php
if(isset($_POST["upload"])) {
// ambil data file
//$namaFile = $_FILES['berkas']['name'];
$namaFile = 'dataset.csv';
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "dataset/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link dataset: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a><br/>";
	$hasil = panggil_model();
	echo 'Hasil prediksi: '.$hasil;
	echo "Link hasil: <a href=hasil.csv>hasil.csv</a><br/>";
} else {
    echo "Upload Gagal!";
}
}
?>

