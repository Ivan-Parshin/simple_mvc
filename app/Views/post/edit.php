<h1>Редактировать пост</h1>

<form method="post" action="/post/update/<?= $post['id'] ?>">
    <label>Заголовок:</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required><br><br>

    <label>Содержание:</label><br>
    <textarea name="content" rows="8" cols="50" required><?= htmlspecialchars($post['content']) ?></textarea><br><br>

    <button type="submit">💾 Обновить</button>
</form>

<p><a href="/post">← Назад к списку</a></p>
