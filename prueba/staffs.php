<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function goBack() {
            // Utiliza history.replaceState para cambiar la URL sin agregar al historial
            history.replaceState(null, null, 'index.php');
            window.location.href = 'index.php';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Nuestro Staff</h1>
        <p>Aquí puedes listar los miembros del staff de nuestra empresa.</p>
        <a href="javascript:void(0);" onclick="goBack();">Regresar</a>
    </div>
</body>
</html>
