<?php
    include 'conn.php';
    $books = mysqli_query($conn, "SELECT * FROM buku");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/8061/8061456.png?ga=GA1.1.1095638270.1704336278&semt=aishttps://cdn-icons-png.flaticon.com/128/8061/8061456.png?ga=GA1.1.1095638270.1704336278&semt=ais" type="image/x-icon">
</head>
<body>
    <section class="navigation">
        <div class="box"></div>
        <div class="box">
        <p>perpustakaan digital</p>
        <ul>
            <li><a href="">buku</a></li>
            <li><a href="">kategori</a></li>
            <li><a href="">fasilitas</a></li>
        </ul>
        </div>
        <div class="box">
            <a href=""><i class="fa-solid fa-bookmark"></i></a>
            <a href="#dark-theme"><i class="fa-regular fa-moon"></i></a>
            <a href=""><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBISERIREhIYERESGRESGBISEhERGRgSGRgZGRoYGBkcIS4lHB4rIRgYJz0nKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGhIRGDQhJCE0NDExNDQxNDQxNDExNDQ0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0MTQ0NDQ0NP/AABEIARMAtwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBQYHBAj/xABBEAABAwIDBQYCBwYFBQEAAAABAAIRAyEEEjEFIkFRYQYTMnGBkUKhByNScrHB8DNigpLR4RRjorLxU3ODo8I0/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAIhEBAQEBAAMAAQUBAQAAAAAAAAECEQMhMUETIjJRYUIE/9oADAMBAAIRAxEAPwDRNapmtTtYpGsXdjgA1GGow1EGovABqINRhqcNUVHlTwpcqWVOgMqUKSEsqCOEsqkhNCAMqEhSwmhOiOEJapS1NlQRFqAtUxCYhUQEISFM4IC1GURagIUxCEtVlEBCdGQkqj1tajDUQYjDVhsIaiDUQCcBQCGogEQakGocCAnhFCeFFBCfKihKEEZCUKSEMKoGEiEUJoQAQmIRwkQgicEBCmIQkKiIhAQpSExCohIQkKUhCQjKFwTI3BOtD3hqINRBqIBcmgAIgEUJQimATwnARQoAhPCKEoQDCUIoShUBCaEcJQgjhKEcJoQRwmIUkISEAEISFIQhIVRGQgIUpCAhUAQgcFIUxCohISRuCSMrKE8IgEoXNswCeEoTwgaEoTwnhFNCUJ4TwgCE6eEoQDCZFCSASEJCLMEyIFMUSZUCQmIRFMgjcEBCkcEJVRGQhKkIQFUA4JJykqLSE4CKElzU0JQnToBhKESSAYSTpIGSTpigjrVGsa57yGsaCS42AA4rBbV7dFznU8NSJBkd6Rm9WsB/FentHVqY/Ft2bScW0qcPrPHTUHoLD7x6LR4bYlChTFOnTa0NGsAk9SeJWNa58bznv1y2ttPGtqZjXde8te6Olv6q/wBk9uXMIp4oZ2/9RkBw+83R3pC83bLY5LTVpDfYSYHEcR5rnL8S6ZlXO5Ym8XNfRWExVOrTbUpvD2OuHNM/o9FMuN9ju0zsLUbnP1FQhtRvI6Zx1HzA8l2MEESDINwRxC0ySYoihKoEoCFIUJCACgKkIQFVEZCSchJUW8JQnhPCw0GEoTwnQDCUJ4SUApIoQoEoMZXFOnUqHSm17/5RKnVP2sq5MFXPEtDf5nAIM32EFXJi8W1jaj6tQtLnvLLM1AsdS6Vqqe0M9J730zTDZnea8HqCFXYTYVNuCw1CoCIYC6Hvb9Y8ZnmAYJlx1B4QoNoYGng8IMLTc+Hk7z3Oe6/Im646v5ejGe8itxO0+8BLMPUey4zAMaP9RErnPabANbU72m0sY47zHCCx5v7FdFq7DrVKLG08Q6myG2luWAI0yk9ddT6LPdo8GaeHcypUFRwEFwblWZZLLGt5upZfwwzDDAeZIXZPo82t3+EDHGX4cimetOJYfaR/CuNvGWmz1d7/AKC1n0dbT7nHCmTDK4NM8swuw/KP4l6JXjjsSYokxVUJQkIyhKoAoHKQoCqiMpJ0lRcQlCQTrm0aEoTpoQJNCdJAyRTpigErOduHxhQ3g59MH0k/ktGVkfpAf9TSZxc8n2Ef/SEWWPxTGYrPXcWUqLaRYAHEOqvJaBA1IjTqqTtkwOdTcX1KOSRdjyDcnxe9uXkr/YOLpY7CteQHvAYyo3i2o0BwPTg4HrzXj242v4WPOWdXOl0QRqRJ1Op4rz6nJ7ezx2WqfYmPaKbqIqd5Ac4GfUhZftVXzU3DmYV8xlLDiq8Ca1WGufxP9BZY3buLGZjZsHSfS8LGfepG9+s1S49mVoERqPnp8kFCsadWnUbqw06g+8CHD5hT7Uqh7mAW3Sf6Ly5Dlba4kfP+hj0XrfOfQ+BxTatKnUaZbUa149RKnKxf0Y7T7zCGg479BxaB/lu3m/iR6LaKqZMnTFUA5CUZQlURlJOUkRbp0ydYaMknTIGSSSRSTJ0iiBKwH0i4iH0m8GBp9S4n8GrfFcv+kJ81X9CxvpEJVjI7G7TVsBijVpHM1wyvpvnK9kkgOjQgkw7hJ5wugO2hWx+FZi6RDGPzhzCSXNe0lpBIF9PYhcix4+sPQn8St/8ARhtD6uvh3HdDhUA6PEfi0+4XHyT9rr4dc1x4MdinAkEy7osticR9aC68cNR5LpPaTZtOnQr4iBIG6OpMAe5C5vTwpcb3P4n9XWfDjvtv/wBG/kBXqS8ub4bARezRH90qjmSCxxE6sIiDzHRWHcMYJN+P/KpsTUzOJXo5x5Wk7NbXOAxArQX03NyvY06tmxHCRf3XZdlbSp4qk2tSdmY7mIIPIjndfPdHFEAsddpte8eS6B9F+18j61B5hj8j22kNcLE+Xh/UpB1AoSnlMVoCULkRKjcgFySYlJVFynTBOsNEkVFiMQ2m0veYa3UxK87dq0TbPB6hwU7P7amdX5HsTIKddj/C4O8iNPJGiUkikkqgXGFybtuS99WLlpB9miV1Wu6Gk8lyx1RtWvWL/C97w1w4t0gHgYAI8ipVjm2KfLi5XfZLGCjiabiYY490/wC48iD6OAKj2tswNqOyuBubABsjyXhwzLkEwCCJnjwU530ktl66T2yLhhWUzpUqsH8Ia534tCxoi8Wm3pxWs7WYjPgcG/Uuh/8A6/7rydkezZxxc97jTo08uZzQC5zyJytmwtcnqOanj/bn235f3a9Mti3BzcoKqalOF1ftD2PwYaAw1KZHFtTNPmHAj2hYvH9mKjAXU6neR8Dm5XehmCfZL5M9T9LXO8ZeF7sBjHUyH0zlqNIgji2DIXjqghxBEEWINiDyKVIX6LTDvvZTaBxGDpVTqc7TH7riLeytiVlvo5bGz6YjVz3Tzlxv+XotQVsC5A4o3KNxVAkpIXFJVF4nlMkubTM7Y2jReDTZUNZwcc9MPILGiblrYOqy9LF0DUnvKoAPgzBzfI7uYe63u2MPUdSeKIYKjoGYhoMTJF9bSsG/EYpriC2nkJIs+m0cj4TK82pZfb2YsufQcXtJorB9Go7M3QgkR05rR7J7WAwzECDp3jB/ub/T2WGx7t+7GNP+XefNRtqkcT7KTVnxbnOvVdmY8OAc0hzTcEGQRzBRLnOxtq1qIBa6WH4XXafTh5hbXZm1qdcQN141YTfzB4hds7mvTz78Ws+/sejGUS9jmgwSDB1XE8bjn4erWw9RhZD3i7Te5ItwnWeq7mVn9v8AZLC457KlUOa9sNzMIGZoMgOBF9SulcnD8fi3/EZ4gGXEDqvM0uADnCJMtGlhx8rrZdsuygwtQGmZpky3NJI6SbHRYzHvcXjNJ4Dr1lYl6us2fWlp4/vsHRpEyaTqrY6HIW/Ikei6d2Fw3dbNokiHVB3p8nRl/wBIauP9lsI+rXZTbrULWjpvNk+gM+i7tiMtOm2m0QxjWsaOTWiAPYKa9Z43iXV6zm2qsuKonmTCsNpVZcVmtv4zusPUcDD3/Vt5y6ZI8hJXnk7Xr1ZnPf6Y3bGKFWvUqN8JMDq1oDQfWJ9V5GapQjY1euT8Pn29910n6L9q1DnwrgSxoztN93mPLVdGJWb7E7Ep4TDB7Hio6uG1DUAiWES0DpB+a0ZK1AzlE4o3FROK0GcUkDikqjQpJpSXNpBjsIyswsfMWILXFjgRoQRoVzbtdsnE06rnsphlGd11NgeMsfESJDibmdSuoJFY1mVvHkuXEMO+qfHSzcJbmafzVi/ZtYs7zuKjWC5OQx7rrsJFT9P/AF0/W/xyDPU7sFhlrTcRDh5jgvdhMVMEEtcLggkEHmDwW42nsKnU36YDKnMDdcPsuHJY/HbLLS7K0se3xMPDqOY6rjrNzfbvjU1PTS7K7QgwyvY8KgFj98DTz08loWOBggyDcEXBC5bQxBaQ13BXuA2hUp3pvtqWG7T6cPMQtZ8lnrTG/DL7z6aXtFs1lem5rhNlx3bew+6MfBmBb0dxbPVdapbfY8Zag7t3PxMPrw9fdUnaLZrajHcWuBII+RBVmpL2JcW55VJ9HOADqtTEkbtNuVv/AHH2d7AH+cLW7VxWolVvZvDnC4JjX2qPmo+LbztPkGrw47FyTdZ8mu3014ccna8eKfJWH7WYzPWFNp3aQg/fNz7CB7rS7T2gKNN9Q3OjQeLzoP1yXPnOJJLjJcSSTxJuSr4s/ljz6/5MEbCgCIFd3kdf+jXane4Q0XGX4d0Dn3b5c32OYegWvJXH/o62j3WOZTJ3a7X0yP3oztPnLY/iK66StwhnFRucncVE4qwM5ySBxSWhpU6FJcmhJpTJIEkhSQFK8mPwLKovuvHheNR/UdF6UxdAJNgLkm1ksl9VZbL2MLtXZmV+V4yP+Fw8L/unn0VWA+m6DotNtra4qB1PIw0ycsvuZkszdIOX+a6zNbEuy5cwFsw7yCQMpMTM2c0ieHM8OF8N/D05885+56mYoEXUnfkCGOgH4dWn0Waxj6tMlzmbg+NskawJ5X/FRs2i5c7ix1z5M6+NltTHgMaJ4An1CzdXEZpvZeM4h9Q3VP2hxpY3umA73jeOX2R+aZzbeJvcznqt25tHvqkN/ZskN6ni71VaUmm4TZl6JOTjw61dXtGE8qMFEFpl6cFinU306rDD6bmvH3mmR6WXddk7Tp4uiyvTO67Vp1a8atd1H91wFpW6+jPafd1qmFcd2s3OySP2jNQOpbP8gWs0dOcVG4pyUDitCNxSQuKS0NOnlDKS5tClNKGUpU4CSQylKcDqt23iMlPKDBeYmY3RcyeHKeqsJWY2riO8rECHBktESfCd6/G+oF2wDxTgzW08S4vfTaTlDQd1laXVMr48Ny4ENBAkyDa4jx1a8AwDD89gyoWyBUbGUOiILRDZ4botEOJqA4mt8RJY6d6oSGOaCHZLEAAgiC2xNhJXlxk5Da2Um7HmczGDi/euHaF3LMDIdWevY0scSGlkuLgQ05HbzwCTET4SDLTcA6STQ1qLmnMwW4siPbl5dfRWbKpLRvFwM2NSm5pA7w+F+psAYPCbBqgrAtJJkAyLtLdLTrezdQbzNrBTUli51ZfSOliHRlzBmhPExbQcdR7qpx2KY/SLzInQ8l6sdTkEDUS7gIixHmCfx6rOVAQ4hScz8XWrr6VQ36IQmcjZojJkYCEi6IJAlNhcQ6m9lRhyvYWva4cHAyCooTnmqO57G2k3FYenXbbON5o+F4s5voflC9LyuWdh+0AwtQ0qjooVSJJ0Y/QPPQ2B8geBXTyVuBnFOgcUy0NTKUoAU8rmopSlDKUoHSQylKKHE1cjHP8AsgnzPAe6xbHy+5Btm3iHzAuYmHC4uCDvNDuEaXblQilA1cQI52Jjy0WRY/K2oRBYWnxBrGkghsOaZkOJAnUAXm5cRksa+MS8kGYa6HAmAAYzBhAkZRe1xIIkBHim7rhFri7HaS8ic5v8N4FuLhGXx490V5IOrQZZUaYMAyCZDt50zvXMzeJ3HdmIIt4MvBp1cZmS7gOom5IfZr8zCLnqO7M72pMXIB4i480+LYA3PAEb0gOb+9LcpLXAyeVzqLLx7OqQ8g3uCJDyTdt+F/I+hujx1a5a3RrH6DJJLR+IaeUEHhdPwAqnhbTXUA39Boel4ExbP41sPV2928PIiRbWJ8x4Da9hfQKmxRl8/msjyP1UjdEztU/BIE/gnjkhJ9VfYTYD3AF7xTmN1rc5AibmQJ6XVnsUwanCvKnZsxu1b/vMsPUG/DhPReLEbErsBIIqAcjlOkmA7WL/AC5qiuIhdB7Edo87W4Ws7fbak8/E0fAT9ocOY8r89JIJDhBFiDYg8k7H3sYIgggwQRoQUl4O6FJZvsftLEYigTXbIaQGVjbvBxtxI+1oZ5gpLoOkSnlRynlc1HKUoJSlAcpShlKUFN2lfDGa/GbCfC2Y5zEkRexVNhdm1KlOvUp5YvlBqkOc8WeQ8N3QJABEERaCC0WHaqqGtzZmA02PqAVCG5su9lZOr9wEDosj20biWGng6FSo5hpMqPp05kbz8udzdRBm50hErNbUYW1nNLYLd0jI8cJtc8QPtfgSdJ1geH3Wt0z3uTwiNekaBbW36jXd2aYcynDHNkta2zA6+uWLRzvqF58O6xGk30a25DQeMz8/PVQBJZUmYm5Ajm2//KOoSQSTOYHnxF4jTh/c6G2maj2saJJIsA5xHxTlb6XJny42zdlP7uBSfDRJcKZA18VhAsJ5fJBQVnST6iBOlxp6t/VxUPeJhXNbCOa43kGbg+fO3AKkxLIe4ciVKAi6KCYaBJJAAHEmwCVGm57msaMznGABxK2Ow+zrqbu8qlpfuhoaZDQfE4kjlOml+asnQGxthimA94D6tvJs2AbyPXloriAP6xwJgQOsW99VO8dNfIaje9QwAX+1eQZXnc46gAG2pvmcAAAIOjY/TVv4AcT6AxI58gNeGvT1QO8oPmJROdc2nKA0SGSNJMaDn6jkocx18IjMSY43nzPPpZQeLH7Op1buG+LSJHoTx/XkpuzXZvDvqubWzPygOawnK0kG4Ma8OPNTE8NLa3H9/wBc9PbsTN/iKeWbEz5ZXST+uiT6NZlDRAAAEAACAByASRuKS2L6U4KjDkQKwDlECow5FKKKU0ppTSg8G2dg08acOyq3Mxpql29G6QAbeeQz0R9oqlPJUDyG0y0h1w0ZIgg9It6oMRthwqOoUA2piqbakUXPyBweGOzF3IR+AtKo9osfXqNw1WH921tStALRmiWtA4AuObypwoMDtOv/AIlzsRTa5zQILizLBbwE3NoBgajjw8NBwFhAGojIOLrCPL/grQ0PqqlSg45qgL6jy1hDGh7i+ATr4iBzVRiKAc4upNOR78jGg3c8i5YBqCbT+UKFjZfR1s7eqYpwO79SyYA4GoQB/CP5uq3hqBoL3HdaJP5BeHZOBbh8PTotj6tsEgRLzvPd6uJPqrGvgmVaOVxIBk2JHMLSOdYsYfE1KzzSa2nmLGGmO7JcCcz7aySfZc92/g2U8QWUy5+YNdBgnM4kBojXQe66xX2fQpHumuhrRYG8BZnD7NpjE18S8yZcynOVoa1gDM97g5oMwbOB5q3PpJfbz7A7PtoM7ypDqzmu1GYMBbYgcRNidQdFc4m0gyLuF94izGEyJkjM+/ETyU2IfOcC5JqjLmkZy1rHMIaHG+aQIJPC1jWYnEgPBDgN5hDnPYzV7303/E+YYGybng1wEhIoapkkWBd1e4HO7LBMXGUD0d0UBdJEN1c8kMOU2HECP3dT8TlG6RlaBaGENHJr8p3HNI0fGoJjTlE540Ma2O8waZ7ajnxClEjn6g5rybDWCDYTz5TpqhkdZ3uMmb9YBvz9QgbewII0vUc+YMQefkZ8PEIy7mYngNekfryUDOPpyaL31/X6Jvuy9KX1Hn4QGDlJMwPQD3HkKbA4SpVflpi3F3IcyeH97cVs8FhW0abWN0GpiJdxK1IJXlJA9yS0yuw5HmUAciDlONJgUWZQSiDlDqaU2ZAClKCPC7Ipsr1Ma54YXBkkkAAMa9jsxOgIe3+QLmOM7QV6Faq6jUa+m5+fJlLmuyjI0SYPga0EjWAtF2iwONxNR7HODMJTILAHHelrSS4cXZg6/AFZR+zQCRMnmuOtXvHbOOzr29osKHYysXvIY80x3bTGbIxocXfuy4iPLyVt2Twne1g8iGUYcItLtG/mfRZLb+PfU2niWsqZab6hEtaxxyi+Vk8SZHKTyXTuy2FNPDhzhldUOfL9lsQ0ewn+IreXK1dEr3aU2+QVdKi2ntF1HDVKgAf3YbDXcZMRK3YnWb2u1prOJJFvs/3VJs57i8hoMtghu+Mz5s4xP2o5DO48FY1MScQK7yBT7um+prmmHNbHCPEqXZhh7w4CCLyYHEGZGkACeXz1WZ9WWJqQN0kwG5bnMWtk03y5xyNLzlJLXZgCTuhyosRUs6DlDQ9pLSWNaHAMIL3Nk78vvlJG84EQHWW1qmWmwa946BmDYc86BzN0Oc7Ut0lgmJcqJ75IIMkZchcQSRfJDQRGYB1zlu3NEARlaney7reIuJGXWXMY4BoGd5MA+G4IEmwaxqQ4Ncb75NyLnPlzMaTZxaLucZnzKhZUIsOEQSbn4KZcXNtcvaQAdSJkuKhxDxlDmlpbvEZcuW0tHE5oBgnS3KApUetlcOzFoJiQQWzugzxJkedxzVhsjBjEAvBhgJaSwZiSNQDp6+SpMC91R7iBIkxbrr6SPdbTs+1jWGm0tzS5xa0EASrmdLVzhqTadNrGtDABoOfEk8Sk8pyVE9y0BcUlG4pIdXQRhJJGhImpJIHThJJQRY79m/yXNsUd93qkkvNv+VerH8Y9WMw7P8ZZjRLQ6wA3nE5j6rougAFuCZJdsPNTqs7T/wD4q33qX+5JJbZvxka7iMDj3Cx7jX/yMXi2LdzTxOYEi3xdEkk19TIO0VgyLXrt1OndCoBPR0kcpIFiVV4t5DmgGM3ezz/Yh1jqL3skksrSAk1uTCQ0cAO6edND4Rr+ZUNaoX4Z7nGTuDlYRwFkklL8T8rHsq491XZ8P1RjrJ468Vf9nf21T7v5hJJdM/Gb9jQPUDkkkaRuSSSQf//Z" alt=""></a>
        </div>
    </section>

    <section class="main-page">
        <div class="search-container">
            <form action="" method="get">
                <input type="text" name="" id="" placeholder="masukkan pencarian anda disini...">
            </form>
        </div>
    </section>

    <section class="content-container">
        <div class="content">
            <div class="cards">

                <?php foreach ($books as $book) :?>
                    <div class="card">
                        <div class="cover-card">
                            <!-- <div class="card-title">
                                <h3>Self Knowledge</h3>
                            </div> -->
                            <img src="<?php echo $book["gambar_buku"];?>" alt="">
                        </div>
                        <h3 style="padding: 10px 0 0 0;"><?php echo $book["judul_buku"];?></h3>
                        <div class="card-author">
                            <div class="author-profile">
                                <img src="<?php echo $book["gambar_penulis_buku"];?>" alt="">
                                &nbsp;
                                <p><?php echo $book["penerbit_buku"];?></p>
                            </div>
                            <p></p>
                            <p><?php echo $book["tahun_terbit_buku"];?></p>
                        </div>
                        <p><?php echo $book["deskripsi_buku"];?></p>
                        <p><i class="fa-solid fa-tag"></i> &nbsp; <?php echo $book["label_buku"];?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</body>
</html>