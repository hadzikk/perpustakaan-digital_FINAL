<?php
    include 'conn.php';
    
    if (isset($_GET["id_buku"])) {
        $id = $_GET['id_buku'];
        mysqli_query($conn, "DELETE FROM buku WHERE id_buku = '$id'");

        header("Location: dashboard_data_buku.php");
    } 

    if (isset($_GET["tambah_buku"])) {
        $gambar_buku = $_POST["gambar_buku"];
        $judul_buku = $_POST["judul_buku"];
        $label_buku = $_POST["label_buku"];
        $gambar_penulis_buku = $_POST["gambar_penulis_buku"];
        $tahun_terbit_buku = $_POST["tahun_terbit_buku"];
        $penerbit_buku = $_POST["penerbit_buku"];
        $deskripsi_buku = $_POST["deskripsi_buku"];

        mysqli_query($conn, "INSERT INTO buku (`id_buku`, 
                                                `gambar_buku`, 
                                                `judul_buku`, 
                                                `deskripsi_buku`, 
                                                `label_buku`, 
                                                `gambar_penulis_buku`, 
                                                `tahun_terbit_buku`, 
                                                `penerbit_buku`) 
                            VALUES (NULL, 
                            '$cover', 
                            '$judul_buku', 
                            '$deskripsi_buku', 
                            '$label_buku', 
                            '$gambar_penulis_buku', 
                            '$tahun_terbit_buku', 
                            '$penerbit_buku')");
    header("Location: dashboard_data_buku.php");
    }

    if (isset($_GET["edit_buku"])) {

        $id_buku = $_POST["id_buku"];
        $gambar_buku = $_POST["gambar_buku"];
        $judul_buku = $_POST["judul_buku"];
        $label_buku = $_POST["label_buku"];
        $gambar_penulis_buku = $_POST["gambar_penulis_buku"];
        $tahun_terbit_buku = $_POST["tahun_terbit_buku"];
        $penerbit_buku = $_POST["penerbit_buku"];
        $deskripsi_buku = $_POST["deskripsi_buku"];

        mysqli_query($conn, "UPDATE `buku` SET `id_buku`='$id_buku',`gambar_buku`='$gambar_buku',`judul_buku`='$judul_buku',`deskripsi_buku`='$deskripsi_buku',`label_buku`='$label_buku',`gambar_penulis_buku`='$gambar_penulis_buku',`tahun_terbit_buku`='$tahun_terbit_buku',`penerbit_buku`='$penerbit_buku' WHERE id_buku = '$id_buku'");

        header("Location: dashboard_data_buku.php");
    }
?>