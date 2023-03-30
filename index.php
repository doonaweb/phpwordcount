<?/**
 * PHP Word Count.
 *
 * Developed By Doonweb.ir.
 *
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Word Count</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png">
</head>

<body>
    <form id="phpwordcount" method="post">
        <h1>PHP Word Counter</h1>
        <label for="txt">Please Paste Your Text In This Field</label>
        <textarea name="textforcount" placeholder="Please Insert Text..."></textarea>
        <button>Count</button>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $textforcount = $_POST["textforcount"];
            $lettercount= strlen($textforcount);
            $wordcount = str_word_count($textforcount);
            ?>
            <div class="result">
                This Text Have
                <strong>
                <?php echo ($wordcount); ?>
                </strong>
                Characters
                and
                <strong>
                <?php echo ($lettercount); ?>
                </strong>
                Words.
            </div>
            <?php
        }
        ?>
        <p class="copyright">Developed By <a href="https://doonaweb.ir">Doonaweb.ir</a></p>
    </form>


</body>

</html>