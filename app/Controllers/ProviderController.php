<?php 
namespace App\Controllers;

class ProviderController extends BaseController{
    public function index()
    {
        return view('Provider/ProviderDashboard');
    }
    public function create()
    {
        return view('Provider/CreateProvider');
    }
    public function edit()
    {
        return view('Provider/EditProvider');
    }
    public function list()
    {
        return view('Provider/ProviderList');
    }
}