<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Óptica HG-13</title>

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
    justify-content:space-between; /* separa logo y menú */
    padding:15px 40px;
}

/* LOGO AREA */
.logo-area{
    display:flex;
    align-items:center;
    color:white;
    font-size:22px;
    font-weight:600;
}

.logo-area img{
    height:80px;
    width:auto;
    margin-right:15px;
}

/* MENÚ */
nav a{
    color:white;
    text-decoration:none;
    margin-left:25px;
    font-weight:500;
    transition:0.3s;
}

nav a:hover{
    color:#2F2F2F;
}



/* SLIDER */
.slider{
    width:100%;
    height:80vh; /* ocupa casi toda la pantalla */
    overflow:hidden;
}

.slides{
    display:flex;
    width:400%;
    height:100%;
    animation:slide 16s infinite;
}

.slides img{
    width:100vw;      /* ancho completo de la pantalla */
    height:100%;
    object-fit:cover; /* llena sin deformar */
}



@keyframes slide{
    0%{margin-left:0;}
    20%{margin-left:0;}
    25%{margin-left:-100%;}
    45%{margin-left:-100%;}
    50%{margin-left:-200%;}
    70%{margin-left:-200%;}
    75%{margin-left:-300%;}
    95%{margin-left:-300%;}
}

/* BOTONES */
.secciones{
    display:flex;
    justify-content:center;
    gap:30px;
    padding:50px;
    background:#F4F4F4;
}

.card{
    position:relative;
    width:300px;
    height:250px;
    overflow:hidden;
    border-radius:12px;
    cursor:pointer;
    transition:0.3s;
}

.card img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.card:hover{
    transform:scale(1.05);
}

.card h3{
    position:absolute;
    bottom:0;
    width:100%;
    background:rgba(0,0,0,0.6);
    color:white;
    text-align:center;
    padding:15px;
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
        <a href="montura.php">Monturas</a>
        <a href="gafasDeSol.php">Gafas de Sol</a>
        <a href="cita.php">Agendar Cita</a>
    </nav>
</header>


<!-- SLIDER -->
<div class="slider">
    <div class="slides">
        <img src="img/deslizable1.jpg">
        <img src="img/deslizable2.jpg">
        <img src="img/deslizable3.jpg">
        <img src="img/deslizable4.jpg">
    </div>
</div>

<!-- BOTONES -->
<div class="secciones">
    
    <a href="montura.php">
        <div class="card">
            <img src="img/Montura.jpg">
            <h3>Monturas</h3>
        </div>
    </a>

    <a href="gafasDeSol.php">
        <div class="card">
            <img src="img/GafasDeSol.jpg">
            <h3>Gafas de Sol</h3>
        </div>
    </a>

    <a href="cita.php">
        <div class="card">
            <img src="img/AgendarCita.jpg">
            <h3>Agendar Cita</h3>
        </div>
    </a>

</div>

<footer>
© 2026 Óptica HG-13 - Todos los derechos reservados
</footer>

</body>
</html>
