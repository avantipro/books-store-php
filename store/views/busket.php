<div id="content">

  <div style="padding-left: 30px;">


  <div id="busket">


<h2>cart</h2>


<!-- busket content -->
<!-- busket content -->
<!-- busket content -->
<form id="form" method="post" action="<?php echo Config::Url ?>updateCart/" >

  <table>

    <thead>

      <tr>

        <th>Book : </th>
        <th>Author : </th>
        <th>Price : </th>
        <th>Quantity : </th>
        <th>Amount : </th>

      </tr>

    </thead>



    <tbody>

<?php

    $view = new View();

    $view->showBusket($_SESSION['cart']);

?>

</tbody>
</table>

<!-- button refresh -->
<!-- button refresh -->
<p><input type="submit"  value="refresh cart" ></p>
<!-- button refresh -->
<!-- button refresh -->

</form>
</div>


<h3 id="order" class="order_btn"><span>+ TO ORDER</span></h3>
<h3 id="order2" class="order_btn" style="display: none;"> - HIDE</h3>

<!-- order -->
<!-- order -->
<div id="order1" style="display: none;  width: 100px;">




  <fieldset>


<form  method="post" action="<?php echo Config::Url ?>order/">

    <p>important fields *</p>


    <label for="">* Name : </label> <br>
    <input id="validateName" type="text" name="name" value=""> <span></span> <br>



    <label for="">* Email : </label> <br>
    <input id="validateEmail" type="text" name="email" value=""> <span></span> <br>



    <label for="">* Phone : </label> <br>
    <input id="validatePhone" type="text" name="phone" value=""> <span></span> <br>




    <label for=""> Address: </label> <br>
    <input type="text" name="address" value=""> <br>


    <label for=""> Wishes : </label>
    <textarea name="wishes" rows="5" cols="45"></textarea> <br>



    <input type="submit" id="validateButton"  value="Отправить заказ">


</form>


  </fieldset>

</div>
<!-- order -->
<!-- order -->

  </div>

</div>

<!-- busket content -->
<!-- busket content -->
<!-- busket content -->
