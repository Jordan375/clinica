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
                        <a href="Registros de pacientes.php">Registros de Pacientes</a>
                        <a href="Especialidades.php">Especialidades</a>
                        <a href="Horarios de disponibilidad.php">Horarios de Disponibilidad</a>
                    </div>
                </li>
                <li><a href="Contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form id="registration-form">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="paternal-surname">Apellido Paterno:</label>
            <input type="text" id="paternal-surname" name="paternal-surname" required>
            
            <label for="maternal-surname">Apellido Materno:</label>
            <input type="text" id="maternal-surname" name="maternal-surname" required>
            
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
            
            <label for="confirm-password">Confirmacion de password:</label>
            <input type="text" id="confirm-password" name="confirm-password" required>
            
            <label for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="correo">Correo electronico:</label>
            <input type="text" id="correo" name="correo" required>
            
            <button type="submit">Registrar</button>
        </form>
    </main>
    <footer>
        <p>UBICACIÓN</p>
        <p>Ignacio Lopez Rayon #523, Centro, Toluca, Estado de México C.P.50020</p>
        <p>Tel: 7293258054</p>
    </footer>
</body>
</html>