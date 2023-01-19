<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <?php
        $books = [
            [
                'name'=>'Do Androids Dream of Electric Sheep',
                'author'=>'Philip K. Dick',
                'purchaseUrl'=>'http://example.com'
            ],

            [
                'name'=>'Project Hail Mary',
                'author'=>'Andy Weir',
                'purchaseUrl'=>'http://example.com'
            ],
        ];
    ?>
    
    <?php foreach($books as $book) : ?>
        <a href="<?=$book['purchaseUrl']; ?>">
            <li><?= $book['name']; ?></li>
        </a>
    <?php endforeach ?>
</body>
</html> 