<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <title><?php echo $page_title; ?></title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="public/css/styles.css">
</head>

<body>
  <div id="main">

    <div id="fixed_header">
      <img src='public/images/tv_set.png' alt='tv_img' class='header_left'>Program Details
      <a class='header_right3' href='index.php?favorites=true'><img src='public/images/fav_head.png' alt='favorites' title='favorites'/></a>
      <a class='header_right2' href='./'><img src='public/images/home.png' alt='home' title='home'/></a>
      <a class='header_right1' href='settings.php'><img src='public/images/settings.png' alt='settings' title='settings'/></a>
    </div>

    <div id="header_spacer">
    </div>

    <div class="channel_info">
      <strong><?php echo $channum . ' - ' . $name;?></strong>
    <?php if($icon != "") {;?> 
      <img class='channel_right' src='<?php echo $icon;?>' alt='icon' title='icon'>
    <?php };?>
      <br/>
      <br/>
    <?php if($title != "") {;?> 
      <strong>Title:</strong><br/>
      <?php echo $title;?>
      <br/>
      <br/>
      <strong>Start Time:</strong> <?php echo $starttime;?><br/>
      <strong>End Time:</strong> <?php echo $endtime;?><br/>
      <br/>
      <strong>Description:</strong><br/>
      <?php echo $description;?><br/>
      <br/>
    <?php };?>
      <a href='<?php echo $link_flash;?>'>Play with Flash Player</a> 
    <?php if($link_direct != "") {;?> 
      | <a href='<?php echo $link_direct;?>'>Direct Link</a>
    <?php };?>
      <br/>
      <br/>
    </div> <!-- channel_info -->

  </div> <!-- main -->
</body>
</html>
