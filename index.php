<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Óptica HG-13</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#FFFFFF;
}

/* ================= HEADER ================= */

header{
    background:#6EDC5A;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:15px 40px;
    position:relative;
}

.logo-area{
    display:flex;
    align-items:center;
    color:white;
    font-size:22px;
    font-weight:600;
}

.logo-area img{
    height:70px;
    margin-right:15px;
}

nav{
    display:flex;
    gap:25px;
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
}

nav a:hover{
    color:#2F2F2F;
}

.menu-toggle{
    display:none;
    font-size:30px;
    color:white;
    cursor:pointer;
}

/* ================= SLIDER ================= */

.slider{
    width:100%;
    height:75vh;
    overflow:hidden;
}

.slides{
    display:flex;
    height:100%;
    animation:slide 16s infinite;
}

.slides img{
    flex:0 0 100%;
    width:100%;
    height:100%;
    object-fit:cover;
}

/* Animación correcta */
@keyframes slide{
    0%,20%{transform:translateX(0);}
    25%,45%{transform:translateX(-100%);}
    50%,70%{transform:translateX(-200%);}
    75%,95%{transform:translateX(-300%);}
}

/* ================= SECCIONES ================= */

.secciones{
    display:flex;
    justify-content:center;
    gap:40px;
    padding:70px 20px;
    background:#F4F4F4;
    flex-wrap:wrap;
}

.secciones a{
    text-decoration:none;
}

.card{
    width:320px;
    height:260px;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    transition:0.3s;
    position:relative;
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
    padding:18px;
    background:rgba(0,0,0,0.6);
    color:white;
    text-align:center;
    font-size:20px;
}

/* ================= FOOTER ================= */

footer{
    background:#2F2F2F;
    color:white;
    text-align:center;
    padding:20px;
}

/* ================= RESPONSIVE ================= */

@media (max-width:768px){

    nav{
        display:none;
        flex-direction:column;
        position:absolute;
        top:100%;
        left:0;
        width:100%;
        background:#6EDC5A;
        padding:20px 0;
        text-align:center;
        z-index:1000;
    }

    nav a{
        padding:12px 0;
        font-size:18px;
    }

    .menu-toggle{
        display:block;
    }

    .slider{
        height:50vh;
    }

    .secciones{
        flex-direction:column;
        align-items:center;
    }

    .card{
        width:90%;
        max-width:360px;
        height:230px;
    }
}
.secciones{
    display:flex;
    justify-content:center;
    align-items:stretch; /* 🔥 importante */
    gap:40px;
    padding:70px 20px;
    background:#F4F4F4;
    flex-wrap:wrap;
}

.secciones a{
    display:flex;          /* 🔥 clave */
    flex:1;                /* todos ocupan lo mismo */
    max-width:320px;
    justify-content:center;
    text-decoration:none;
}

.card{
    width:100%;            /* 🔥 que ocupe todo el ancho del <a> */
    height:260px;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    transition:0.3s;
    position:relative;
}


</style>
</head>
<body>

<header>

    <div class="logo-area">
        <img src="img/OpticaLogo.png">
        <span>ÓPTICA</span>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <nav id="menu">
       
        <a href="montura.php">Monturas</a>
        <a href="gafasDeSol.php">Gafas de Sol</a>        
        <a href="LentesDeContacto.php">Lentes de Contacto</a>
        <a href="accesorios.php">Accesorios</a>
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

<!-- SECCIONES -->
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
    
    <a href="LentesDeContacto.php">
        <div class="card">
            <img src="img/LentesDeContacto.jpg">
            <h3>Lentes de Contacto</h3>
        </div>
    </a>
    
    <a href="accesorios.php">
        <div class="card">
            <img src="img/Accesorios.png">
            <h3>Accesorios</h3>
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

<script>
function toggleMenu(){
    const menu = document.getElementById("menu");
    menu.style.display = menu.style.display === "flex" ? "none" : "flex";
}
</script>

</body>
</html>
