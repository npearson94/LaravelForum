<?php

class AdminDashboardController extends BaseController {

    protected $layout = "admin.template";

    public function index()
    {
        $this->layout->title = "Dashboard";
        $this->layout->content = View::make('admin.dashboard.index');

        // Create an array of possible greetings
        $arrGreeting = ['Hey!', 'Greetings!', 'Howdy!', 'Good Day!', 'Whats New?', 'Good Day!'];
        $this->layout->content->dashboardGreeting = $arrGreeting[array_rand($arrGreeting)];
    }

}