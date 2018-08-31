Начало контента


<? foreach ($this->news as $news): ?>
    <h3><?= $news['news_title'] ?></h3>
    <p><?= $news['news_content'] ?></p>
<? endforeach; ?>


Конец контента
