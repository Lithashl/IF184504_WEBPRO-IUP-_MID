<?php
$konek=mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($konek, "db_buku");
if ($konek) {
	echo "Koneksi Berhasil";
}
?>