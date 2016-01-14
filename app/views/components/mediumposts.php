<h2>Medium Posts</h2>

<div  class="posts-wrap row">
<?php foreach ($data as $post) : ?>
  <div class="posts-postbox">
    <h3><a href="<?= $post['link']; ?>"><?= $post['title']; ?></a></h3>
    <em><small><?= $post['pubDate']; ?></small></em>
    <?php echo htmlspecialchars_decode($post['description']); ?>
  </div>
<?php endforeach; ?>
</div>
