<div>Раздел новостей</div>
<?php if (empty($news)): ?>
  <div>Нет новостей по указанному фильтру</div>
<?php endif; ?>
<?php foreach (($news?:array()) as $new): ?>
  <div><?php echo $new['text']; ?> <?php echo $new['created_date']; ?></div>
<?php endforeach; ?>
