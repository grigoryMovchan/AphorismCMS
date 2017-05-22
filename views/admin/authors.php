<br>
<div class="inner cover">
    <?php
    if (isset($data['errors'])) {
        require __DIR__ . '/../errors/errorsList.php';
    }

    if (isset($data['successful'])) {
        require __DIR__ . '/../successful/successfulList.php';
        // если автор успешно добавлен, то поля формы останутся пустыми
        $_POST['authorName'] = NULL;
    }
    ?>
    <form class="text-left" action="/admin/addauthor" method="POST">
        <div class="input-group">
            <input type="text" class="form-control" aria-label="..." name="authorName" value="<?php echo @$this->html($_POST['authorName']); ?>">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default">Добавить имя</button>
            </div>
        </div>
    </form>
    <br>
    <ul class="list-group authors">
        <?php foreach ($data['authors'] as $author): ?>   
            <li class="list-group-item">
                <span class="badge"><?php echo $author['countQuotes']; ?></span>
                <a href="/admin/quotes?author_id=<?php echo $author['id']; ?>"><?php echo $author['name']; ?></a>
                <span> / </span>
                <a href="/admin/delAuthor?author_id=<?php echo $author['id']; ?>">Удалить</span></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>