
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Books Store</title>


    <link rel="stylesheet" href="<?php  Config::NameSite ?>/public/css/default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
  <body>

<div id="wrapper">


<!-- header -->
<!-- header -->
  <div id="header">
    <h1>BOOKS  STORE</h1>
  </div>
<!-- header -->
<!-- header -->




<!-- mainmenu -->
<!-- mainmenu -->
<div id="mainmenu">

    <a href="http://<?php echo

    Config::NameSite ?>">Main Page</a>

    &nbsp;&nbsp;&nbsp;

    <a href="http://<?php echo Config::NameSite ?>/books/1/0/">Books</a>

</div>
<!-- mainmenu -->
<!-- mainmenu -->



<!-- cart section -->
<!-- cart section -->
<div id="cart_res" style="">


<a href="<?php echo Config::Url ?>busket/">
<strong>Cart</strong> : <br> &nbsp;&nbsp;&nbsp;


Quantity :
<span>
  <?php echo $_SESSION['total_items'] ?>
</span> &nbsp;&nbsp;&nbsp;


Total price :
<span>
  <?php echo $_SESSION['total_price'] ?> UAH.
</span>
</a>


</div>
<!-- cart section -->
<!-- cart section -->
