<?php

require '../includes/init.php';


$conn = require '../includes/db.php';

$articles = Article::getAll($conn);

?>

<?php require '../includes/header.php'; ?>

<h2> Administration </h2>

<p> <a href="/PDO/admin/new-article.php">New article</a> </>

<?php if (empty($articles)) : ?>
<p>No articles found.</p>
<a href="?page=<?= $paginator->previous; ?>"> Previous</a>
<?php else : ?>


<table>
    <thead>
        <th> Title </th>
    </thead>
    <tbody>

        <?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php endif; ?>

<?php require '../includes/footer.php'; ?>