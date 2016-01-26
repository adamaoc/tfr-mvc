<div  class="posts-wrap row">
  <?php foreach ($data as $issue) : ?>
    <article class="posts-postbox posts-postbox--no-break">
      <a href="<?= $issue->link; ?>" target="_blank">
        <h2><?= $issue->mainTitle; ?></h2>
        <img src="<?= $issue->img; ?>" alt="<?= $issue->title; ?>" />
        <p><?= $issue->title; ?></p>
      </a>
    </article>
  <?php endforeach; ?>
</div>
