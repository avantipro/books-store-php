<?php


class Model extends Database
{

    public function getMenu()
    {
        $sql = "SELECT * FROM categories";

        $query = mysql_query($sql) or die(mysql_error());

        return $this->db_result_to_array($query);
    }



    public function db_result_to_array($result)
    {
        $res_array = array();

        for ( $i=0; $row = mysql_fetch_array($result); $i++ ) {

            $res_array[$i] = $row;

        }

        return $res_array;

    }



    public function getContent()
    {
        $controller = new Controller();

        $url = $controller->getUrl();

        $sql = "SELECT id, title, author, description, price, image, id_cat
                FROM products
                WHERE id_cat=".$url[1]." ORDER BY id DESC LIMIT ".$url[2].",".Config::PerPage;

        $query = mysql_query($sql) or die(mysql_error());

        return $this->db_result_to_array($query);
    }



    public function getPage()
    {
        $controller = new Controller();

        $url = $controller->getUrl();

        $arr = array();

        $sql = "SELECT id FROM products WHERE id_cat =" . $url[1];# quantity records

        $query = mysql_query($sql) or die(mysql_error());

        $row = mysql_num_rows($query);

        $pages = ceil($row/Config::PerPage);


        if ( $url[2] >= $row) {
            $controller->getError();
            return false;
        }

        for ( $i=0; $i < $pages; $i++ ) {

            $link ='<a href="http://';
            //$link .= Config::HOST;
            $link .= '/';
            $link .= Config::NameSite;
            $link .= '/';
            $link .= $url[0];
            $link .= '/';
            $link .= $url[1];
            $link .= '/';
            $link .= ($i * Config::PerPage);
            $link .= '">|';
            $link .= ($i + 1);
            $link .= '</a>';

            $array[$i] = $link;
        }

        return $array;
    }



    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id=". $id;//$url[3];

        $query = mysql_query($sql) or die(mysql_error());

        $row = mysql_fetch_row($query);

        $sql1 = "SELECT id FROM products ORDER BY id DESC";

        $query1 = mysql_query($sql1) or die(mysql_error());

        $row1 = mysql_result($query1, 0, 'id');      

        if ( $id > $row1 ) return false;//$url[2]

        return $row;
    }



    public function getPrice($id)
    {
        $query = "SELECT price FROM products WHERE id = '$id'";

        $result = mysql_query($query);

        if ( $result ) {

            $item_price = mysql_result($result, 0, 'price');

        }

        return $item_price;
    }



    public function insertBusket()
    {
        # example 3

        foreach ( $_SESSION['cart'] as $id => $qty ) {

          if ( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) ) {

              echo 'Please input to empty fields';

              return false;
          }

          $name =  mysql_real_escape_string(substr(trim($_POST['name']), 0, 20));

          $email = mysql_real_escape_string(substr(trim($_POST['email']), 0, 20));

          $phone =  mysql_real_escape_string(substr(trim($_POST['phone']), 0, 15));

          $address =  mysql_real_escape_string(substr(trim($_POST['address']), 0, 50));

          $additionally = mysql_real_escape_string(substr(trim($_POST['wishes']), 0, 500));

          $quantity = $qty;

          $date = time();

          $session_id = session_id();



          $sql = "INSERT INTO orders (
            `name`, `email`, `address`,
            `phone`, `wishes`, `product_id`,
            `quantity`, `date`, `session_id`
          ) VALUES (
            '$name', '$email', '$address',
            '$phone', '$additionally', '$id',
            '$quantity', '$date', '$session_id'
          );";

          $query = mysql_query($sql) or die(mysql_error());

          $_SESSION['cart'][$id] = 0;

          if ( $query == false ) {

              echo 'Error';

              return false;

          }

        }

        $controller = new Controller();

        $_SESSION['total_items'] = 0;

        $_SESSION['total_price'] = '0.00';

        $controller->thankYou();

        return false;
    }
}
