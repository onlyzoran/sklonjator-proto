<?php
    $word = $_GET['word'];
    if($word != '') {
        $data = file_get_contents('http://ws3.morpher.ru/russian/declension?s='.$word.'&format=json');
        $decodedData = json_decode($data);
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklonjator Proto</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="word" value="<?= $word; ?>">
        <button type="submit">Submit</button>
        <p>Result:</p>
        <input type="text" value="<?= $decodedData->{'П'}; ?>">
    </form>
</body>
</html>