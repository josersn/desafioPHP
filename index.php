<?php
$host = 'mysql:host=localhost;dbname=escola;port=3307';
$user = 'root';
$pass = '';
$pdo = new PDO($host, $user, $pass );
$query = $pdo->query("SELECT * FROM cursos "); 
$cursos = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja do Vinão</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="top-bar">
<div class="logo">
    <img src="img/hairstyle.svg" alt="Escola Do Vinão">
    <h1>Loja Do Vinão</h1>
</div>
<nav>
    <ul>
        <li>Masculino</li>
        <li>Feminino</li>
        <li>Area do cliente</li>
    </ul>
</nav>
</header>
    <main>
    <div class="model">
        <form method="post">
            <input type="text" name="nome"  placeholder="Nome do aluno" required>
            <input type="text" name="ra" placeholder="RA do aluno" required>
            <select>
            <?php foreach($cursos as $curso){ ?>
                <option value="<?php echo $curso["id"] ;?>"> <?= $curso["nome"] ;?> </option>
                <?php } ?>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
    </main>
</body>
</html>