<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/workers.php'?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/htmlSpecialChars.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>próf</title>
</head>
<body>

<h1>Próf</h1>
<p id="button"><a href="workers.php?add">Add new</a></p><br>
<ul id="filter">
    <?php foreach ($autocomplete as $autocomplete):?>
        <li>
            <form action="" method="post">
                <div>
                    <p><?php echo html($autocomplete['text']); ?></p>
                    <input id="text" type="hidden" name="id" value="<?php echo $autocomplete['id']; ?>">
                    <input id="button" type="submit" name="action" value="edit">
                    <input id="button" type="submit" name="action" value="Delete">
                </div>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<p id="button"><a href="../">Return to JMS home</a></p>
</body>
</html>
