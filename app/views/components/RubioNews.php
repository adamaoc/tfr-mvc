<div class="col-sm-6">
  <div class="mod-box mod-box--news">
    <h3>
      <span class="icon">
        <svg><use xlink:href="#paper"></use></svg>
      </span>
      Rubio News
    </h3>
    <p>Check out the latest in Marco Rubio headlines as he makes his way across American spreading the message.</p>
    <hr />
    <?php foreach($data as $item): ?>
      <article>
        <h4>
          <a href="<?= $item['link'] ?>">
            <span><?= $item['title'] ?></span>
          </a>
        </h4>
        <p><?= $item['pubDate'] ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</div>
