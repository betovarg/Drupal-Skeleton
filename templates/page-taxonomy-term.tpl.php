<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
	
	<!-- insertar google fonts, ejemplo:
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css" />	
    -->
    
    <!-- viewport para mobile, si es necesario
	<meta name="viewport" content="initial-scale=1.0,width=device-width" />
    -->

    <title><?php print $head_title ?></title>

	<!-- custom icons para iphone, ipad, iphone 4, android
	
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $base_path; ?>sites/default/files/customicon/customiconip4.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $base_path; ?>sites/default/files/customicon/customiconipad.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php print $base_path; ?>sites/default/files/customicon/customiconip.png" />
	
	-->

	<!-- insertar google analytics -->

  </head>
  <body <?php print drupal_attributes($attr) ?> class="<?php print $body_classes; ?>">

<div class="wrap">
  <?php print $skipnav ?>
  
    <div class="header"><div class="container">
	    <div class="logo-kb three columns offset-by-one">
	    	<?php echo l('Logo','inicio');?>
	    </div>
	    <div class="six columns nombre">
	    	<?php if(!isset($node)) { ?>
	    		<h1><a href="<?php print $base_path; ?>">Nombre del sitio</a></h1>
	    	<?php }else{ ?>
	    		<h2><a href="<?php print $base_path; ?>">Nombre del sitio</a></h2>
	    	<?php } ?>
	    </div>
    </div></div> <!-- /header /contianer -->

  <div class="container main" ><div class="limiter clearfix">

	<!-- cambio de ancho de columnas si es nodo o no -->
    <?php if(!isset($node)) { ?>
    	<div class="main" class="offset-by-two nine columns clearfix">
    <?php } ?>
    <?php if(isset($node)) { ?>
    	<div class="main" class="fifteen columns clearfix">
    <?php } ?>

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
    		
			<?php if ($title): ?><div class="column alpha">
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
	      <div class="right" class="alpha sidebar offset-by-one three columns">
	      	<div class="limiter">
		      	<?php print $right ?>
	      	</div>
	      </div>
	    <?php endif; ?>
		
	<?php } ?>

  </div></div>

  <div class="footer">
	<div class="footer-wrap">
	 	<div class="container">	 		 	

	 	  	<div class="alpha columns three offset-by-one">
				<?php print $social_footer; ?>
	  		</div>
	  		
	 	  	<div class="columns eight copyright">
				Derechos Reservados &copy 2011 - Estudio Manatí
	  		</div>
	
	  		<div class="columns three contacto">
				contacto
	  		</div>  		

	  	</div> <!-- container -->
	</div>	<!-- footer-wrap -->
  </div>
</div> <!-- fin wrap -->

	<?php print $scripts ?>

	<!-- Activar si se utiliza mobile 		
		<script type="text/javascript" src="<?php print $base_path; ?>sites/all/themes/manatibase/js/ios-viewport-scaling-bug-fix.js"></script>
	-->
	
    <!--[if lt IE 9]>
	<script type="text/javascript" src="<?php print $base_path; ?>sites/all/themes/manatibase/js/respond.min.js"></script>
	<script type="text/javascript" src="<?php print $base_path; ?>sites/all/themes/manatibase/js/selectivizr-min.js"></script>
    <![endif]-->

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="<?php print $base_path; ?>sites/all/themes/manatibase/js/imgsizer.js"></script>
	<![endif]-->

  <?php print $closure ?>

  </body>
</html>
