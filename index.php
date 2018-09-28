<?php

define('PROJECT_DIRECTORY', dirname(__FILE__));
define('BASE_DIRECTORY', PROJECT_DIRECTORY );

require 'common/php/head.php';

// CHANGE ME !
$ID = 'kr_test_template_927';

KrConfig::init([
  'client' => 'maje',
  'page_type' => 'landing',
]);

// SET THIS VARIABLE TO 'TRUE' TO BUST THE CACHE OF SCSS FILES
$BUST_CACHE_FOR_SCSS = false;

// IN CASE YOU NEED TO CHANGE PATH TO IMAGES
// if(PROD()) $PATH_TO_IMAGES = 'LP/' . ID() . '/images/';

// ADD HERE YOUR CUSTOM JS FILES TO INCLUDE (relative paths)
$SCRIPTS[] = 'src/javascripts/script.js';

// ADD HERE YOUR CUSTOM CSS FILES TO INCLUDE (relative paths)
$STYLES[] = 'src/styles/_bootstrap-custom.scss';
$STYLES[] = 'common/styles/global.scss';
$STYLES[] = 'common/styles/global_' . KrConfig::$CLIENT . '.scss';
// $STYLES[] = 'common/styles/mobile_full_width.scss';
$STYLES[] = 'src/styles/style.scss';

load_words(
  'URL',
  'https://docs.google.com/spreadsheets/d/e/2PACX-1vR9uZ5e-DpytljBiOel_umKYGSokfgLO3Lm_CaprOCv66ofZAYHgHSBz1eie1WK1BJXbJ_UOZGK9hs7/pub?gid=1808992227&single=true&output=csv', // URL TO 'URL' CSV GOES HERE
  'data/_urls.php'
  );
load_words(
  'TXT',
  'https://docs.google.com/spreadsheets/d/e/2PACX-1vR9uZ5e-DpytljBiOel_umKYGSokfgLO3Lm_CaprOCv66ofZAYHgHSBz1eie1WK1BJXbJ_UOZGK9hs7/pub?gid=0&single=true&output=csv', // URL TO 'TXT' CSV GOES HERE
  'data/_words.php'
  );
load_products(
  '', // URL TO 'PRODUCTS' CSV GOES HERE
  'data/_products.php'
  );

require 'common/php/header.php';

require 'src/templates.php';
?>

<div class="kr_content_wrapper" id="<?= ID() ?>" data-lang="<?= LANG() ?>" data-lang-short="<?= SHORT_LANG() ?>">
  <div class="container">

    <div class="row intro">
        <img src="<?=PATH_TO_IMAGES()?>/intro.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/intro@2x.jpg?$staticlink$ 2x" width="100%" />
      </div>
      <div class="row w20">
        <div class="pull-left text-body">
          <img class="w20-logo" src="<?=PATH_TO_IMAGES()?>/w20.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/w20@2x.jpg?$staticlink$ 2x"/>
          <div class="w20-description"><?=word('TXT_TXT_1') ?></div>
          <div class="w20-link"><?=word('TXT_CTA_DISCOVER') ?></div>
        </div>
        <div class="pull-left basket">
          <img src="<?=PATH_TO_IMAGES()?>/basket.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/basket@2x.jpg?$staticlink$ 2x"/>
        </div>

      </div>
      <div class="row campaign">
        <div class="pull-left">
            <img src="<?=PATH_TO_IMAGES()?>/campaign.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/campaign@2x.jpg?$staticlink$ 2x"/>
        </div>
        <div class="pull-left text-body">
          <div class="campaign-title"><?=word('TXT_BLOC_2') ?></div>
          <div class="campaign-link"><?=word('TXT_CTA_DISCOVER') ?></div>
        </div>
        
      </div>
      <div class="row product">
        <div class="pull-left item">
            <img src="<?=PATH_TO_IMAGES()?>/jacket.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/jacket@2x.jpg?$staticlink$ 2x"/>
            <div class="description"><?=word('TXT_PRODUCT_1') ?></div>
        </div>
        <div class="pull-left item dress">
            <img src="<?=PATH_TO_IMAGES()?>/dress.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/dress@2x.jpg?$staticlink$ 2x"/>
            <div class="description"><?=word('TXT_PRODUCT_2') ?></div>
        </div>
        <div class="pull-left item">
            <img src="<?=PATH_TO_IMAGES()?>/sneakers.jpg?$staticlink$" srcset="<?=PATH_TO_IMAGES()?>/sneakers@2x.jpg?$staticlink$ 2x"/>
            <div class="description"><?=word('TXT_PRODUCT_3') ?></div>
        </div>
      </div>

    <?php // require 'common/php/button_top.php'; ?>
  </div>
</div>

<?php require 'common/php/footer.php';
