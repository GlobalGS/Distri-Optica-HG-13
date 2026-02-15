<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gafas de Sol - Óptica HG-13</title>

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

/* SECCIÓN PRINCIPAL */
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

/* GALERÍA */
.galeria{
    display:flex;
    justify-content:center;
    gap:30px;
    padding:60px 40px;
    flex-wrap:wrap;
}

.producto{
    width:280px;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.producto img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.producto:hover{
    transform:scale(1.05);
}

.producto h3{
    text-align:center;
    padding:15px;
    background:white;
    color:#2F2F2F;
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
    <h1>Nuestras Gafas de Sol</h1>
    <p>Protección, estilo y elegancia para cada ocasión.</p>
</section>

<section class="galeria">

    <div class="producto">
        <img src="img/GafasDeSol.jpg">
        <h3>Gafa de Sol Clásica</h3>
    </div>

    <div class="producto">
        <img src="img/GafasDeSol.jpg">
        <h3>Gafa de Sol Deportiva</h3>
    </div>

    <div class="producto">
        <img src="img/GafasDeSol.jpg">
        <h3>Gafa de Sol Premium</h3>
    </div>

</section>

<div class="volver">
    <a href="index.php">Volver al Inicio</a>
</div>

<footer>
© 2026 Óptica HG-13 - Todos los derechos reservados
</footer>

</body>
</html>
