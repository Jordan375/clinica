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
            <h2>Registros de Pacientes</h2>
            <p>Complete el siguiente formulario para registrar sus datos y seleccionar su médico de preferencia.</p>
            <form action="#" method="post">
                <table>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" name="nombre" required></td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td><input type="text" name="apellido" required></td>
                    </tr>
                    <tr>
                        <th>Fecha de Registro</th>
                        <td><input type="date" name="fecha_nacimiento" required></td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td><input type="tel" name="telefono" required></td>
                    </tr>
                    <tr>
                        <th>Médico de Preferencia</th>
                        <td>
                            <select name="medico_preferencia" required>
                                <option value="">Seleccione un médico</option>
                                <option value="medico1">Dra. Luisa Lopez Rodriguez</option>
                                <option value="medico2">Dr. Raul Mongragon Mongradon</option>
                                <option value="medico3">Dr. Victor Gonzales</option>
                                <option value="medico3">Dr. Miguel Angel Gomez</option>
                                <option value="medico3">Dra. Angeles Puerta</option>
                                <option value="medico3">Dr. Pedro Miguel Montesinos</option>
                                <option value="medico3">Dra. Juliana Del Rio</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button type="submit">Registrar</button>
            </form>
        </section>
    </main>
    <section>
    </section>
</main>
    <footer>
        <p>UBICACIÓN</p>
        <p>Ignacio Lopez Rayon #523, Centro, Toluca, Estado de México C.P.50020</p>
        <p>Tel: 7293258054</p>
    </footer>
</body>
</html>