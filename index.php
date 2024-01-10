<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;900;1000&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap');
        * {
            margin: 0; padding: 0;
            box-sizing: border-box;
            font-family: "Nunito", sans-serif;
            text-decoration: none;
        }

        .popup-container {
            position: absolute;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
        }

        .popup {
            width: 300px;
            height: 300px;
            box-shadow: 1px 1px 5px #000;
            padding: 10px 20px;
            background: #fff;
        }

        .popup form p {
            text-align: center;
            margin-bottom: 20px; 
        }

        .popup form label {
            display: block;
        }

        .popup form input {
            width: 100%;
            padding: 5px 10px;
        }

        .popup form button {
            width: 100%;
            padding: 10px;
            background-color: royalblue;
            color: #fff;
            border: none;
            margin-top: 20px;  
        }

        .navigation {
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navigation p {
            font-family: "Playfair Display"; 
            font-size: 1.2rem;
        }

        .book {
            width: 250px;
            height: 300px;
            box-shadow: 1px 1px 5px;
        }

        .books {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

    <div class="popup-container">
    <div class="popup">
        <form action="" method="post">
            <p>login</p>
            <label for="">username</label>
            <input type="text" placeholder="masukkan nama pengguna">
            <label for="">password</label>
            <input type="password" name="" id="" placeholder="masukkan password">
            <button type="submit">masuk</button>
        </form>
    </div>
    </div>

    <div class="navigation">
        <p>perpustakaan digital</p>
        <a href="">kategori</a>
        <a href="">galery</a>
        <a href="">tentang</a>
    </div>

    <section class="books">
        <a href="" class="book-embed">
        <div class="book">

        </div>
        </a>
    </section>

    <script>
        const bookEmbed = document.querySelector(".books .book-embed");
        const popupContainer = document.querySelector(".popup-container");
        

        bookEmbed.addEventListener("click", function(){
            popupContainer.style.display = "flex"
        })
    </script>
</body>
</html>