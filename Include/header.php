
<?php
require_once('include/bootstrap.php');
$sql = 'SELECT * FROM page';
$data = db_select($sql);
?>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesd.css">
</head>
<body>
    <div>
        <header>
          <header>
    <a href="indexd.html"><img src="logo.jpg" id="logo"></a>
    <h1 a href="indexd.html"> MAGAZIN ZA DETSKI STOKI </a><h1>
  </header>
  <br>
  <div class="spacer"></div>
  <fieldset class="menu">
    <legend>
      MENU
    </legend>
    <nav>
      <a href="indexd.php">Home</a><br>
      <a href="Aboutusd.php">About Us </a><br>
      <a href="Contactsd.php">Contact Us </a><br>
      <a href="Catalogd.php">Catalog </a><br>
      <a href="blogd.php">Blog </a><br>
      <?php foreach($data as $key => $value) : ?>

          <a href="page_content.php?id=<?=$value['id'];?>">        
                <?php echo $value['title'];?></a>



              <?php endforeach; ?>
            
    </nav>
  </fieldset>
               