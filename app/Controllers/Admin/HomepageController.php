<?php 

require_once('app/Controllers/Admin/BackendController.php');

class HomepageController extends BackendController
{
    public function index()
    {
        return $this->view('thongke/index.php');
    }
}