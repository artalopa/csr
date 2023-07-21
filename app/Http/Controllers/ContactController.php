<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class ContactController extends Controller
{
    protected $info;

    public function __construct(Information $info)
    {
        $this->info = $info;
    }

    public function index()
    {
        $contact = $this->info->getData();
        return view('contacts.contact', compact('contact'));
    }
}
