<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XssController extends Controller
{
    public function showForm()
    {
        return view('xss-form');
    }

    public function execute(Request $request)
    {
       $xssInput = $request->input('script');

       // Check if the script is valid
       if (strpos($xssInput, '<script>') === false || strpos($xssInput, '</script>') === false) {

        // Script is invalid
        return redirect()->route('invalid-script');
       }
       return view('execute', ['xssInput' => $xssInput]);

    
    
}
}