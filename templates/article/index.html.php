<h1>Les articles</h1>

<a href="?type=article&action=create" class="btn btn-success">Create</a>

<?php foreach ($articles as $article) : ?>

    <div class="form-control">

        <h2>Titre : <?= $article->getTitle() ?></h2>
        <p>auteur : <?= $article->getAuthor()->getUsername() ?></p>
        <p>Contenu : <?= $article->getContent() ?></p>

        <a href="?type=article&action=show&id=<?= $article->getId() ?>" class="btn btn-primary">Voir</a>

    </div>


<?php endforeach; ?>
