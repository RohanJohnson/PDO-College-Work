<?php

require 'includes/init.php';


$conn = require 'includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 4);

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>
<?php require 'includes/header.php'; ?>


<?php if (empty($articles)): ?>
<p>No articles found.</p>
<a href="?page=<?= $paginator->previous; ?>"> Previous</a>
<?php
else: ?>

<ul>
    <?php foreach ($articles as $article): ?>
    <li>
        <article>
            <div class="titl">
                <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
            </div>
            <p><?= htmlspecialchars($article['content']); ?></p>
        </article>
    </li>
    <?php
    endforeach; ?>
</ul>

<nav>
    <ul>
        <li>
            <a href="?page=<?= $paginator->next; ?>"> Next</a>
        </li>
        <li>
        <?php if ($paginator->previous): ?>
            <a href="?page=<?= $paginator->previous; ?>"> Previous</a>
            <?php
    else: ?>
                Previous
            <?php
    endif; ?>
        </li>
    </ul>
</nav>

<?php
endif; ?>

<?php require 'includes/footer.php'; ?>