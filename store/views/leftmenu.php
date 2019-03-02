<!-- left menu -->
<!-- left menu -->
  <div id="menuleft">



<table style="width:200px; border: 1px solid black; background-color: #D3D3D3; border-radius: 0px 0px 3px  3px;">


  <tr style="height: 10px;">

    <th class="category ">
      <h3 class="h1-position">Categories</h3>
    </th>

  <tr>


  <tr>
    <td>

      <ul>

      <?php foreach ($mod as $value): ?>


        <li class="items">

  <a href="http://<?php echo  Config::NameSite .
  '/books/' . $value['id']?>/0/"><?php echo $value['title'] ?></a>

        </li>

      <?php endforeach; ?>

      </ul>


    </td>

  </tr>

</table>



  </div>
<!-- left menu Config::HOST . '/' . -->
<!-- left menu -->
