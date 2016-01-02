<?php getHeader($data); ?>

<div class="jumbotron inner-page-title">
  <h1><?= $data['pagetitle'] ?></h1>
</div>

<div class="container inner-main-wrap">
    <div class="col-sm-12">
      <h3>On the issues:</h3>
      <article>
        <h4>President Obama’s One-Sided Concessions To Cuba Are Flat Out Dangerous</h4>
        <p>Cuba’s government is an enemy of the United States, and here’s why it should matter to every American.</p>
        <a href="https://marcorubio.com/issues/cuba/" target="_blank">learn more</a>
      </article>

      <article>
        <h4>Protecting LIFE at EVERY stage</h4>
        <p>Marco Rubio supports protecting life at every stage. He believes life is a fundamental precept of our country.</p>
        <a href="https://marcorubio.com/issues/protecting-life-at-every-stage/" target="_blank">learn more</a>
      </article>

      <article>
        <h4>President Obama Has Failed To Stand With Israel</h4>
        <p>Israel deserves our support and respect. We must stand strong with Israel.</p>
        <a href="https://marcorubio.com/issues/israel/" target="_blank">learn more</a>
      </article>

      <article>
        <h4>Stand Strong Against Iran</h4>
        <p>We must continue to stand strong against the Iranian regime.</p>
        <a href="https://marcorubio.com/issues/iran/" target="_blank">learn more</a>
      </article>
    </div>

    <?php getComponent('LinkBox', array('newsletter', 'media', 'twitter')); ?>
    
  </div>
</div>

<?php getFooter(); ?>
