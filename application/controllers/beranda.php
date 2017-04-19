<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class beranda extends CI_Controller{
    
    function __construct(){
		parent:: __construct();
		$this->load->helper('url');
	}
    
    public function index(){
        $this->load->view('Welcome Message');
        $this->load->helper('url');
    }
    public function home(){
        $this->load->view('index');
    }
    
    public function donasi(){
        $this->load->view('donasi');
    }
    
    public function aboutus(){
        $this->load->view('aboutus');
    }
	public function detail(){
		$this->load->view('detail');
	}
}

?>