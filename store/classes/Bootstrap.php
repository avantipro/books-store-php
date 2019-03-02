<?php

class Bootstrap
{

    public function __construct()
    {
        session_start();

        $controller = new Controller();

        $url = $controller->getURL();


        switch ($url[0]) {



            case 'index':

                $controller->getIndex();

            break;




            case 'books':

                if (isset($url[3])) {
                    $controller->getError();
                    return false;
                }

                if (isset($url[1]) &&
                is_numeric($url[2]) &&
                is_numeric($url[1]) &&
                is_numeric($url[2])) {
                $controller->getBooks();
              } else {
                $controller->getError();
              }

            break;




            case 'product':

                if (isset($url[3]) &&
                is_numeric($url[3])) {
                $controller->getProduct();
              } else {
                $controller->getError();
              }

            break;




            case 'cart':

                if (isset($url[1]) &&
                is_numeric($url[1])) {
                $controller->getCart($url[1]);
                }

            break;




            case 'busket':

                $controller->getBusket();

            break;




            case 'updateCart':

                $controller->updateCart();

            break;




            case 'order':

                if ( isset($_POST['name']) ) {
                $controller->insertBusket();
              } else {
                $controller->getError();
              }

            break;



            default:

                $controller->getError();

            break;
        }
    }
}
