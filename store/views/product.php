<!-- content -->
<!-- content -->
  <div id="content">

<div style="padding-left: 30px;">


    <h4> Name : <?php echo $mod1[1] ?> </h4>

    <h4> Author :  <?php echo $mod1[2] ?> </h4>

    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $mod1[4] ?> </p>

    <strong><p>Price :   <?php echo $mod1[5] ?>  UAH </p></strong>

    <p>


      <a class="more_btn" style="color: white; padding: 6px;"
      href="<?php  Config::NameSite ?>/books/<?php echo $url[1] ?>/<?php echo $url[2] ?>">return to list</a>


      <!-- add to cart button -->
      <a class="more_btn" style="color: white; padding: 6px;"
      id="cart" data-id="<?php echo $url[3]?>">add to cart</a>
      <!-- add to cart button -->
    </p>


</div>

  </div>
<!-- content without localhost -->
<!-- content <php echo Config::HOST >/ -->
