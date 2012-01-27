<?php if (empty($hide)): ?>

<?php if (!empty($pre_object)) print $pre_object ?>

<div class="content-body">
  <?php if (!empty($title) && !$page): ?>
    <h2 class='<?php print $hook ?>-title'>
      <?php if (!empty($new)): ?><a id='new' class='new'><?php print('New') ?></a><?php endif; ?>
      <a href="<?php print $node_url ?>"><?php print $title ?></a>
    </h2>
  <?php endif; ?>

  <div class='comment-count'></div>
  <?php if (!empty($submitted)): ?>
    <div class='submitted clearfix'>
	    <?php print $picture; ?>
	    <?php print $submitted ?>
    </div>
  <?php endif; ?>
  	<div class="node-tags">
	  <?php if (!empty($terms)): ?>
		<?php print $terms; ?>
	  <?php endif; ?>  
	</div>

  <?php if (!empty($content)): ?>
    <div class='content clearfix'>
      <?php print $content ?>
    </div>
  <?php endif; ?>
  
</div>

<?php if (!empty($post_object)) print $post_object ?>

<?php endif; ?>