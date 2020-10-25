<?php namespace App\Controllers;

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
		echo view('register');
		echo view('footer');
    }

	public function postregister()
	{
        $Reg = new \App\Models\Reg();
        $incoming = $this->request->getPost();
        $passport = $this->request->getFile('passport')->store('students/');
        $incoming['passport'] = $passport;

        if($Reg->insert($incoming)){
            $data = [
                'title'=> '🎉 Congratulation 🎊',
                'msg'=> 'Your Registration was successfull. Hold tight while we get back  to you',
                'url'=>'<a href="'.base_url().'">Go to Homepage</a>',
            ];
            echo view('oheader');
		    echo view('message',$data);
		    echo view('footer');
        }else{
            $data = [
                'title'=> '😢 Sorry 😭',
                'msg'=> 'Your Registration was not successfull. Kindly contact the admin using the details on the lower part  of the page',
                'url'=>'<a href="register">Restart registration</a>',
            ];
            echo view('oheader');
		    echo view('message',$data);
		    echo view('footer');
        }
		
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
