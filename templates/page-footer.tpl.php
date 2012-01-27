  <div class="footer">
	<div class="footer-wrap">
	 	<div class="container">	 		 	
			<div class="row">
				<?php
				$menu_name = variable_get('menu_primary_links_source', 'primary-links');
				print menu_tree($menu_name);
				?>
			</div>
			
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
