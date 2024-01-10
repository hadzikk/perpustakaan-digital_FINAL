<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah buku</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/4587/4587301.png?ga=GA1.1.1095638270.1704336278&semt=ais" type="image/x-icon">
</head>
<body>
    <div class="box">
        <form action="algoritma.php?tambah_buku=tambah" method="post">
            <p>tambah buku</p>

            <label for="">cover</label>
            <input type="text" placeholder="Tempel tautan gambar disini.." name="gambar_buku">
            <label for="">judul</label>
            <input type="text" placeholder="ketik judul buku" name="judul_buku">
            <label for="">penerbit</label>
            <input type="text" placeholder="ketik penerbit buku" name="penerbit_buku">
            <label for="">deskripsi</label>
            <input type="text" placeholder="ketik deskripsi buku" name="deskripsi_buku">
            <label for="">tahun</label>
            <input type="text" placeholder="ketik tahun terbit" name="tahun_terbit_buku">
            <label for="">label</label>
            <input type="text" placeholder="ketik label buku" name="label_buku">
            <label for="">author</label>
            <input type="text" placeholder="paste url gambar disini.." name="gambar_penulis_buku">
            <button type="submit">tambahkan</button>
        </form>
    </div>
</body>
</html>