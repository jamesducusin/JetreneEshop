<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminProfile extends BaseController
{
    public function ProfileDetails()
    {
        return view('AdminDash/ProfileView');
    }
    public function ProfileSettings()
    {
        return view('AdminDash/ProfileSettingsView');
    }
}

