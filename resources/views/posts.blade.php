<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog !!</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <a href="/posts/<?=$post->slug; ?>"><h2><?= $post->title; ?></h2></a>
        <div>
            <?= $post->body; ?>
        </div>
    </article>
    <?php endforeach; ?>

</body>

</html>