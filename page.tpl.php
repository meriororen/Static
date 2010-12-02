<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body>
	<div id="logo">
		<a href="/idatokyotech">
			<img src="/idatokyotech/themes/static/images/spacer.gif" width="100" height="93" style="margin-left: 60px;">
		</a>
	</div>
	<div id="wrapper">
		<div id="top">
		<?php if(!empty($navigation)): ?>
          	<div id="topnav">
            	<?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
        	</div>
        <?php endif; ?>			
        </div>
        <div class="clearfix"></div>
        <?php if($is_front) : ?>
		<div id="scroller">
			<div id="slider">
    			<?php print $slider; ?>
    		</div>
			<div id="highlight">
				<h3>Highlights</h3>
  					<?php print $highlights; ?>
			</div>
		</div>
		<div id="subcontent">
			<div id="scont-left"><?php print $subcontleft; ?></div>
			<div id="scont-center"><?php print $subcontcenter; ?></div>
			<div id="scont-right"><?php print $subcontright; ?></div>
		</div>
		<?php endif; ?>
		
		<!-- not on front page -->
		<?php if(!$is_front) : ?>
		<div id="content">
		<!-- main -->
		<div id="main" class="grid_8">
		  <?php if (!empty($title)): ?><h1 class="judul" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
          <?php print $content; ?>				
		<!-- main ends -->
		</div>
		</div>
		 <?php if (!empty($sidebar) || isset($secondary_links)): ?>
        <div id="sidebar-right" class="sidebar">
           <div id="secondary-links"><?php print theme('links', $secondary_links, array('class' => 'sec')) ?></div>
          <?php print $sidebar; ?>
        </div> <!-- /sidebar-right -->
      	<?php endif; ?>
      	<?php endif; ?>
      	<!-- /not on front page -->
      	
		<div class="clearfix"></div>
		<div id="footer">
		<?php print $footer; ?>
		</div>
	</div>
</body>
</html>