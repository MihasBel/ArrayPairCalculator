<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>TEST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section class="array-calculator">
        <h2>Вывод количества пар для массива</h2>
        <form class="array-calculator_form" method="post" action="">
            <textarea name="arr" class="array-field" placeholder="Введите массив в формате 1,32,5,n..." >
                Введите массив в формате 1,32,5,n...
            </textarea>
            <input name="send" type="submit" class="array-calculator_button" value="посчитать">
        </form>
        <?php include ('calculator.php');
        ?>
    </section>
</main>
</body>
</html>