<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/index.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <link rel="icon" href="/public/favicon.png" type="image/x-icon" />
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <?php
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>
<div id="wrapper">
<div class="row">


<div id="header" class="col-12">


    <?php if (Session::get('loggedIn') == true):?>
      <a href="<?php echo URL; ?>index">Index</a>
      <a href="<?php echo URL; ?>help">Help</a>
  <?php endif; ?>
  <?php if (Session::get('loggedIn') == true):?>
      <a href="<?php echo URL; ?>dashboard">Dashboard</a>
      <a href="<?php echo URL; ?>note">Notes</a>

      <?php if (Session::get('role') == 'owner'):?>
      <a href="<?php echo URL; ?>user">Users</a>
      <?php endif; ?>
        <a href="<?php echo URL; ?>dashboard/logout" style="float:right;">Logout</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>login" style="float:right;">Login</a>
    <?php endif; ?>
</div>

<div id="content" class="col-12">
