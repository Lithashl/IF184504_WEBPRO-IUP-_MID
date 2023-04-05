<?php
include 'koneksi.php';
if (isset($_POST['btnProses'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];

    if ($_POST['btnProcess'] == "tambah") {

        $gambar = $_FILES['gambar']['name'];
        $dir = "gambar/";
        $dirFile = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($dirfile, $dir . $gambar);

        $query = "INSERT INTO tb_buku VALUES('', '$judul', '$penerbit', '$pengarang', '$kategori')";
        $sql = mysqli_query($konek, $query);
        if ($sql) {
            header('location:index.php');
        }
    } else {
        if ($_FILES['gambar']['name'] != "") {
            $queryHapus = "SELECT gambar FROM tb_buku WHERE id='$_POST[id]'";
            $sqlHapus = mysqli_query($konek, $queryHapus);
            $data = mysqli_fetch_array($sqlHapus);
            unlink("gambar/" . $data['gambar']);

            $gambar = $_FILES['gambar']['name'];
            $dir = "gambar/";
            $dirFile = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($dirFile, $dir . $gambar);

            $query = "UPDATE tb_buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit',
            kategori='$kategori',gambar='$gambar' WHERE id='$_POST[id]'";

        } else {
            $query = "UPDATE tb_buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit',
                kategori='$kategori' WHERE id='$_POST[id]'";
        }
        $sql = mysqli_query($konek, $query);
        if (sql) {
            header('location:index.php');
        }
    }
} elseif ($_GET['hapus']) {
    $queryHapus = "SELECT gambar FROM tb_buku WHERE id='$_GET[hapus]'";
    $sqlHapus = mysqli_query($konek, $queryHapus);
    $data = mysqli_fetch_array($sqlHapus);

    unlink("gambar/" . $data['gambar']);

    $query = "DELETE FROM tb_buku WHERE id='$_GET[hapus]'";
    $sql = mysqli_query($konek, $query);
    if (sql) {
        header('location:index.php');
    }
}