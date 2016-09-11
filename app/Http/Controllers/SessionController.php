<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    public function runMethod($method = null, $key = null,$value = null)
    {
        if(is_null($method)) return session()->all();

        //run this class methods
        if(method_exists($this, $method)) return $this->{$method}($key,$value);
        
        //try session()
        try{
            // if(func_num_args() === 2) {
            //     $method = 'put';
            //     $key = func_get_args()[0];
            //     $value = func_get_args()[1];
            // }
            ${$method} = session()->{$method}($key,$value);
            $session_all = session()->all();
            return compact("{$method}",'session_all');
        }catch(\Exception $e){
            // return session()->all();   
            dd($e);
        }
    }
    public function show_methods(){
        return get_class(session());
    }
    public function get_all_session_class(){
        $classes = get_declared_classes();
        return array_filter($classes,function($name){
            return stripos($name,'session');
        });
    }
}
