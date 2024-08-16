<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="AW-Inicio.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            display: flex;
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        .contact-info {
            flex: 1;
            padding-right: 20px;
            box-sizing: border-box;
        }
        .map {
            flex: 2;
            height: 400px;
        }
        h2 {
            margin-top: 0;
        }
        .contact-info p {
            margin: 10px 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
<header>
<img src="logo.jpeg" alt="Logo de Vitaltech" class="logo">
    <h1>Vitaltech - Clínica Médica</h1>
    <nav>
        <ul>
            <li><a href="Inicio.php">Inicio</a></li>
            <li><a href="Nosotros.php">Nosotros</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    <a href="Agendacion de citas.php">Agendación de Citas</a>
                    <a href="Registro de pacientes.php">Registros de Pacientes</a>
                    <a href="Especialidades.php">Especialidades</a>
                    <a href="Horarios de disponibilidad.php">Horarios de Disponibilidad</a>
                </div>
            </li>
            <li><a href="Contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header>
    </header>
   <main>
   <div class="container">
        <div class="contact-info">
            <h2>Contacto</h2>
            <p><strong>Teléfono 1:</strong> +52 729 325 8054</p>
            <p><strong>Teléfono 2:</strong> +52 722 131 2205</p>
            <p><strong>Email 1:</strong> ClinicamedicaVitaltech@gmail.com</p>
            <p><strong>Email 2:</strong> VitalTech@gmail.com</p>
        </div>
        <div class="map">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.8842272023035!2d-99.65744722674249!3d19.287400205456144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8994c2c72c87%3A0x658328d89ee3c88b!2sIgnacio%20L%C3%B3pez%20Rayon%20219-203%2C%205%20de%20Mayo%2C%2050090%20Toluca%20de%20Lerdo%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1723822557782!5m2!1ses!2smx" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
   </main> 
    <footer>
    <p>UBICACIÓN</p>
    <p>Ignacio Lopez Rayon #523, Centro, Toluca, Estado de México C.P. 50020</p>
    </footer>

    
</body>
</html>