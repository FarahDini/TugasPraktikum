<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "R.Farah Dini Qoyyimah",
				'nim' => "1541180174",
				'alamat' => "Jl. Kelug Gang 2 No 13 Kota Probolinggo",
				'no' => "082335363651",
				'email' => "dinifarah1@gmail.com",
				'university' => "Politeknik Negeri Malang",
				'hobby' => "Shopping & Beauty Makeup"
				
			);
		$this->load->view('about',$data);
		
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */