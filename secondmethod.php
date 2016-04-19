<html>
    <body>

        <?php
        function adddecimilers(&$in) {
    $in = '/' . trim($in) . '/';
}
        if (isset($_POST['submit'])) {
            $find = $_POST['find'];
            $replace = $_POST['replace'];
            $text = $_POST['maintext'];
            $find = explode(',', $_POST['find']);
            array_walk($find, 'adddecimilers');
            $replace = preg_split('/,\s+/', $_POST['replace']);
            $newtext = preg_replace($find, $replace, $text);
        }
        ?> 
        <form action="" method="post">
            Find: <input type="text" name="find" value=''/><br><br>
            Replace: <input type="text" name="replace" value=''/><br><br>
            <input type="submit" name="submit" value="Replace"/><br><br>

            <textarea name="maintext" rows="8" cols="80"><?php echo (empty($newtext) == false) ? $newtext : 'hi goodmoring'; ?></textarea>
        </form>

    </body>
</html>