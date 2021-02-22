<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include('../dynamic/header.php');
        echo $docPages;
      ?>
  </head>
  <body>
    <div class="row">
      <div class="column left">
        <?php include('dynamic/pages.php'); ?>
      </div>
      <div class="column right">
        <h1>Overview</h1>
      </div>
    </div>
  </body>
</html>
<style>
<?php include 'style/global.css'; ?>
</style>