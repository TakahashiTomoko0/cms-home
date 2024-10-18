<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class TestController extends Controller
{
  public function func() {
    return view('sample');
  }
  public function page1() {
    return view('contact.page1');
  }
  public function page2() {
    return view('contact.page2');
  }
}