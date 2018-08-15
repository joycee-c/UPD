<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientseller extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('client_model');
		$this->load->database('default');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//automatic view
		$this->load->view('client/seller');
	}
	public function insertcl()
	{
		$fname =  $this->input->post('fName');
		$email =  $this->input->post('email');
		$cont =  $this->input->post('cont');
		$sdate =  $this->input->post('sdate');
		$stime =  $this->input->post('stime');

<<<<<<< HEAD
			$ToEmail = 'mojojucadacape@gmail.com'; 
			$EmailSubject = '[UPB] SELLER: '.$fname.' Contact Form'; 
			$mailheader = "From: ".'sample@upb.com'."\r\n"; 
			$mailheader .= "Reply-To: ".'sample@upb.com'."\r\n"; 
			$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$MESSAGE_BODY = "Good Day! <br> Interested Seller's Information: "; 
			$MESSAGE_BODY .= "<br> Name: ".$fname; 
			$MESSAGE_BODY .= "<br> Email: ".$email;
			$MESSAGE_BODY .= "<br> Contact: ".$cont;
			$MESSAGE_BODY .= "<br> Comment: The seller is available at ".$stime." on ".$sdate.""; 
			$MESSAGE_BODY .= "<br><br> Thank you";
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

=======
>>>>>>> origin/master
		$clinsert=array(
			'FNAME' => $fname,
			'CONTACT'=>$cont,
			'MAIL'=>$email,
			'P_DATE'=>$sdate,
			'P_TIME'=>$stime,
			'STATUS'=>0
		);

		  $value = $this->client_model->insertData_S($clinsert);
			if ($value){
				echo '<script> alert("Successful!") </script>';
			} else {
				echo '<script> alert("Try again.") </script>';
			}
			
		  $this->load->view('client/seller.php');	
	}
	
}
