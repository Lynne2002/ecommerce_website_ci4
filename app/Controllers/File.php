<?php

namespace App\Controllers;

class File extends BaseController
{
    public function index()
    {
        return view('File/randomFile.docx');
    }
}