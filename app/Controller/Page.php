<?php

use Frame\Controller;

class Page extends Controller
{
    public function home(){
        $menu = $this->model("Menu");
        $data['menu'] = $menu->getLinks();
        $this->view('home', $data);
    }

    public function apie(){
        $menu = $this->model("Menu");
        $data['menu'] = $menu->getLinks();
        $this->view('apie', $data);
    }

    public function kainos(){
        $menu = $this->model("Menu");
        $data['menu'] = $menu->getLinks();
        $this->view('kainos', $data);
    }

    public function kontaktai(){
        $menu = $this->model("Menu");
        $data['menu'] = $menu->getLinks();
        $this->view('kontaktai', $data);
    }
}

?>