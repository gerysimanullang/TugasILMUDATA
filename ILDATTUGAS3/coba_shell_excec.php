<?php 
/* // Menjalankan perintah dir
$hasil = shell_exec('dir');
echo $hasil; */
?> 

<?php
$perintah = "C:\\Users\\Lepo\\AppData\\Local\\Programs\\Python\\Python36\\python.exe D:\\tes_python.py";
$output = shell_exec($perintah); 
echo "hasil: <pre>$output</pre>"; 
?>