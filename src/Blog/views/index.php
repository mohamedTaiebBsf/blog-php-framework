<?= $renderer->render('header') ?>

    <h1>Bienvenue sur le blog</h1>
    <ul>
        <li><a href="<?= $router->generateUri('blog.show', ['slug' => 'abcd-32age']) ?>">Article</a></li>
        <li>Article</li>
        <li>Article</li>
    </ul>
<?= $renderer->render('header') ?>