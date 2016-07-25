<?php getHeader($data); ?>
<div class="jumbotron inner-page-title">
  <h1><?= $data['pagetitle'] ?></h1>
</div>

<div class="container inner-main-wrap">
    <div class="col-sm-12">
      <div class="imgwrap">
        <img src="http://<?= $_SERVER['HTTP_HOST'] ?>/public/images/issues/<?= $data['postImg'] ?>" alt="<?= $data['pagetitle'] ?>" />
      </div>
      <?= $data['postContent'] ?>
      <hr>
      <div class="mod-box mod-box--alt">
        <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/issues" class="link-box">
          <h3>
            <span>&laquo;</span>
            Back to Issues
          </h3>
        </a>
      </div>
      <hr>
    <?php getComponent('LinkBox', array('newsletter', 'media', 'twitter')); ?>

  </div>
</div>

<?php getFooter(array('video' => true)); ?>
