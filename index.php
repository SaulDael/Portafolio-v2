<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('conexion fallida');

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' 
    AND email = '$email' AND number = '$number' AND message = '$msg'") or die('Fallo la Consulta');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'Mensaje Enviado!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('Fallo la Consulta');
        $message[] = 'Mensaje Enviado con Exito!';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

   <!-- font awesome cdn link -->
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- aos css link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>


<!-- headers section starts -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Inicio</a>
            <a href="#about">Sobre mi</a>
            <a href="#services">Servicios</a>
            <a href="#portfolio">Portafolio</a>
            <a href="#contact">Contacto</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </header>

<!-- headers section starts -->

<!-- home section starts -->

<section class="home" id="home" style="text-align: center;">

<div class="image" data-aos="fade-rigth">
<img src="images/user1.jpg" >
</div>

<div class="content">
    <h3 data-aos="fade-up">HOLA, SOY SAUL DAEL GUZMAN HERNANDEZ</h3>
    <span data-aos="fade-up">Desarrollador Web</span>
    <span data-aos="fade-up">Diseñador Web</span>
    <span data-aos="fade-up">Diseñador Grafico</span>

    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eius facere obcaecati cumque id veritatis 
    voluptatibus totam optio quas officia fuga, reiciendis ad corrupti in placeat est aut dignissimos sint?</p>
    <a data-aos="fade-up" href="#about" class="btn">Sobre mi</a>
</div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading" data-aos="fade-up"><span> Biografia </span></h1>

    <div class="Biografia">
    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum velit temporibus at, enim optio rem
        quas fuga debitis atque vero nisi neque impedit 
        minima corrupti ratione aperiam nihil delectus! Laudantium.</p>

        <div class="bio">
            <h3 data-aos="zoom-in"><span>Nombre : </span> Saul Dael Guzman Hernandez </h3>
            <h3 data-aos="zoom-in"><span>Correo Electronico : </span> sdgh.guzman@gmail.com </h3>
            <h3 data-aos="zoom-in"><span>Direccion : </span> Estado de Mexico, Ecatepec </h3>
            <h3 data-aos="zoom-in"><span>Numero : </span> +52 5579977165 </h3>
            <h3 data-aos="zoom-in"><span>Edad : </span> 23 años </h3>
            <h3 data-aos="zoom-in"><span>Experiencia : </span> 1+ año </h3>
        </div>

        <a href="#" class="btn" data-aos="fade-up">Descargar CV</a>
    </div>

    <div class="skills" data-aos="fade-up">

    <h1 class="heading"><span> Habilidades </span></h1>

    <div class="progress">
        <div class="bar" data-aos="fade-left"> <h3> <span>HTML</span> <span>95%</span> </h3> </div>
        <div class="bar" data-aos="fade-right"> <h3> <span>CSS</span> <span>70%</span> </h3> </div>
        <div class="bar" data-aos="fade-left"> <h3> <span>JavaScript</span> <span>60%</span> </h3> </div>
        <div class="bar" data-aos="fade-right"> <h3> <span>PHP</span> <span>55%</span> </h3> </div>
        <div class="bar" data-aos="fade-left"> <h3> <span>TypeScript</span> <span>60%</span> </h3> </div>
        <div class="bar" data-aos="fade-right"> <h3> <span>React</span> <span>80%</span> </h3> </div>
        <div class="bar" data-aos="fade-left"> <h3> <span>Angular</span> <span>65%</span> </h3> </div>
        <div class="bar" data-aos="fade-right"> <h3> <span>Python</span> <span>60%</span> </h3> </div>
    </div>

    </div>

    <div class="edu-exp">

    <h1 class="heading" data-aos="fade-up"> <span> Educacion y Experiencia </span> </h1>

    <div class="row">

        <div class="box-container">

        <h3 class="title" data-aos="fade-rigth"> Educacion </h3>

        <div class="box" data-aos="fade-right">
            <span>( 2020 - 2021 )</span>
            <h3> Desarrollo web </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        <div class="box" data-aos="fade-right">
            <span>( 2022 - 2023 )</span>
            <h3> Diseñador web </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        <div class="box" data-aos="fade-right">
            <span>( 2023 - 2024 )</span>
            <h3> Diseñador Grafico </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        </div>
        
        <div class="box-container">

        <h3 class="title" data-aos="fade-left"> Experiencia </h3>

        <div class="box" data-aos="fade-left">
            <span>( 2022 - 2023 )</span>
            <h3> Desallorador Front-End </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        <div class="box" data-aos="fade-left">
            <span>( 2023 - 2024 )</span>
            <h3> Desallorador Back-End </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        <div class="box" data-aos="fade-left">
            <span>( 2024 - 2025 )</span>
            <h3> Desallorador Full-Stack </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium officia id nemo iste obcaecati hic!</p>
        </div>

        </div>

    </div>

    </div>

</section>

<!-- about section end -->

<!-- services section start -->

<section class="services" id="services">

    <h1 class="heading" data-aos="fade-up"> <span> Servicios </span></h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i> 
            <h3> Desarrollo Web </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i> 
            <h3> Diseño Grafico </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i> 
            <h3> Bootstrap </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i> 
            <h3> Seo Marketing </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i> 
            <h3> Digital Marketing </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i> 
            <h3> WordPress </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat voluptatibus natus mollitia unde odio.</p>
        </div>

    </div>


</section>

<!-- services section end -->

<!-- portfolio section start -->

<section class="portfolio" id="portfolio">

    <h1 class="heading" data-aos="fade-up"> <span> PortaFolio </span> </h1>

    <div class="box-container">

    <div class="box" data-aos="zoom-in">

        <img src="images/1.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    <div class="box" data-aos="zoom-in">

        <img src="images/2.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    <div class="box" data-aos="zoom-in">

        <img src="images/3.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    <div class="box" data-aos="zoom-in">

        <img src="images/fondo3.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    <div class="box" data-aos="zoom-in">

        <img src="images/5.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    <div class="box" data-aos="zoom-in">

        <img src="images/6.jpg" alt="">
        <h3> Desarrollo Web </h3>
        <span>( 2020 - 2021 )</span>

    </div>

    </div>



</section>

<!-- portfolio section end -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading" data-aos="fade-up"> <span> Contactame </span> </h1>

    <form action="" method="post">
        <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Ingresa tu nombre" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Ingresa tu correo electronico" class="box" required>
        </div>
            <input data-aos="fade-right" type="number" name="number" min="0" placeholder="Ingresa tu numero" class="box" required>
            <textarea data-aos="fade-left" name="message" class="box" required placeholder="Ingresa tu mensaje" cols="30" rows="10"></textarea>
            <input data-aos="zoom-in" type="submit" value="Enviar Mensaje" name="send" class="btn">
    </form>

    <div class="box-container">
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>Telefono</h3>
            <p>+52 5579977165</p>
        </div>

         
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>Correo Electronico</h3>
            <p>sdgh.guzman@gmail.com</p>
        </div>

         
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Direccion</h3>
            <p>Mexico, Ecatepec - 55070 </p>
        </div>

    </div>

</section>

<!-- contact section end -->

<div class="credit"> &copy; copyrigth @ <?php echo date('Y') ; ?> by <span> Guzman Hernandez Saul Dael </span> </div>

<!-- custom js file link -->
    <script src="js/script.js"></script>

<!-- aos js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

    AOS.init({
        duration:800,
        delay:300
    });

    </script>
    
</body>
</html>