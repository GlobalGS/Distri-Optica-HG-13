<?php
// =================== CONFIGURACIÓN ===================
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a MySQL con PDO (Railway)
$host = "yamanote.proxy.rlwy.net";
$port = 50290;
$db   = "railway";
$user = "root";
$pass = "ugDjPlMtEaIeYiNhBuJFMrrjBRfmRKzT";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

$mensaje_estado = "";

// =================== PROCESO DEL FORMULARIO ===================
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre   = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $correo   = htmlspecialchars($_POST['correo']);
    $fecha    = $_POST['fecha'];
    $hora     = $_POST['hora'];

    // Validar correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $mensaje_estado = "<p style='color:red;font-weight:600;'>Correo inválido ❌</p>";
    }
    // Validar que la fecha/hora no esté en el pasado
    elseif (strtotime("$fecha $hora") < time()) {
        $mensaje_estado = "<p style='color:red;font-weight:600;'>No se puede agendar en el pasado ❌</p>";
    }
    else {
        // Revisar si ya existe la cita
        $stmt = $conn->prepare("SELECT id FROM citas WHERE fecha=:fecha AND hora=:hora");
        $stmt->execute(['fecha'=>$fecha,'hora'=>$hora]);

        if ($stmt->rowCount() > 0) {
            $mensaje_estado = "<p style='color:red;font-weight:600;'>Esta fecha y hora ya está ocupada ❌</p>";
        } else {
            // Insertar cita
            $insert = $conn->prepare("INSERT INTO citas (nombre, telefono, correo, fecha, hora) VALUES (:nombre, :telefono, :correo, :fecha, :hora)");
            $res = $insert->execute([
                'nombre'=>$nombre,
                'telefono'=>$telefono,
                'correo'=>$correo,
                'fecha'=>$fecha,
                'hora'=>$hora
            ]);

            if($res){
                // Enviar correo
                $destinatario = "araujocanodominicmanuel@gmail.com";
                $asunto = "Nueva Cita Agendada - Óptica HG-13";
                $mensaje_mail = "
                <html>
                <head><title>Nueva Cita</title></head>
                <body style='font-family:Poppins, Arial;'>
                    <h2 style='color:#00C2B8;'>Nueva Cita Agendada</h2>
                    <p><strong>Nombre:</strong> $nombre</p>
                    <p><strong>Teléfono:</strong> $telefono</p>
                    <p><strong>Correo:</strong> $correo</p>
                    <p><strong>Fecha:</strong> $fecha</p>
                    <p><strong>Hora:</strong> $hora</p>
                </body>
                </html>";

                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: Óptica HG-13 <noreply@opticahg13.com>" . "\r\n";

                mail($destinatario, $asunto, $mensaje_mail, $headers);

                $mensaje_estado = "<p style='color:green;font-weight:600;'>Cita agendada correctamente ✅</p>";
            } else {
                $mensaje_estado = "<p style='color:red;font-weight:600;'>Error al guardar la cita ❌</p>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agendar Cita - Óptica HG-13</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
/* ===== RESET Y BODY ===== */
*{margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif;}
body{background:#fff;}

/* ===== HEADER ===== */
header{
    background:#6EDC5A; display:flex; align-items:center; justify-content:space-between; padding:15px 40px; position:relative;
}
.logo-area{display:flex; align-items:center; color:white; font-size:22px; font-weight:600;}
.logo-area img{height:80px; margin-right:15px;}
nav a{color:white; text-decoration:none; margin-left:25px; font-weight:500;}
.menu-toggle{display:none; font-size:30px; color:white; cursor:pointer;}

/* ===== HERO ===== */
.hero{text-align:center; padding:60px 20px; background:#F4F4F4;}
.hero h1{color:#00C2B8; font-size:40px; margin-bottom:20px;}
.hero p{color:#2F2F2F; font-size:18px;}

/* ===== FORMULARIO ===== */
.form-container{display:flex; justify-content:center; padding:60px 20px;}
form{background:white; padding:40px; width:100%; max-width:500px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);}
form label{display:block; margin-bottom:8px; font-weight:600; color:#2F2F2F;}
form input{width:100%; padding:12px; margin-bottom:20px; border-radius:8px; border:1px solid #ccc; font-size:15px;}
form button{width:100%; padding:14px; background:#6EDC5A; color:white; border:none; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer; transition:0.3s;}
form button:hover{background:#3BAF3F; transform:scale(1.03);}
.estado{margin-top:15px;}

/* ===== BOTÓN VOLVER ===== */
.volver{display:flex; justify-content:center; padding:60px 0; background:#F4F4F4;}
.volver a{background:#6EDC5A; color:white; padding:14px 35px; text-decoration:none; border-radius:8px; font-weight:600; transition:0.3s;}
.volver a:hover{background:#3BAF3F; transform:scale(1.05);}

/* ===== FOOTER ===== */
footer{background:#2F2F2F; color:white; text-align:center; padding:20px;}

/* ===== RESPONSIVE ===== */
@media (max-width:768px){
    header{flex-direction:column; align-items:center; text-align:center; padding:15px;}
    .logo-area{flex-direction:column; margin-bottom:15px;}
    .logo-area img{height:60px; margin:0 0 10px 0;}
    nav{display:flex; flex-direction:column; gap:10px;}
    nav a{margin:0; font-size:16px;}
    nav{display:none; flex-direction:column; position:absolute; top:100%; left:0; width:100%; background:#6EDC5A; padding:20px 0; text-align:center;}
    nav a{margin:15px 0; display:block; font-size:18px;}
    .menu-toggle{display:block;}
}
</style>
</head>
<body>

<header>
    <div class="logo-area">
        <img src="img/OpticaLogo.png">
        <span>ÓPTICA HG-13</span>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <nav id="menu">
        <a href="index.php">Inicio</a>
        <a href="montura.php">Monturas</a>
        <a href="GafasDeSol.php">Gafas de Sol</a>
        <a href="LentesDeContacto.php">Lentes de Contacto</a>
        <a href="accesorios.php">Accesorios</a>
    </nav>
</header>

<section class="hero">
    <h1>Agenda tu Cita</h1>
    <p>Reserva tu examen visual con nuestros especialistas.</p>
</section>

<div class="form-container">
    <form method="POST">
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

        <div class="estado">
            <?php echo $mensaje_estado; ?>
        </div>
    </form>
</div>

<div class="volver">
    <a href="index.php">Volver al Inicio</a>
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
