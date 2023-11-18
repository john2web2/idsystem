<?php

class Login extends MY_Controller{

    public function index(){
        $this->load_login('index');
    }

    public function loginUser(){
        redirect(base_url('users'));
    }
}