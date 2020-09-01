<?php
//Database Host (usually localhost)
$server = "localhost";
//Your database user name // Nama Database U
$user = "root";
//Your database password // Passeword database U
$pass = "";
//Your database name // Nama Database  mu

$database = "avicenna";
//The table name  // nama table mu
$tableName = "guru";
//koneksi database
$conn = @mysql_connect($server,$user,$pass);
//Menggunakan DAtabase
$database = @mysql_select_db($database,$conn);
//query Mysql untuk menyelect
$query = @mysql_query("SELECT * FROM $tableName");
//mysq num row untuk total
$total_rows = @mysql_num_rows($query);
$counter = 0;
//perulangan
while($ourData = @mysql_fetch_array($query)){
$NIP = $ourData["NIP"];
$Nama=$ourData["Nama"];
print("&user_data$counter=$NIP|$Nama");
//Close the while loop // keluar perulangan
}


print("&total=$total_rows");

?>