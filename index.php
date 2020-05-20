<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rank de Tecnologias</title>
</head>
<body>
    <h2>Informe as Tecnologias que você tem mais interesse</h2>
    <form action="processa.php" method="POST">
        <p>
            <input type="checkbox" name="tech[]" value="php">php
            <input type="checkbox" name="tech[]" value="javascript">javascript
            <input type="checkbox" name="tech[]" value="java">java
            <input type="checkbox" name="tech[]" value="python">python
            <input type="checkbox" name="tech[]" value="c++">c++
            <input type="checkbox" name="tech[]" value="c">c
            <input type="checkbox" name="tech[]" value="dart">dart
        </p>
        <p>
            <input type="checkbox" name="tech[]" value="nodejs">nodejs
            <input type="checkbox" name="tech[]" value="laravel">laravel
            <input type="checkbox" name="tech[]" value="django">django
            <input type="checkbox" name="tech[]" value="bootstrap">bootstrap
            <input type="checkbox" name="tech[]" value="materialize">materialize
            <input type="checkbox" name="tech[]" value="vue">vue
            <input type="checkbox" name="tech[]" value="react">react
            <input type="checkbox" name="tech[]" value="angular">angular
            <input type="checkbox" name="tech[]" value="flutter">flutter
        </p>
        <p>
            <input type="checkbox" name="tech[]" value="mysql">mysql
            <input type="checkbox" name="tech[]" value="mongodb">mongodb
            <input type="checkbox" name="tech[]" value="postgreesql">PostgreSQL
            <input type="checkbox" name="tech[]" value="sqlserver">SQL Server
            <input type="checkbox" name="tech[]" value="oracle">oracle 
        </p>    
        <p>
            <input type="checkbox" name="tech[]" value="html5">html5
            <input type="checkbox" name="tech[]" value="css3">css3
        </p>
        <input type="submit" name="btn">      
    </form>
    <hr>
    <h1>Rank:</h1>
    <?php
    require_once "./read.php";
    ?>
    <table width="500" border="1">
        <thead>
            <tr>
                <th>Posição</th>
                <th>Tecnologia</th>
                <th>Votos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($x = 0; $x <= $qtd; $x++):
            ?>
            <tr>
                <th><?= $x+1; ?></th>
                <th><?= $tecnologia[$x]; ?></th>
                <th><?= $votos[$x]; ?></th>
            </tr>
                <?php endfor; ?>
        </tbody>
    </table>

</body>
</html>