<?php getHeader($data); ?>

<div class="jumbotron inner-page-title">
  <h1><?= $data['pagetitle'] ?></h1>
</div>

<div class="container inner-main-wrap">
  <div class="col-sm-12">
    <ul>
    <?php foreach ($data['pages']['mainlinks'] as $link) : ?>
    	<li>
    		<a href="/<?= $link['slug'] ?>">
    			<?= $link['pagename'] ?>
    		</a>
    	</li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>

<?php getFooter(); ?>
