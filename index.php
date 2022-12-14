<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis adipisci est possimus sequi consequuntur ipsam, molestiae natus nostrum deleniti. Eius fugit optio, magnam nostrum delectus soluta! Quis quasi expedita aspernatur?";
    $word = $_GET['word'];
    $censor = "***";
    $string2 = str_ireplace($word, $censor, $string);

    strlen($string);
    ?>

    <h1>Censura una parola</h1>

    <form action="" method="get">
        <label for="word">Parola da censurare</label>
        <input type="text" name="word" id="word-id">
        <button>Censura</button>
    </form>

    <p><?php echo $string ?></p>

    <h3>La lunghezza del paragrafo è di <?php echo strlen($string); caratteri?></h3>

    <h1>Paragrafo censurato</h1>
    <?php echo $string2 ?>

    <h3>La lunghezza del paragrafo censurato è di <?php echo strlen($string2); caratteri?></h3>
</body>
</html>