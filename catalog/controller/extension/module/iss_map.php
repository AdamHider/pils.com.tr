<?php

class ControllerExtensionModuleIssMap extends Controller {

    private $error = array();

    public function index() {

        $this->load->language('extension/module/iss_map');
        // Login override for admin users
        $data=[];
        return $this->load->view('extension/module/iss_map', $data);
    }

}
