<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('facebook_login');
		
	}

	public function fetch()

	{

		$user['email']=$this->input->get_post("email");
		$user['password']=$this->input->get_post("pwd");


		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$url='http://services.trainees.baabtra.com/BM-41884/index.php/Logincontroller/index';
		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		/*print_r($result);*/
	 
		
		
		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		$result1['data']=$json;
		
		//foreach ($json as $val)
			/*Responsecode=200 means login successfull
			 Responsecode=404 means emailid incorrect
			 Responsecode=500 means emailid correct ,password wrong case*/

			if($json['ResponseCode']==200)	//checks the value of responsecode returned from the service
				{
				$this->load->view("loginpage",$result1);} //loads a view from views folder
			 
			else if($json['ResponseCode']==500)
			{
				$this->load->view("wrongpass",$result1);
			}
			

			else if($json['ResponseCode']==404)
			{
				$this->load->view("wrongcred",$result1);
			}
			
		

	}

}




