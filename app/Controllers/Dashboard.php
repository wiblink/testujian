<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
       // echo "Welcome back, ".$session->get('user_name')." <a href='login/logout'>logout</a>";

        $data['teks'] = "Welcome back, ".$session->get('user_name')."";

        $data['logout'] = "<li class='nav-item'><a class='nav-link' href='login/logout'>LOGOUT</a></li>";

        echo view('dashboard', $data);
    }
}