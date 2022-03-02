<?php foreach ($newsList as $news): ?>
    <div class="news">
        <h3><a href="<?=route('news.show', ['id' => $news["id"]]) ?>"><?=$news["title"]?></h3></a>
        <img src="<?=$news["image"]?>" alt="">
        <br>
        <p><em>Статус: <?=$news["status"]?></em></p>
        <p><em>Автор: <?=$news["author"]?></em></p>
        <p><?=$news["description"]?></p>
    </div>
    <hr>
<?php endforeach; ?>