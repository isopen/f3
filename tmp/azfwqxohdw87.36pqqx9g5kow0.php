<div>Раздел новостей</div>
<?php foreach (($news?:array()) as $new): ?>
    <div><?php echo $new['text']; ?> <?php echo $new['created_date']; ?></div>
<?php endforeach; ?>
