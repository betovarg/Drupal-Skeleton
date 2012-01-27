<?php
reset($rows);
$gridsize = count($rows[0]);
?>
<?php if (!empty($title)) : ?>
  <h3 class='grid-title'><?php print $title; ?></h3>
<?php endif; ?>
<div class="views-view-grid grid-<?php print $gridsize ?>">

    <?php foreach ($rows as $row_number => $columns): ?>
      <?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0 && count($rows) > 1) {
          $row_class .= ' row-first';
        }
        elseif (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <div class="gridRow <?php print $row_class; ?>">
        <?php foreach ($columns as $column_number => $item): ?>
          <div class="gridCol <?php print 'col-'. ($column_number + 1); ?>">
			<?php if ($item): ?>
	            <div class='grid-item'>     	
	            	<?php print $item; ?>
	            </div>
			<?php endif; ?>            	
          </div>
        <?php endforeach; ?>
        <div class="clear"></div>
      </div>
    <?php endforeach; ?>

</div>
