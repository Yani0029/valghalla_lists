<div class="valgsteder-kvittering-list">
<?php if($lists): ?>
  <?php foreach($lists as $nid => $constituency): ?>
  <h3><?php print "Valgkreds: <a href='/node/$nid'>".$constituency['title']."</a>"; ?></h3>
  <ul>
    <?php foreach($constituency as $key => $number): ?>
      <?php if(is_numeric($key)): ?>
      <li>
        <?php print "<a href='/valghalla_lists/kvittering/$key'>".$number['title']."</a>"; ?>
      </li>
      <?php endif;?>
  </ul>
  <?php endforeach; ?>
  <?php endforeach; ?>
  <?php else: ?>
  <div>Der er ikke valgt noget valg</div>
<?php endif;?>
</div>

