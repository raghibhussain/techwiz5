<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
  public function index()
  {
    return view(
      'Frontend.Home',
      [
        'title' => 'Home'
      ]
    );
  }

  public function About()
  {
    return view('Frontend.about', [
      'title' => 'About Us'
    ]);
  }

  public function Contact()
  {
    return view("Frontend.contact", [
      'title' => 'Contact'
    ]);
  }

  public function Faq()
  {
    return view('Frontend.Faq', [
      'title' => 'Privacy Policy'
    ]);
  }
}
