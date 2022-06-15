<?php

class Project extends Controller {
    public function index()
    {
    	$data['judul'] = 'Project';
    	$this->view('templates/header', $data);
        $this->view('project/index');
        $this->view('templates/footer');
    }
    
}