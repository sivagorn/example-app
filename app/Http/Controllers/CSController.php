<?php
namespace App\Http\Controllers;
use Inertia\Inertia;

class CSController extends Controller
{
public function index(){
    //return “Index”;
    return Inertia::render('Staff/index');

    'message' => 'Show My Message'
    }
 public function show(){
    return 'Show';
    }
}
