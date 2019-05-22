<?php include_once('./views/header.php');?>
<style>
  .places {
    text-align: center;
  }
  .places > div {
    margin-top: 5px;
  }
  .place-free, .place-booked, .place-payed {
    display: inline-block;
    width: 25px;
    padding-top: 4px;
    box-sizing: border-box;
    height: 25px;
  }
  .place-free {
    background: #99ff99;
  }
  .place-booked {
    background: #ffff00;
  }
  .place-payed {
    background: red;
  }
</style>
<section>
  <h2>Места</h2>
  <div class="places">
<?php foreach ($places as $row => $list): ?>
    <div>
      <b><?=$row?></b>
<?php   foreach ($list as $item): ?>
      <span class="place-<?=['free', 'booked', 'payed'][$item->ID_status]?>"><?=$item->number?></span>
<?php   endforeach; ?>
    </div>
<?php endforeach; ?>
  </div>
</section>
<?php include_once('./views/footer.php');?>