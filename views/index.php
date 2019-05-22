<?php include_once('./views/header.php');?>
<section>
  <h2>Кинотеатры</h2>
<?php foreach ($cinemas as $item): ?>
  <div><a href="<?=ROOT?>cinema/<?=$item->ID?>"><?=$item->name?> (<?=$item->address?>)</a></div>
  <ul>Залы:
<?php   foreach ($item->halls as $hall): ?>
    <li><a href="<?=ROOT?>hall/<?=$hall->ID?>"><?=$hall->name?></a></li>
<?php   endforeach; ?>
  </ul>
<?php endforeach; ?>
</section>
<?php include_once('./views/footer.php');?>