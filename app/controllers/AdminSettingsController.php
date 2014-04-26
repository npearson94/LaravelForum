<?php

class AdminSettingsController extends BaseController {

    protected $layout = "admin.template";

    public function index()
    {
        $this->layout->title = "Settings";
        $this->layout->content = View::make('admin.dashboard.settings');
    }

}