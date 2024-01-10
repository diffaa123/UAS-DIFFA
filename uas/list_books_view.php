<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?= $book['title'] ?> by <?= $book['author'] ?> (<?= $book['published_year'] ?>) - ISBN: <?= $book['isbn'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
