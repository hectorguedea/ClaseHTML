<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Héctor Guedea - Software Engineer</title>
    <style>
        /* Código de CSS */
        body {
            margin: 0;
            font-family: Helvetica, Arial, sans-serif;
            color: #d79423;
        }

        header,
        #header {
            position: relative;
        }

        header {
            background-color: #f4f1b9;
            padding: 10px 0;
            /* padding-left
            padding-right
            padding-bottom
            padding:top*/
        }

        #header,
        .container {
            width: 70%;
            margin: 0 auto;
            overflow: hidden;
        }

        #header img {
            float: left;
        }

        nav {
            float: right;
        }

        nav {
            /* margin = margen fuera del elemento
            padding = margen interno */
            padding-top: 15px;
        }

        nav a {
            color: #d79423;
            margin-right: 8px;
            text-decoration: none;
            font-size: 13px;
        }

        nav a:hover {
            color: #000;
        }

        nav a {
            display: inline;
            float: left;
        }

        nav a img {
            float: right;
            width: 25px;
            height: auto;
            display: block;
        }

        .container h1 {
            font-size: 16px;
        }

        .container h2 {
            font-size: 13px;
        }

        .container p {
            text-align: justify;
        }

        .container a, footer a {
            color: #cfca77;
            text-decoration: none;
        }

        .container a:hover, footer a:hover {
            color: #bbb7b7;
        }

        #descripcion {
            overflow: hidden;
        }

        #descripcion img {
            width: 150px;
            height: auto;
            float: left;
            margin-right: 10px;
        }

        #tecnologias {
            margin-top: 15px;
        }

        .lenguajes {
            margin-top: 20px;
            overflow: hidden;

        }

        .lenguajes img {
            width: 125px;
            height: auto;
            float: left;
            margin-right: 10px;
        }
        #contacto form {
            padding:20px;
            background-color:#d79423;
        }
        #contacto form input, #contacto form textarea{
            display:block;
            margin-bottom:10px;
            padding:5px;
            font-size:15px;
        }
        #contacto form textarea{
            width:300px;
            height:100px;
        }
        #contacto form input[type=submit]{
            cursor:pointer;
            padding:10px;
            font-size:16px;
            background-color:#cfca77;
            box-shadow: 7px 7px 30px -9px rgba(0,0,0,0.75);
            margin-bottom:0;
        }
         #contacto form input[type=submit]:hover{
         background-color:#f4f1b9;
         }

         footer{
          background-color: #f9f8e2;
          text-align:center;
          padding:15px;
          margin-top:20px;
         }
         footer p{
             margin-bottom:3px;
             margin-top:3px;
            /* margin:3px 0;*/
         }
       
    </style>
</head>

<body>
    <!-- 
        Página Online:

        https://personal--hectorguedea.repl.co
    -->

    <header>
        <div id="header">
            <img src="img/logo.png" title="Héctor Guedea" />
            <nav>
                <a href="index.html" title="Home">Home</a>
                <a href="personal.html" title="About">About</a>
                <a href="http://www.fb.com/hectorguedea" title="Facebook"><img src="img/facebook.png"></a>
                <a href="http://www.twitter.com/h_guedea" title="Twitter"><img src="img/twitter.png"></a>
            </nav>
        </div>
    </header>


    <div class="container">
        <h1>Software Engineer</h1>

        <section id="descripcion">
            <img src="https://media.licdn.com/dms/image/C5603AQEuPld8vq67AQ/profile-displayphoto-shrink_200_200/0?e=1545868800&v=beta&t=YiZIVN9K-wqyaUDYkDY0YTcpmT5j5FgNKkKcsVqhc_M"
                title="Héctor Guedea" />
            <p>10 years of experience in software development. Team leader, software engineer, manager, researcher and
                programming
                teacher. As result, I got abilities to manage multi-disciplinary projects and to navigate complex
                challenges, with
                extra attributes such as internal and external team communication, and able to adapt quickly to changes
                in requirements
                and innovations in programming languages.</p>

            <?php
            //Declaración de variables
            $nombre ='Héctor Guedea';
            $edad = 40;
            $club = "Club de Hacking";
            $donde = "Talentos";
            
            echo '<p>';
            echo 'El maestro '.$nombre.' tiene '.$edad.' e imparte el '.$club.' en '.$donde.'.'; 
            echo '</p>';
            ?>
            <p><strong>Keywords:</strong> <a href="https://www.google.com/search?source=hp&ei=vQXSW7bRM4fMwQL5qqiABw&q=web+development+&oq=web+development+&gs_l=psy-ab.3...2600.5452.0.5703.12.9.0.0.0.0.310.802.2-2j1.3.0....0...1c.1.64.psy-ab..10.2.519.0..0j35i39k1j0i131k1.0.5x6BtbAAb24"
                    title="Buscar en Google Web Development">web development</a>, <a href="https://www.google.com/search?ei=xQXSW4PYE4nUwQLnwqywBA&q=frontend+development&oq=frontend+development&gs_l=psy-ab.3..35i39k1j0l2j0i10k1j0j0i203k1j0i10i203k1j0i203k1l2j0i10i203k1.273358.280485.0.280636.30.24.4.0.0.0.493.3076.0j1j2j4j2.9.0....0...1c.1.64.psy-ab..20.10.2143...0i67k1j0i131k1.0.90Y7hCoJmT8"
                    title="Frontend">frontend</a>, <a href="https://www.google.com/search?ei=3gbSW4PaM4fWkwXhwKTYCw&q=backend+development&oq=backend+development&gs_l=psy-ab.3..0i7i30k1l10.27801.28640.0.28830.7.7.0.0.0.0.236.236.2-1.1.0....0...1c.1.64.psy-ab..6.1.235....0.7BldP3cZL6Q"
                    title="Backend Development"> backend</a></p>
        </section>
        <section id="tecnologias">
            <h1>Lenguajes de programación</h1>
            <p>Tengo experiencia con los siguientes <i>lenguajes de programación</i>, desarrollado diversos proyectos.
            </p>

            <div class="lenguajes">
                <img src="https://image.flaticon.com/icons/png/512/490/490273.png" title="Algoritmos" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/230px-HTML5_logo_and_wordmark.svg.png"
                    title="HTML" />
                <img src="https://lenguajecss.com/img/css3-logo.png" title="CSS" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png"
                    title="PHP" />
            </div>

        </section>
        <section id="contacto">
            <h1>¡Ponte en contacto conmigo!</h1>
            <p>Estoy abierto a oportunidades laborales como <strong>software engineer</strong>.</p>
            <form method="POST" action="personal.html">
                <input type="text" placeholder="Agrega tu nombre" name="nombre" required>
                <input type="text" placeholder="Agrega el asunto" name="asunto" required>
                <input type="email" placeholder="Agrega tu email" name="email" required>
                <textarea name="mensaje" placeholder="Agrega tu mensaje" required></textarea>
                <input type="submit" value="Enviar mensaje">
            </form>

        </section>



    </div>
    <footer>
        <p> <strong>Code is the new poem.</strong></p>
        <p> <a href="mailto:hectorguedea@gmail.com">Contact me, now!</a> </p>
        Héctor Guedea
    </footer>

</body>

</html>