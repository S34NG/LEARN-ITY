<?php

class SignInController extends CI_Controller
{
    public function index()
    {
        // Render the login view
        $this->load->view('signIn/signIn');
    }
}
