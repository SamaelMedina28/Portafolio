<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samael Medina</title>
    <!-- * Hoja de estilos CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- & Animate.css -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-slate-900 text-white p-0">
    <!-- * Inicio de navegacion-->
    <!-- <header class="flex justify-between pl-10 py-3 sticky top-0 bg-slate-800 sm:py-6">
        <h1 class="text-3xl text-gray-100">S <span class=" text-cyan-400">M</span> </h1>
        
        <img src="sources/application-menu.svg" alt="" class="block h-8 mx-auto absolute right-5" id="button">
        

    </header>         -->
    <!-- <nav class="h-full bg-slate-900 w-full hidden transition-all fixed" id="menu">
        <ul class="flex text-xl sm:text-3xl justify-around text-center flex-col h-4/5">
            <li><a href="#" class="hover:text-blue-300 md:text-2xl">About me</a></li>
            <li><a href="#" class="hover:text-blue-300 md:text-2xl">Skills</a></li>
            <li><a href="#" class="hover:text-blue-300 md:text-2xl">Portfolio</a></li>
            <li><a href="#" class="hover:text-blue-300 md:text-2xl">Contact</a></li>
        </ul>
    </nav> -->
    <nav class="bg-slate-800 sticky top-0">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars text-sky-200"></i>
        </label>
        <a href="#" class="enlace">
            <h1 class="text-3xl text-sky-100">S <span class=" text-cyan-400">M</span> </h1>
        </a>
        <ul class="bg-slate-900 md:bg-slate-800" id="hidden">
            <li><a class="select active text-xl" href="#">Inicio</a></li>
            <li><a class="select text-lg text-sky-100" href="#tec">Tecnologias</a></li>
            <li><a class="select text-lg text-sky-100" href="#pro">Proyectos</a></li>
            <li><a class="select text-lg text-sky-100" href="#skills">Skills</a></li>
            <li><a class="select text-lg text-sky-100" href="#cont">Contacto</a></li>
        </ul>
    </nav>

    <!-- & Sobre mi -->
    <section class="w-full mx-auto mt-10" id="main">
        <strong class="block text-center text-3xl text-cyan-500">Sobre mi</strong>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:w-4/5 mx-auto">
            <div>
                <p class="text-justify text-lg p-5 text-sky-200">
                Entuciasta con ganas de nunca parar de aprender, queriendo solucionar problemas de manera rapida y precisa, investigando cualquier tema que sea necesario para llegar a una solucion, siempre con metas de crecimiento tanto para mi como para la empresa. <br>
                </p>
                <a href="sources/Aziel-Samael-Medina-Galvan (2).pdf" target="_blank" class="block mx-auto text-center w-36 py-1 rounded-full bg-sky-500 text-white active:bg-sky-600 px-2 mb-2">Descarga Mi CV</a>
            </div>
            
            <img src="https://cdn-icons-png.flaticon.com/512/121/121693.png" alt="Samael Medina" class="mx-auto w-3/4 w-1/2 md:w-3/4 lg:max-w-[280px]">
        </div>
    </section>


    <!-- & Skills -->
    <section class="w-full p-3 mx-auto mt-10 text-center bg-black pb-10" id="tec">
        <strong class="block text-center p-5 text-3xl text-cyan-500">Tecnologias</strong>
        <div class=" mx-auto grid grid-cols-3 gap-y-10 gap-x-5 sm:grid-cols-4">
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/HTML.svg" alt="">
            <strong>HTML</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/CSS.svg" alt=""><strong>CSS</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/JS.svg" alt=""><strong>Javascript</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/sass.svg" alt=""><strong>Sass</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/vue.svg" alt=""><strong>Vue.js</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/descarga-removebg-preview.png" alt=""><strong>Tailwind</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/php.svg" alt=""><strong>PHP</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/mysql.svg" alt=""><strong>MySQL</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/git.svg" alt=""><strong>Git</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/figma.svg" alt=""><strong>Figma</strong></div>
            <div><img class="mx-auto w-3/4 max-w-[130px]" src="sources/github (1).svg" alt=""><strong>GitHub</strong></div>
        </div>
    </section>

    <!-- & Portafolio de trabajos -->
    <section class="text-center w-full" id="pro">
        <strong class="block text-center p-5 text-3xl text-cyan-500">Algunos proyectos</strong>
        <article class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto">
                <img src="sources/office-work.svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl hover:text-sky-600"><a href="https://e-system.mx/login" target="_blank">E-system</a></span>
                <p class="text-justify text-sky-200">Sistema de control de bitacoras para el sector de hidrocarburos para el cumplimiento de la NOM-005-ASEA </p>
            </div>
            <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto">
                <img src="sources/office-work (1).svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl hover:text-sky-600"><a href="https://eservicesmx.com/#/" target="_blank">Eservices</a> </span>
                <p class="text-justify text-sky-200">Pagina Oficial de la empresa "Equipos y Servicios Generales S.A. de C.V."</p>
            </div>
            <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto">
                <img src="sources/team-work.svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl hover:text-sky-600"><a href="https://samaelmedina28.github.io/Sistemas/" target="_blank">S-Admin</a></span>
                <p class="text-justify text-sky-200">Sistema de control de inventariado de equipo de computo y administracion de el departamento de sistemas (En proyecto)</p>
            </div>
            <!-- <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto hidden sm:block">
                <img src="sources/team-work (1).svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl">Proyect</span>
                <p class="text-justify text-sky-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut enim id alias totam aliquid sequi </p>
            </div>
            <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto hidden sm:block">
                <img src="sources/focused-working.svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl">Proyect</span>
                <p class="text-justify text-sky-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut enim id alias totam aliquid sequi </p>
            </div>
            <div class="w-72 rounded-md p-5 border border-slate-400 mx-auto hidden sm:block">
                <img src="sources/coding.svg" alt="" class="w-full">
                <span class="text-center block text-sky-400 text-2xl">Proyect</span>
                <p class="text-justify text-sky-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut enim id alias totam aliquid sequi </p>
            </div> -->
        </article>
    </section>
    
    
    <!-- & Experiencia Laboral -->



    <section class="w-full p-3 mx-auto mt-10 text-center" id="skills">
        <strong class="block text-center p-5 text-3xl text-cyan-500">Skills</strong>
        <article class="grid grid-cols-1 gap-y-5 w-full mx-auto p-2 gap-x-5 text-lg sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Manejo de directivas de grupo</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Manejo de office 365</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Instalacion de redes</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Mantenimiento de equipo de computo</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Manejo de bases de datos</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Centro de Administracion de office 365</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Buscar soluciones o investigar temas para encontrar la mejor opcion a un problema</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Administracion, control y elavoraciones de planes para equipos de trabajo</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Ganas de nunca parar de aprender</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Conocimiento basico sobre telecomunicaciones</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Trabajo en equipo</li>
            <li class="text-sky-200 bg-slate-800 py-2 rounded-md">Instalacion de equipo de computo</li>
        </article>
    </section>
    <!-- & Contact -->
    <section class="w-full text-center bg-black mt-10" id="cont">
        <strong class="block text-center p-5 text-3xl text-cyan-500">Contacto</strong>
        <form action="index.php" class="md:w-4/5 mx-auto py-5" id="form" method="post">
            <div>
                <textarea name="txtMensaje" class="w-4/5 bg-transparent text-cyan-400 sm:h-28 rounded-sm" placeholder="Mensaje"></textarea>
                <div>
                    <input name="txtNombre" type="text" class="bg-transparent w-4/5 text-cyan-400 mt-4 rounded-sm" placeholder="Nombre">
                    <input name="txtEmail" type="email" class="bg-transparent w-4/5 text-cyan-400 my-4 rounded-sm" placeholder="Correo">
                    <input name="txtTelefono" type="tel" class="bg-transparent w-4/5 text-cyan-400 rounded-sm" placeholder="Telefono">
                </div>
            </div>
            <button class="rounded-full border border-sky-400 active:bg-sky-500 px-8 py-1 mt-5" id="button">Enviar</button>
        </form>
    </section>
    

    <footer class="bg-cyan-500 h-40 py-9">
        <strong class="text-black text-center block text-2xl">SAMAEL MEDINA</strong>
        <span class="text-black block text-center">amedina@eservicesmx.com</span>
        <div class="grid grid-cols-4 text-center mt-3">
            <img class="h-7 inline-block mx-auto hover:h-8" src="sources/whatsapp.svg" alt="">
            <img class="h-7 inline-block mx-auto hover:h-8" src="sources/linkedin-fill.svg" alt="">
            <img class="h-7 inline-block mx-auto hover:h-8" src="sources/instagram-fill.svg" alt="">
            <img class="h-7 inline-block mx-auto hover:h-8" src="sources/facebook.svg" alt="">
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>
<?php 
$txtNombre = "";
$txtMensaje = "";
$txtEmail = "";
$txtTelefono = "";



$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

if($_POST){
    $txtNombre = $_POST["txtNombre"];
    $txtMensaje = $_POST["txtMensaje"];
    $txtEmail = $_POST["txtEmail"];
    $txtTelefono = $_POST["txtTelefono"];
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=mensajes", $usuario, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Conexion establecida";
        $sql = "INSERT INTO `mensajes` (`id`, `mensaje`, `nombre`, `correo`, `telefono`) VALUES (NULL, '$txtMensaje', '$txtNombre', '$txtEmail', '$txtTelefono');";

        $conexion->exec($sql);

    } catch (PDOException $error) {
        echo "Conexion erronea <br/> ".$error;
    }

}
?>