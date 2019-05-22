<?php include_once('./views/header.php');?>
<section>
  <h2>Сеансы кинотеатра</h2>
  <h3>Сегодня:</h3>
  <table>
    <tr>
      <td>Зал</td>
      <td>Фильм</td>
      <td>Время</td>
      <td>Цена</td>
      <td>Бронирование</td>
    </tr>
<?php foreach ($seancesToday as $item): ?>
    <tr>
      <td><?=$item->hall?></td>
      <td><?=$item->movie?></td>
      <td><?=$item->time?></td>
      <td><?=$item->price?></td>
      <td><a href="<?=ROOT?>place/<?=$item->ID?>">Выбрать место</a></td>
    </tr>
<?php endforeach; ?>
  </table>
  <h3>Завтра:</h3>
  <table>
    <tr>
      <td>Зал</td>
      <td>Фильм</td>
      <td>Время</td>
      <td>Цена</td>
      <td>Бронирование</td>
    </tr>
<?php foreach ($seancesTomorrow as $item): ?>
    <tr>
      <td><?=$item->hall?></td>
      <td><?=$item->movie?></td>
      <td><?=$item->time?></td>
      <td><?=$item->price?></td>
      <td><a href="<?=ROOT?>place/<?=$item->ID?>">Выбрать место</a></td>
    </tr>
<?php endforeach; ?>
  </table>
</section>
<?php include_once('./views/footer.php');?>