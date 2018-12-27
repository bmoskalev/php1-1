<?php
$submenu1_3 = [
    "<li class='menu-box__level-3'><a href='#'>Home</a><div class='menu-box__level-4'><ul class='me'>" => [
        "<li><a href='#'>Home1</a></li>",
        "<li><a href='#'>Cart1</a></li>",
        "<li><a href='#'>Sevice1</a></li>"]

];
$submenu1_2 = [
    "<li class='menu-box__level-3'><a href='#'>Home</a><div class='menu-box__level-4'><ul class='me'>" => [
        "<li><a href='#'>Home1</a></li>",
        $submenu1_3,
        "<li><a href='#'>Sevice1</a></li>"]

];
$submenu1 = [
    "<li class='menu-box__level-1'><a href='#'>Home</a><div class='menu-box__level-2'><ul class='me'>" => [
        "<li><a href='#'>Home1</a></li>",
        $submenu1_2,
        "<li><a href='#'>Sevice1</a></li>"]
];
$submenu2 = [
    "<li class='menu-box__level-1'><a href='#'>Cart</a><div class='menu-box__level-2'><ul class='me'>" => [
        "<li><a href='#'>Home2</a></li>",
        "<li><a href='#'>Cart2</a></li>",
        $submenu1_2]
];
$submenu3 = [
    "<li class='menu-box__level-1'><a href='#'>Service</a><div class='menu-box__level-2'><ul class='me'>" => [
        $submenu1_2,
        "<li><a href='#'>Cart3</a></li>",
        "<li><a href='#'>Sevice3</a></li>"]
];
$submenu4 = [
    "<li class='menu-box__level-1'><a href='#'>Blog</a><div class='menu-box__level-2'><ul class='me'>" => [
        "<li><a href='#'>Home4</a></li>",
        $submenu1_2,
        $submenu1_3]
];
$menu = [
    "<ul class='menu-box'>" => [$submenu1, $submenu2, $submenu3, $submenu4]
];

function renderMenu($menu)
{
    $result = '';
    foreach ($menu as $key => $value) {
        $result .= $key;
        foreach ($value as $value1) {
            $result .= renderSubmenu($value1);
        }
    }
    $result .= "</ul></div>";
    return $result;
}

function renderSubmenu($submenu)
{
    $result = "";
    foreach ($submenu as $key => $value) {
        $result .= $key;
        foreach ($value as $value1) {
            if (is_array($value1)) {
                $result .= renderSubmenu($value1);
            } else {
                $result .= $value1;
            }
        }
        $result .= "</ul></li>";
    }
    return $result;
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu-block">
    <?php
    echo renderMenu($menu);
    ?>
</div>
</body>
</html>
