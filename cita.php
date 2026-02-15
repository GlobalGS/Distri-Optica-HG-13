<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agendar Cita - Óptica HG-13</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background:#FFFFFF;
}

/* HEADER */
header{
    background:#6EDC5A;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:15px 40px;
}

.logo-area{
    display:flex;
    align-items:center;
    color:white;
    font-size:22px;
    font-weight:600;
}

.logo-area img{
    height:80px;
    margin-right:15px;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:25px;
    font-weight:500;
}

/* HERO */
.hero{
    text-align:center;
    padding:60px 20px;
    background:#F4F4F4;
}

.hero h1{
    color:#00C2B8;
    font-size:40px;
    margin-bottom:20px;
}

.hero p{
    color:#2F2F2F;
    font-size:18px;
}

/* FORMULARIO */
.form-container{
    display:flex;
    justify-content:center;
    padding:60px 20px;
}

form{
    background:white;
    padding:40px;
    width:100%;
    max-width:500px;
    border-radius:12px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

form label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#2F2F2F;
}

form input, form select{
    width:100%;
    padding:12px;
    margin-bottom:20px;
    border-radius:8px;
    border:1px solid #ccc;
    font-size:15px;
}

form button{
    width:100%;
    padding:14px;
    background:#6EDC5A;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

form button:hover{
    background:#3BAF3F;
    transform:scale(1.03);
}

/* BOTÓN VOLVER */
.volver{
    display:flex;
    justify-content:center;
    padding:60px 0;
    background:#F4F4F4;
}

.volver a{
    background:#6EDC5A;
    color:white;
    padding:14px 35px;
    text-decoration:none;
    border-radius:8px;
    font-weight:600;
    transition:0.3s;
}

.volver a:hover{
    background:#3BAF3F;
    transform:scale(1.05);
}

footer{
    background:#2F2F2F;
    color:white;
    text-align:center;
    padding:20px;
}

</style>
</head>
<body>

<header>
    <div class="logo-area">
        <img src="img/OpticaLogo.png">
        <span>ÓPTICA HG-13</span>
    </div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="monturas.php">Monturas</a>
        <a href="gafasDeSol.php">Gafas de Sol</a>
        <a href="cita.php">Agendar Cita</a>
    </nav>
</header>

<section class="hero">
    <h1>Agenda tu Cita</h1>
    <p>Reserva tu examen visual con nuestros especialistas.</p>
</section>

<div class="form-container">
    <form action="#" method="POST">
        
        <label>Nombre Completo</label>
        <input type="text" name="nombre" required>

        <label>Teléfono</label>
        <input type="tel" name="telefono" required>

        <label>Correo Electrónico</label>
        <input type="email" name="correo" required>

        <label>Fecha</label>
        <input type="date" name="fecha" required>

        <label>Hora</label>
        <input type="time" name="hora" required>

        <button type="submit">Agendar Cita</button>

    </form>
</div>

<div class="volver">
    <a href="index.php">Volver al Inicio</a>
</div>

<footer>
© 2026 Óptica HG-13 - Todos los derechos reservados
</footer>

</body>
</html>
