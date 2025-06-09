<?php

namespace  BugLock\rolePermissionModule\Http\Controllers\settings\setup;

use Illuminate\Support\Facades\Request;

class AuthorizedController
{
    // ***** Admin login page *****
    public function login(Request $request) {
        return view('buglocksviews::settings.setup.login');
    }
}
