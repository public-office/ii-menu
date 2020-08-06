<?php snippet('header') ?>

  <nav>
    <div class="works-texts">
      <ul>
        <? $works = page('works-texts') ?>
        <?= $works->title() ?>
        <? foreach(page('works-texts')->children() as $single): ?>
          <li><a href="<?= $single->url() ?>"><?= $single->title() ?>, <?= $single->contributor()->toPage()->title() ?></a></li>
        <? endforeach ?>
      </ul>
    </div>

    <div class="contributors">
      <ul>
        <? $contributors = page('contributors') ?>
        <?= $contributors->title() ?>
        <? foreach(page('contributors')->children() as $contributor): ?>
          <li><a href="<?= $contributor->url() ?>"><?= $contributor->title() ?></a></li>
        <? endforeach ?>
      </ul>

      <div class="about">
        <? $about = page('about') ?>
        <?= $about->title() ?>
        <?= $about->text()->kirbytext() ?>
      </div>

    </div>
  </nav>

<?php snippet('footer') ?>
