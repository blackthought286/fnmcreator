<?php

namespace App\Http\Controllers;

use App\LoanIntegrations\ApplicantInformation;

use Illuminate\Http\Request;

class FNMController extends Controller
{
    //
    public function create_file() {
        $app_information = new ApplicantInformation(1, 23, 'hello', 'world');

        $arr = [
            'just a test',
            'again'
        ];

        file_put_contents('fnm', $arr, 0);

    }
}
