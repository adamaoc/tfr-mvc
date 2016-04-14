<div  class="posts-wrap row">
  <?php foreach ($data as $issue) : ?>
    <article class="posts-postbox posts-postbox--no-break">
      <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/issues/<?= $issue->link; ?>/">
        <h2><?= $issue->mainTitle; ?></h2>
        <img src="./public/images/issues/<?= $issue->img; ?>" alt="<?= $issue->title; ?>" />
        <p><?= $issue->title; ?></p>
      </a>
    </article>
  <?php endforeach; ?>
</div>
<?php print_r($_SERVER); ?>
