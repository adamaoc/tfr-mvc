<?php getHeader($data); ?>

<div class="jumbotron inner-page-title">
  <h1><?= $data['pagetitle'] ?></h1>
</div>

<div class="container inner-main-wrap">
    <div class="col-sm-12">
      <p>Want to get involved but not really sure how you could help? Here are some tips.</p>
      <ul>
        <li>Be active on Social Media - if you're on twitter, reach out.</li>
        <li>Get together with family and neighbors and actually discuss politics.</li>
        <li>Reach out on <a href="http://marcorubio.com/team-marco/" target="_blank">MarcoRubio.com</a> and sign up for their newsletter and request to help.</li>
      </ul>
    </div>

    <div class="col-sm-12" style="text-align: center;">
      <h2>This election is a generational choice about what kind of country we will be.</h2>
      <h3>Are you ready for a new American Century?</h3>

      <?php getComponent('flexvid'); ?>

      <p>Watch highlight's from Marco's announcement speech at the Freedom Tower in Miami</p>
    </div>

    <div class="col-sm-12">
      <div class="mod-box">
        <a href="/media" class="link-box">
          <h3>
            <span class="icon">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#image"></use></svg>
            </span>
            Media from TexansForRubio
          </h3>
        </a>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="mod-box">
        <a href="https://twitter.com/texansforrubio/" target="_blank" class="link-box">
          <h3>
            <span class="icon">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg>
            </span>
            @TexansForRubio on Twitter
          </h3>
        </a>
      </div>
    </div>
  </div>
</div>

<?php getFooter(array('video' => true)); ?>
