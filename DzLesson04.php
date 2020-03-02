<?php
include_once "helpers.php";

//render('templates/message.php', [
//    'title' => 'Hello',
//    'message' => 'Hello, my friend!',
//]);
//render('templates/message.php', [
//    'title' => 'Hello',
//    'message' => 'Hello, my friend!',
//    'additional' => 'Good-bye!!',
//]);
//render('templates/message.php', [
//    'title' => '12345'
//]);

$posts = include 'data.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First HTML Page Example</title>
</head>
<body>

<?php foreach ($posts as $title => $content)
    render('templates/post.php',[
        'title' => $title,
        'content' => $content
    ])
    ?>
</body>
</html>
