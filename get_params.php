<!DOCTYPE html>
<html>
<head>
    <title>forms</title>
</head>
<body>

<section>

    <?php
    $fn=$_GET["f_name"];
    $ps=$_GET["pass"];
    
    $arr=$_GET["color_s"];

    if($fn=="noy" && $ps="222")
    {
        if($arr=="red")
        echo "<h2> hello " .$fn ." you'r choice is " .$arr;
    }
    else
    echo "<h2> try again " .$fn;
    ?>
    </section>
</body>
</html>