<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConfigController extends Controller
{
    //
    public function runMethod($key=null, $value=null)
    {
    	if(is_null($key)) return config()->all();

        $$key = $this->config($key, $value);
        // $config = config();
    	return compact("{$key}",'config');
    }


    public function config($key, $value)
    {
        if (!is_null($value)) {
            $setConfig = [$key => $value];
            ${$key} = config($setConfig);
        } else {
            ${$key} = config($key);
        }
        return ${$key};
    }
}
