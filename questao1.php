<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #codigo{
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>

<div id="codigo">
<?php
function capitalizeVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelsUpper = ['A', 'E', 'I', 'O', 'U'];
    return str_replace($vowels, $vowelsUpper, $str);
}

echo capitalizeVowels("hello world\u{1F30E}");
?>
</div>

</body>
</html>