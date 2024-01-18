<?php

use Core\Session\Session;

?>
<h1>Un article</h1>




<div class="form-control">

    <h2>Titre : <?= $article->getTitle() ?></h2>
    <p>Contenu : <?= $article->getContent() ?></p>
    <h6>Author : <?= $article->getAuthor()->getUsername() ?></h6>


    <a href="?type=article&action=index" class="btn btn-secondary">Retour</a>
    <a href="?type=article&action=update&id=<?= $article->getId() ?>" class="btn btn-warning">Editer</a>
    <a href="?type=article&action=delete&id=<?= $article->getId() ?>" class="btn btn-danger">Supprimer</a>

</div>

<div class="form-control">
    <?php foreach ($article->getComments() as $comment): ?>

        <p><strong><?= $comment->getContent() ?></strong></p>
        <h6>author: <?= Session::user()['authenticator'] ?></h6>
        <a href="?type=comment&action=delete&id=<?= $comment->getId() ?>" class="btn btn-danger">Supprimer</a>
        <a href="?type=comment&action=update&id=<?= $comment->getId() ?>" class="btn btn-warning">Editer</a>

        <?php



        ?>

    <?php endforeach; ?>


</div>

<div>
    <form action="?type=comment&action=create" method="post">

        <div>
            <input class="form-control" type="text" name="content" placeholder="your comment">
        </div>
        <input type="hidden" name="articleId" value="<?= $article->getId() ?>">
        <div>
            <button type="submit" class="btn btn-success">send</button>
        </div>

    </form>
</div>