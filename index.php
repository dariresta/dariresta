<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <title>OrderMerch Pre-Lander Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merienda+One&display=swap');

        :root {
            --bg-color: #EBECF0;
            --color-w: #FFF;
            --color-s: #BABECC;
            --accent-color: #7E90F8;
            --font: 'Poppins', sans-serif;
            --feneumorphism: -2px -2px 5px #FFF, 2px 2px 5px #BABECC;
            --feneumorphism-inset: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
        }


        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            font-size: 16px;
            flex-direction: column;
            font-family: var(--font);
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            letter-spacing: -0.2px;
            color: var(--color-s);
            text-shadow: 1px 1px 1px var(--color-w);
            background-color: var(--bg-color);
        }

        .container {
            padding: 50px;
            max-width: 1080px;
            margin: 0 auto;
        }

        .bumderan {
            -moz-box-shadow: var(--feneumorphism-inset);
            -webkit-box-shadow: var(--feneumorphism-inset);
            box-shadow: var(--feneumorphism-inset);
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;

        }

        .fomto {
            width: 90px;
            height: 90px;
            background: var(--bg-color);
            background-image: url("https://scontent.fsub2-2.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/118154083_1293017191045188_6024330906885362052_n.jpg?_nc_cat=106&ccb=1&_nc_sid=85a577&efg=eyJpIjoidCJ9&_nc_eui2=AeHSnbCvEcWlbqAwkm-HUhoXk04_lqKJlYiTTj-WoomViPk60ikgURXLvVAvSH7wIH6ADJ-LcgZGwsq3R1JZGoyG&_nc_ohc=yCppUEM9EJcAX-f1YaV&_nc_ht=scontent.fsub2-2.fna&tp=14&oh=648fd0145670546afcefb329c6fb2805&oe=5FB608FC");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .heamder {
            color: var(--color-s);
            text-align: center;
            margin-bottom: 35px;
        }

        .heamder h1 {
            font-family: 'Merienda One', cursive;
            font-weight: 400;
            font-size: 18px;
        }

        .btn-tree {
            margin: 20px 0;
        }

        .btn-link {
            font-family: var(--font);
            font-size: 1em;
            font-weight: 500;
            border: 0;
            outline: 0;
            width: 100%;
            background-color: var(--bg-color);
            color: var(--accent-color);
            padding: 10px 40px;
            border-radius: 12px;
            min-width: 190px;
            margin-bottom: 30px;
            cursor: pointer;
            text-shadow: 1px 1px 0 var(--color-w);
            box-shadow: var(--feneumorphism);
            transition: background-color 300ms ease-in-out;
        }

        .btn-link:hover {
            box-shadow: var(--feneumorphism-inset);

        }

        .btn-link:active {
            box-shadow: var(--feneumorphism-inset);
        }

        .ngocok {
            animation: ngocok-animation 4.72s ease infinite;
            transform-origin: 50% 50%;
        }

        @keyframes ngocok-animation {
            0% {
                transform: translate(0, 0)
            }

            1.78571% {
                transform: translate(5px, 0)
            }

            3.57143% {
                transform: translate(0, 0)
            }

            5.35714% {
                transform: translate(5px, 0)
            }

            7.14286% {
                transform: translate(0, 0)
            }

            8.92857% {
                transform: translate(5px, 0)
            }

            10.71429% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(0, 0)
            }
        }

        footer {
            text-align: center;
        }

        footer a {
            color: var(--accent-color);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="heamder">
            <img class="bumderan fomto" src="logo.jpg">
            <hr>
            <h2 style="color: black">dariresta</h2>
            <h3 style="color: black">food, beverages and dessert</h3>
            <small>Perum Bpd, Jl. Batu Butok RT.84 No.77 Muara Rapak.</small>
        </header>
        <main class="btn-tree" style="margin-left: 50px; margin-right: 50px;">
            <button class="btn-link" onclick="location.href='https://gofood.link/a/JicXbyL'">Go-food</button>
            <button class="btn-link" onclick="location.href='https://wa.me/+6282152247523'">Whatsapp</button>
            <button class="btn-link" onclick="location.href='https://instagram.com/dariresta'">Instagram</button>
            <button class="btn-link" onclick="location.href='https://goo.gl/maps/H3oPJZUU2ZJr6UUC8'">Location</button>
        </main>
        <footer>
            dariresta now also available on
            <img src="gofood.png" alt="" width="50px">
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- This pre-lander was created by Brandon Nilsson -->
    <!-- You're welcome to edit, reproduce and change this template as long as original contributation stays present on the website at all times.  -->
</body>

</html>