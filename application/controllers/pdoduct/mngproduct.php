<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
   
    public function showProduct()
    {
        echo "Product id" . $product_id;
        $this->_showProductName();
    }

    public function _showProductName()
    {
        echo "Product name : Ipone" ;
    }
}
//http://localhost/Project/index.php/mngproduct/shoeproduct
//http://localhost/Project/product/index.php/mngproduct/shoeproduct/2499