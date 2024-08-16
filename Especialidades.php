<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="AW-Inicio.css">
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
    <main>
        <section>
            <h2>Especialidades Médicas</h2>
            <table class="especialidades">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Medicina General</td>
                        <td>Atención médica primaria, diagnóstico y tratamiento de enfermedades comunes, así como prevención y promoción de la salud.</td>
                        <td><img src="medicina-integral.jpg" alt="Medicina General"></td>
                    </tr>
                    <tr>
                        <td>Ginecología</td>
                        <td>Servicios de salud para la mujer, incluyendo cuidados preventivos, diagnóstico y tratamiento de problemas ginecológicos.</td>
                        <td><img src="ginecologia.jfif" alt="Ginecología"></td>
                    </tr>
                    <tr>
                        <td>Oftalmología</td>
                        <td>Diagnóstico y tratamiento de enfermedades y trastornos del ojo, así como servicios de corrección visual.</td>
                        <td><img src="oftalmologia.jfif" alt="Oftalmología"></td>
                    </tr>
                    <tr>
                        <td>Pediatría</td>
                        <td>Atención médica especializada para niños, desde el nacimiento hasta la adolescencia.</td>
                        <td><img src="pediatria.jfif" alt="Pediatría"></td>
                    </tr>
                    <tr>
                        <td>Cardiología</td>
                        <td>Atención especializada en el diagnóstico y tratamiento de enfermedades del corazón y el sistema circulatorio.</td>
                        <td><img src="cardiologia.jfif" alt="Cardiología"></td>
                    </tr>
                    <tr>
                        <td>Ortopedia</td>
                        <td>Diagnóstico y tratamiento de enfermedades y lesiones del sistema musculoesquelético.</td>
                        <td><img src="ortopedia.jfif" alt="Ortopedia"></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>UBICACIÓN</p>
        <p>Ignacio Lopez Rayon #523, Centro, Toluca, Estado de México C.P.50020</p>
        <p>Tel: 7293258054</p>
    </footer>
</body>
</html>