<?php 
    include 'conn.php';

    $books = mysqli_query($conn, "SELECT * FROM buku");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Main</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/1828/1828791.png?ga=GA1.1.1095638270.1704336278&semt=ais" type="image/x-icon">
</head>
<body>
    <section class="sidebar">
        <header><p>perpustakaan digital</p></header>

        <div class="admin-tools">
            <p>admin tools</p>
            <ul>
                <li><i class="fa-solid fa-table-columns"></i> &nbsp; <a href="dashboard_main.php">main</a></li>
                <li class="active"><i class="fa-solid fa-book"></i> &nbsp; <a href="">buku</a></li>
                <li><i class="fa-regular fa-user"></i> &nbsp;<a href="">pengguna</a></li>
            </ul>
        </div>
    </section>

    <section class="container">
        <div class="container-data-buku">
        <a href="tambah_buku.php"><i class="fa-regular fa-square-plus"></i></a>
            <table cellspacing="0">
                <tr>
                    <th>no</th>
                    <th>cover</th>
                    <th>judul</th>
                    <th>penerbit</th>
                    <th>deskripsi</th>
                    <th>tahun</th>
                    <th>label</th>
                    <th>author</th>
                    <th colspan="3">tools</th>
                </tr>
                <?php $i = 1;?>
                <?php foreach($books as $book) :?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><img src="<?php echo $book["gambar_buku"];?>" alt=""></td>
                        <td><?php echo $book["judul_buku"];?></td>
                        <td><?php echo $book["penerbit_buku"];?></td>
                        <td><?php echo $book["deskripsi_buku"];?></td>
                        <td><?php echo $book["tahun_terbit_buku"];?></td>
                        <td><?php echo $book["label_buku"];?></td>
                        <td><img src="<?php echo $book["gambar_penulis_buku"];?>" alt=""></td>
                        <td><a href="edit_buku.php?id_buku=<?php echo $book["id_buku"]?>"><i class="fa-solid fa-wand-magic-sparkles"></i></a></td>
                        <td><a href="algoritma.php?id_buku=<?php echo $book["id_buku"];?>"><i class="fa-solid fa-delete-left"></i></a></td>
                    </tr>
                <?php $i++;?>
                <?php endforeach;?>
            </table>
        </div>
    </section>
</body>
</html>