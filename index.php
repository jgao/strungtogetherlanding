<?php
  define('IMAGE_BASE', 'resources/images/');
  define('CSS_BASE', 'css/');
  define('FILE_BASE', 'resources/files/');
  define('JS_BASE', 'js/');
  define('PAGE_BASE', 'pages/');
  define('PAGE_SUFFIX', '.php');

  $pageList = array('vision', 'team', 'signup', 'developer');
?>

<html>
  <head>
    <title>Strung Together - We Can Be Strong Together</title>
    <?php foreach($pageList as $page){ ?>
      <link rel="stylesheet" type="text/css" href="<?php echo CSS_BASE.$page.'.css'; ?>" />
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_BASE.'main.css'; ?>" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_BASE.'main.js'; ?>"></script>
 </head>

  <body>
    <div id="page">
      <div id="header">
        <div id="strungtogetherlogo">
          <img id="strungtogetherlogo" src="<?php echo IMAGE_BASE.'strungtogetherlogo.png'; ?>" alt="strungtogetherlogo" />
        </div>
        <div id="navigation">
          <?php foreach($pageList as $page){ ?>
            <div id="<?php echo $page; ?>" class="navibutton">
              <div class="navibuttontext"><?php echo $page; ?></div>
            </div>
          <?php } ?>
        </div>
      </div>

      <div id="body">
        <?php foreach($pageList as $page){ ?>
          <div id="<?php echo $page; ?>" class="bodypage">
            <?php include(PAGE_BASE.$page.PAGE_SUFFIX); ?>
          </div>
        <?php } ?>
      </div>

      <div id="footer">
        &#169; Strung Together 2013. All rights reserved.
      </div>

    </div>
  </body>
</html>
