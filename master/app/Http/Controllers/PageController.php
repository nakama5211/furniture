<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
    	return view('page.home');
    }
    public function getProduct(){
    	return view('page.product');
    }
    public function getDetail(){
    	return view('page.detail');
    }
    public function getLogin(){
    	return view('page.login');
    }
    public function getRegister(){
    	return view('page.register');
    }
    public function getCheckout(){
    	return view('page.checkout');
    }
    public function getContact(){
    	return view('page.contact');
    }
}
