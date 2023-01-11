<?php
session_start();
if(!isset($_SESSION['ID'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilos.css">
    <title>Consultorio CAMS</title>
    </head>
</header>   
    <body>
        <ul class="menu">
            <a href="#" class="logo"></a>
            <IMG SRC="img/logo.png" class="logo">
			<li><a href="#">Acerca De</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="cita.php">Mirar citas</a></li>
			<li><a href="addcita.php">Agendar cita</a></li>
            <li><a href="inicio.html">Cerrar sesion</a></li>
            <li><a href="#">Perfil</a></li>
		</ul>
        <section class="Informa">
            <div class="oneinicio">
                <IMG SRC="img/M1.jpg" class="D1">
                    <div class="onecia">
                        <tu><b>EXPEDIENTE ELECTRÓNICO</b></tu>
                        <h2>Agenda tu cita ahora mismo</h2> 
                    </div>
            </div>
            <div class="inicio">
            <h1><b>¿Qué hacemos?</b></h1>
            <hr>
            <p class="P1">
                CAMS, es la institución con mayor presencia en la atención a la salud y 
                en la protección social de los mexicanos desde su fundación en 1975, para ello, 
                combina la investigación y la práctica médica, con la administración de los 
                recursos para el retiro de sus asegurados, para brindar tranquilidad y 
                estabilidad a los trabajadores y sus familias, ante cualquiera de los riesgos 
                especificados en la Ley del Seguro Social. Hoy en día, más de la mitad de la 
                población mexicana.
            </p>
            
            <div class="contenido">
                <hr>
                <T><b><br>Preguntas de salud</br></b></T>
                <p class="P2">
                <a href="#">Consulta las preguntas más comunes sobre temas de salud como: 
                diabetes, enfermedades del corazón y enfermedades de transmisión sexual.</a>
                </p>
            </div>
            </hr>
            <section class="ventajas">
                <V><b>¿Por qué usar consultorioCASM.com?</b></V>
                <IMG SRC="img/M2.png" class="D2">
            <div class="vencosa">
                <V2>Porque ofrecemos muchas ventajas</V2>
            <div class="log">
                <li>SEGURO</li>
                <li>CONFIABLE</li>
                <li>FÁCIL DE USAR</li>
                <li>ECONÓMICO</li>
                <li>ACCESIBLE</li>
                <li>MODERNO</li>
                <li>EN LÍNEA</li>
            </div>
            </div>
            </section>
            <section id="con">
                <foll><b>Síguenos</b></foll>
                <div class="diseno">
                    <div class="face">
                        <IMG SRC="img/M3.png" class="F">
                        <a href="https://www.facebook.com/Consultorio-CAMS-104605099155960" 
                        class="WF">facebook</a>
                    </div>
                    <div>
                        <IMG SRC="img/M4.jpg" class="I">
                            <a href="https://www.instagram.com/consultoriocams/" 
                            class="WI">Instragram</a>
                    </div>
                    <div>
                        <IMG SRC="img/M5.png" class="T">
                            <a href="https://twitter.com/CamsConsultorio" 
                            class="WT">Twitter</a>
                    </div>
                </div>
            </section>
            <section class="Empres">
                <II><b>Informacion de la empresa</b></II>
                <IMG SRC="img/M6.png" class="Salu">
                <div class="Emprinf">
                <p class="parafo">
                    CLES-SYSTEM es una empresa mexicana que está en el mercado de salud, Para el año 1982 contaba con más de 300 locales distribuidos en distintas ciudades.<br>
                    CLES-SYSTEM fue creado por Edgar Morales en 1975, anteriormente la empresa era conocida como “Healthy living”, todo comenzó por crear consultorios para 
                    poder competir con los consultorios de la ciudad, porque las personas que vivián en el campo no tenía acceso a ser tratados en un consultorio médico.<br>
                    En 1978 CLES-SYSTEM hizo alianzas con el Ing. Fernando Reyes Ortega para poder expandir sus consultorios por los diferentes pueblos de la ciudad que 
                    no tenían acceso a estos servicios de salud, para el año de 1981 CLES-SYSTEM empezó a expandir sus consultorios en los diferentes estados de México 
                    para poder brindar acceso a la salud, y esto influyo para que naciera las competencias con otros servicios médicos.<br>
                    Para el año de 1990 CLES-SYSTEM recibió un reconocimiento por tener los mejores consultorios y el mejor servicio a la atención al cliente(paciente) 
                    y esto hizo que las personas conocieran más de estos consultorios.  
                    En 1995 contaba con más de 2,000 médicos y empleados que trabajaba para la empresa, también en ese mismo año CLES-SYSTEM contaba con más de 1,000 
                    registros de sus pacientes en cada consultorio llegando a sobrepasar la gran cantidad de pacientes registrados.
                </p>
                </div>
            </section>
            </hr>
            </div>
            <section id="inf"> <hr>
                <IMG SRC="img/What.png" class="Wh">
                <div class="conte">
                    <div class="caja1">
                        <br><b>Salud</b></br>
                        <br>@Instituto Mexicano del Seguro Social</br>
                      </div>  
                      <div class="caja2">
                        <br><b>Oficinas Centrales:</b></br>
                        <br>Viaducto Tlalpan No. 100 Col. Arenal Tepepan</br>
                        Alcaldía Tlalpan, C.P. 14610, Ciudad de México.
                      </div> 
                      <div class="caja3">
                        <br><b> Llámanos: </b></br>
                        <br>Desde cualquier parte del país sin costo: <a href="#">800 433 2000.</a></br>
                        Desde Estados Unidos sin costo: <a href="#"> (866) 986 8306.</a><br>
                        Desde otros países por cobrar: <a href="#"> +52 (55) 5481 9897.</a>
                      </div> 
                </div>
            </hr>
            </section>
        </section>
    </body>
    </html>