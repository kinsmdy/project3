<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
{
	parrent::__construct();
	//  $this->load->view('Customer_model','cm');
}

	public function index()
	{
		echo "Database";
	}

	public function getProducts()
    {
    $data['query'] = $this->pm->sgetAllv2(); 
	$this->load->view('show_product',$data);
	}

    public function viewProducts($cd = 'C2499')
    {
	$data['query'] = $this->pm->getBycodev2($cd); 
	$this->load->view('show_product',$data);
		}
    
    public function deleteProducts($cd = 'C2499')
    {
	$this->pm->removeBycodel($cd);
    $this->grtProducts();
		}


}


