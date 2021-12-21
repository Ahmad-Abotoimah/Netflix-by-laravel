
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>single</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* CSS VARIABLES */
        :root {
            --primary: #141414;
            --light: #F3F3F3;
            --dark: 	#686868;
        }

        html, body {
            width: 100vw;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: var(--primary);
            color: var(--light);
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            line-height: 1.4;
        }

        img {
            max-width: 100%;
        }

        h1 {
            padding-top: 60px;
        }

        .wrapper {
            margin: 0;
            padding: 0;
        }

        /* HEADER */
        header {
            padding: 20px 20px 0 20px;
            position: fixed;
            top: 0;
            display: grid;
            grid-gap:5px;
            grid-template-columns: 1fr 4fr 1fr;
            grid-template-areas:
   "nt mn mn sb . . . ";
            background-color: var(--primary);
            width: 100%;
            margin-bottom: 0px;
        }

        .netflixLogo {
            grid-area: nt;
            object-fit: cover;
            width: 100px;
            max-height: 100%;

            padding-left: 30px;
            padding-top: 0px;
        }

        .netflixLogo img {
            height: 35px;
        }

        #logo {
            color: #E50914;
            margin: 0;
            padding: 0;
        }


        .main-nav {
            grid-area: mn;
            padding: 0 30px 0 20px;
        }

        .main-nav a {
            color: var(--light);
            text-decoration: none;
            margin: 5px;
        }

        .main-nav a:hover {
            color: var(--dark);
        }

        .sub-nav {
            grid-area: sb;
            padding: 0 40px 0 40px;
        }

        .sub-nav a {
            color: var(--light);
            text-decoration: none;
            margin: 5px;
        }

        .sub-nav a:hover {
            color: var(--dark);
        }


        /* MAIN CONTIANER */
        .main-container {
            padding: 50px;
        }

        .box {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(6, minmax(100px, 1fr));
        }

        .box a {
            transition: transform .3s;
        }

        .box a:hover {
            transition: transform .3s;
            -ms-transform: scale(1.4);
            -webkit-transform: scale(1.4);
            transform: scale(1.4);
        }

        .box img {
            border-radius: 2px;
        }

        /* LINKS */
        .link {
            padding: 50px;
        }

        .sub-links ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(4, 1fr);
        }

        .sub-links a {
            color: var(--dark);
            text-decoration: none;
        }

        .sub-links a:hover {
            color: var(--dark);
            text-decoration: underline;
        }

        .logos a{
            padding: 10px;
        }

        .logo {
            color: var(--dark);
        }


        /* FOOTER */
        footer {
            padding: 20px;
            text-align: center;
            color: var(--dark);
            margin: 10px;
        }

        /* MEDIA QUERIES */

        @media(max-width: 900px) {

            header {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                grid-template-areas:
    "nt nt nt  .  .  . sb . . . "
    "mn mn mn mn mn mn  mn mn mn mn";
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(4, minmax(100px, 1fr));
            }

        }

        @media(max-width: 700px) {

            header {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                grid-template-areas:
    "nt nt nt  .  .  . sb . . . "
    "mn mn mn mn mn mn  mn mn mn mn";
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(3, minmax(100px, 1fr));
            }

            .sub-links ul {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(3, 1fr);
            }

        }

        @media(max-width: 500px) {

            .wrapper {
                font-size: 15px;
            }

            header {
                margin: 0;
                padding: 20px 0 0 0;
                position: static;
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                grid-template-areas:
    "nt"
    "mn"
    "sb";
                text-align: center;
            }

            .netflixLogo {
                max-width: 100%;
                margin: auto;
                padding-right: 20px;
            }

            .main-nav {
                display: grid;
                grid-gap: 0px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
            }

            h1 {
                text-align: center;
                font-size: 18px;
            }



            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
            }

            .box a:hover {
                transition: transform .3s;
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1.2);
            }

            .logos {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                text-align: center;
            }

            .sub-links ul {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
                font-size: 15px;
            }





        }

    </style>
</head>
<body>
<div class="wrapper">

    <!-- HEADER -->
    <header>
        <div class="netflixLogo">
            <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
        </div>
        <nav class="main-nav">
            <a href="http://127.0.0.1:8000/movies/show">Home</a>
            <a href="#tvShows">TV Shows</a>
            <a href="#movies">Movies</a>
            <a href="#originals">Originals</a>
            <a href="#">Recently Added</a>
            <a href="{{route('movies.index')}}">admin</a>
            <a target="_blank" href="https://codepen.io/cb2307/full/NzaOrm">Portfolio</a>
        </nav>
        <nav class="sub-nav">
            <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
            <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
            <a href="#">Account</a>
        </nav>
    </header>
    <!-- END OF HEADER -->

    @yield('content')

<!-- FOOTER -->

    <footer>
        <p>&copy 1997-2018 Netflix, Inc.</p>
        <p>Ahmad Abotoimah</p>
    </footer>

</div>
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>
