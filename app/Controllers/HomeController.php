<?php
class HomeController extends Controller {
    public function index() {
        $this->view('home/index', ['title' => 'Ana Sayfa']);
    }
}