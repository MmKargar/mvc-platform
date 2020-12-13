<?php


class home extends Controller
{
    public function index($name = '' ){       
        $name = 'Hello From MmKargar';
        $this->view('home/index' ,  ['name' => $name] );
    }

    public function test(){
        echo 'test method';
    }
}