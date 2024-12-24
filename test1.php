<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="character">
        <input type="submit">
    </form>


</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $character = $_POST["character"];
    $url = "https://www.wikipedia.com.ua/";

    $content = file_get_contents($url);
    $content = strip_tags($content);
    $text = $h2t->get_text();
    echo $content;
    echo substr_count($content, $character);
}
?>
