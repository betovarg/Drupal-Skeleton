<?php require_once (drupal_get_path('theme','manatibase').'/templates/page-header.tpl.php');?>

  <div class="container row" ><div class="limiter clearfix">

	<?php if ($right): ?>
	<div class="main offset-by-one eleven columns clearfix">
	<?php elseif(empty($right)): ?>
	<div class="main fifteen columns clearfix">
	<?php endif; ?>
   	
	  <?php if ($help || ($show_messages && $messages)): ?>
	    <div id="console" >
	      <?php print $help; ?>
	      <?php if ($show_messages && $messages): print $messages; endif; ?>
	    </div>
	  <?php endif; ?>

		<?php if ($over_content): ?>
	    	<div class="over-content">
				<?php print $over_content; ?>
	    	</div>
		<?php endif; ?>
    	
    	<div class="limiter content-container">
    		    		
			<?php // if(isset($node)) { ?>
				<?php // if ($breadcrumb) print $breadcrumb; ?>
			<?php // } ?> <!-- se imprime el breadcrumb, problema con nuevo token, activar si resuelto -->
			
			<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
    		
			<?php if ($title): ?><div class="row alpha">
				<?php if(isset($node)) { ?>
					<h1 class="page-title"><?php print $title ?></h1></div>
				<?php } ?>	
				<?php if(!isset($node)) { ?>
					<h2 class="page-title"><?php print $title ?></h2></div>
				<?php } ?>
			<?php endif; ?>
	        <?php if ($tabs) print $tabs ?>
	        <?php if ($tabs2) print $tabs2 ?>
	        <div class="content" class="clear">
	        	<?php print $content ?>	        	
	        </div> <!-- content -->

        </div>        
	    <?php if ($under_content): ?>
		    <div class="sub">
		    	<div class="limiter">
		    		<div class="content" class="clearfix"><?php print $under_content ?></div>
		    	</div>
		    </div>        
	    <?php endif; ?>
        
        <?php print $feed_icons ?>
        
    </div>

	<?php if(!isset($node)) { ?>
		
		<?php if ($right): ?>
	      <div class="right sidebar three columns">
	      	<div class="limiter">
		      	<?php print $right ?>
	      	</div>
	      </div>
	    <?php endif; ?>
		
	<?php } ?>

  </div></div>

<?php require_once (drupal_get_path('theme','manatibase').'/templates/page-footer.tpl.php');?>