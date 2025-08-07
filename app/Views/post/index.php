<h1>Блог</h1>

<a href="/post/create">➕ Создать пост</a>

<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div style="margin-top: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
            <h2>
                <a href="/post/show/<?= $post['id'] ?>">
                    <?= htmlspecialchars($post['title']) ?>
                </a>
            </h2>
            <a href="/post/edit/<?= $post['id'] ?>">✏️ Редактировать</a> |
            <a href="/post/delete/<?= $post['id'] ?>" onclick="return confirm('Удалить пост?');">🗑️ Удалить</a>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Пока нет постов.</p>
<?php endif; ?>
