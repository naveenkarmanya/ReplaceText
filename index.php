<?php

function adddecimilers(&$in) {
    $in = '/' . trim($in) . '/';
}

if (isset($_POST['search'], $_POST['replace'], $_POST['area']) == 1) {
    if (empty($_POST['search']) == 0) {
        $find = explode(',', $_POST['search']);
        array_walk($find, 'adddecimilers');
    }
    $replace = (empty($_POST['replace']) == 0) ? preg_split('/,\s+/', $_POST['replace']) : '';
    $area = (empty($find) == 0 && empty($replace) == 0) ? preg_replace($find, $replace, $_POST['area']) : $_POST['area'];
}
?>

<html>
    <head>
        <title>
            Replace Text
        </title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="search" placeholder="Text Here">
            <input type="text" name="replace" placeholder="Repalce text here"><br><br>
            <input type="submit" name="submit" value="replace">
            <p><textarea name="area" rows="8" cols="40" ><?php echo (empty($area) == false) ? $area : 'hi goodmoring'; ?></textarea></p>

        </form>
    </body>

</html>




