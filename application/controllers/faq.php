<?php

class FAQ extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        
	}
	
	function index()
	{
	
		echo $this->load->view('pages/faq');	
	}

   
    
    
}

?>