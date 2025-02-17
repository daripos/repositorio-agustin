<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$menu=[
    [ txt=>"home"link=>" index.php"="" target="0" class=>" elemento"],
    [ txt=>'la galaxia hoy' link=>'blog.php' target='1' class=>'elemento'>]
    [ txt=>'calendario' link=>'calendario.php' target='0' class=>'elemento'>] 
    [txt=>'facebook' link=>'https://facebook.com' target='0' class=>'elemento'>]
    [txt=>'twitter' link=>'https://twitter.com' target='1' class=>'elemento'>]
    
    ]

    function contructorMenu($classmenu) {
    global $menu;

    echo "<nav>";
    echo "<ul class='$classmenu'>";
    foreach ($menu as $item) {
        echo "<li>";
        echo "<a href='{$item['link']}' target='{$item['target']}' class='{$item['class']}'>{$item['txt']}</a>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</nav>";
}
?>

