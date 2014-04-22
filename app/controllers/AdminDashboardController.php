<?php

class AdminDashboardController extends BaseController {

    protected $layout = "admin.template";

    public function index()
    {
        $this->layout->title = "Dashboard";
        $this->layout->content = View::make('admin.dashboard.index');
    }

}