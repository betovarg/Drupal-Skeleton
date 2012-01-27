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
	    <div class="row">
			<div class="logo">
				<?php if($is_front) { ?>
				 <h1><a href="<?php print $base_path; ?>"><?php print $site_name; ?></a></h1>
				<?php }else{ ?>
				 <h2><a href="<?php print $base_path; ?>"><?php print $site_name; ?></a></h2>
				<?php } ?>
			</div>
	    </div>
	    <div class="row">
	    	<?php print $menu; ?>
	    </div>
    </div></div> <!-- /header /contianer -->
