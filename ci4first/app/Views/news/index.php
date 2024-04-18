<h2><?=esc($title)?></h2>
<?  if(! empty($news) && is_array($news) ): ?>
    <?  foreach($news as $news_item): ?>
            <h3><?=esc($news_item['title'])?></h3>
            <div class="main">
                <?=esc($news_item['body'])?>
            </div>
            <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View Article</a></p>
    <?  endforeach  ?>
<?  else :?>
        <h3>no News</h3>
        <p>unable to find any news for you</p>
<?  endif ?>
