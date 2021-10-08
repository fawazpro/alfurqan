<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('home');
		echo view('footer');
	}

	public function register()
	{
		echo view('oheader');
		echo view('regbasic');
		echo view('footer');
	}

	public function postregbasic()
	{
		$session = session();
		$incoming = $this->request->getPost();
		$session->set($incoming);

		echo view('oheader');
		echo view('regpayment');
		echo view('footer');
	}

	public function postregpayment()
	{
		$session = session();
		$incoming = $this->request->getPost();
		$data = [
			'fname' => $session->fname,
			'lname' => $session->lname,
			'email' => $session->email
		];
		if ($incoming['access'] == 'alfurqan73674') {
			echo view('oheader');
			echo view('register', $data);
			echo view('footer');
		} else {
			echo view('oheader');
			echo view('message', ['title' => '😢 Sorry Incorrect Code 😭', 'msg' => 'The access code you entered is incorrect', 'url' => '<a href="https://alfurqan.com.ng/register">Go to Homepage</a>']);
			echo view('footer');
		}
	}

	public function postregister()
	{
		$Reg = new \App\Models\Reg();
		$incoming = $this->request->getPost();
		$passport = $this->request->getFile('passport')->store('students/');
		$incoming['passport'] = $passport;

		if ($Reg->insert($incoming)) {
			$data = [
				'title' => '🎉 Congratulation 🎊',
				'msg' => 'Your Registration was successfull. Hold tight while we get back  to you',
				'url' => '<a href="' . base_url() . '">Go to Homepage</a>',
			];
			echo view('oheader');
			echo view('message', $data);
			echo view('footer');
		} else {
			$data = [
				'title' => '😢 Sorry 😭',
				'msg' => 'Your Registration was not successfull. Kindly contact the admin using the details on the lower part  of the page',
				'url' => '<a href="register">Restart registration</a>',
			];
			echo view('oheader');
			echo view('message', $data);
			echo view('footer');
		}
	}


	public function preprocess()
	{
			$reg = new \App\Models\Reg();
			$db = $reg->findAll();

			foreach ($db as $key => $one) {
				var_dump(WRITEPATH . 'uploads/' . $one['passport']);
				$image = \Config\Services::image()
					->withFile(WRITEPATH . 'uploads/' . $one['passport'])
					->withResource()
					->save(WRITEPATH.'uploads/'.$one['passport'], 10);
			}
			echo 'done';
			
	}


	public function program()
	{
		echo view('oheader');
		echo view('program');
		echo view('footer');
	}

	public function calendar()
	{
		echo view('oheader');
		echo view('calendar');
		echo view('footer');
	}

	public function faq()
	{
		echo view('oheader');
		echo view('faq');
		echo view('footer');
	}

	public function contact()
	{
		echo view('oheader');
		echo view('contact');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
