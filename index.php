<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <?php
        $books = [
            'Do Androids Dream of Electric Sheep',
            'The Langoriels', 
            'Hail Mary',
        ];
    ?>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach($books as $book) : ?>
            <li><?= $book ?></li> 
        <?php endforeach ?>
    </ul>
</body>
</html> 