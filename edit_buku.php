<?php 
    include 'conn.php';
    $id_buku = $_GET["id_buku"];
    $data = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $book = mysqli_fetch_assoc($data);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit buku</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/4587/4587301.png?ga=GA1.1.1095638270.1704336278&semt=ais" type="image/x-icon">
</head>
<body>
    <div class="box">
        <form action="algoritma.php?edit_buku=edit" method="post">
            <p>edit buku</p>

            <input type="hidden" name="id_buku" value="<?php echo $book["id_buku"];?>">
            <label for="">cover</label>
            <input type="text" placeholder="Tempel tautan gambar disini.." name="gambar_buku" value="<?php echo $book["gambar_buku"];?>">
            <label for="">judul</label>
            <input type="text" placeholder="ketik judul buku" name="judul_buku" value="<?php echo $book["judul_buku"];?>">
            <label for="">penerbit</label>
            <input type="text" placeholder="ketik penerbit buku" name="penerbit_buku" value="<?php echo $book["penerbit_buku"];?>">
            <label for="">deskripsi</label>
            <input type="text" placeholder="ketik deskripsi buku" name="deskripsi_buku" value="<?php echo $book["deskripsi_buku"];?>">
            <label for="">tahun</label>
            <input type="text" placeholder="ketik tahun terbit" name="tahun_terbit_buku" value="<?php echo $book["tahun_terbit_buku"];?>">
            <label for="">label</label>
            <input type="text" placeholder="ketik label buku" name="label_buku" value="<?php echo $book["label_buku"];?>">
            <label for="">author</label>
            <input type="text" placeholder="paste url gambar disini.." name="gambar_penulis_buku" value="<?php echo $book["gambar_penulis_buku"];?>">
            <button type="submit">selesai</button>
        </form>
    </div>
</body>
</html>