<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



class IndexController extends BaseController 
{
	public function show() {

		echo "show homepage of controller class";

		$mail = new PHPMailer();

		$data = [
			'to' => 'raqeebgiri78@gmail.com',
			'subject' => 'Welcome to raqeeb store',
			'view'  => 'welcome',
			'name' => 'giripurushotam39@gmail.com',
			'body' => 'Testing Email Template'

		];
		if ($mail->send($data)) {
			echo "Mail sent Sucessfully";
		}else {
			echo "Mail sending failed . Mailer Error: {$mail->ErrorInfo}";	
		}
		}
}