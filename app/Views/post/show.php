<h1><?= htmlspecialchars($post['title']) ?></h1>

<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

<p>
    <a href="/post/edit/<?= $post['id'] ?>">✏️ Редактировать</a> |
    <a href="/post/delete/<?= $post['id'] ?>" onclick="return confirm('Удалить пост?');">🗑️ Удалить</a>
</p>

<p><a href="/post">← Назад к списку</a></p>
