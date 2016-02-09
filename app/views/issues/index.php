<?php getHeader($data); ?>

<div class="jumbotron inner-page-title">
  <h1><?= $data['pagetitle'] ?></h1>
</div>

<div class="container inner-main-wrap">
    <div class="col-sm-12">
      <h3>On the issues:</h3>
      <?php getComponent('issuesposts', $data['issues']); ?>


    <?php getComponent('LinkBox', array('newsletter', 'media', 'twitter', 'volunteer')); ?>

  </div>
</div>

<?php getFooter(); ?>
