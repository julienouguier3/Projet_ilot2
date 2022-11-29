<?php

namespace App\Http\Controllers\Backoffice;

class DashboardController extends BackofficeController
{

    public function dashboard()
    {
        return view ("back/dashboard");
    }

}
