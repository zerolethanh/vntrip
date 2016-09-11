<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TripController extends Controller
{
    //

    static $template = 'trip.templates.green.';

    public function view($view = null)
    {
        if($view == null) $view = 'index';
        $view = explode('.',$view)[0];
        $view = static::$template . $view;
        if (view()->exists($view)) return view($view);

        return $view . ' no exists';
    }

}
