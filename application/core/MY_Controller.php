<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function buildTemplate($view, $data, $template = array()) {
        if (isset($template['header'])) {
            $this->template->set_partial('header', $template['header']);
        } else {
            $this->template->set_partial('header', 'common/header');
        }
        if (isset($template['sidebar'])) {
            $this->template->set_partial('sidebar', $template['sidebar']);
        } else {
            $this->template->set_partial('sidebar', 'common/left_content');
        }
        if (isset($template['footer'])) {
            $this->template->set_partial('footer', $template['footer']);
        } else {
            $this->template->set_partial('footer', 'common/footer');
        }
        $this->template->build($view, $data);
    }

    public function viewTemplates($view, $data, $template = array()) {
        if (isset($template['header'])) {
            $this->load->view($template['header']);
        } else {
            $this->load->view('common/header');
        }
        if (isset($template['left_content']) && empty($template['content'])) {
            $this->load->view($template['left_content']);
        } elseif (empty($template['content'])) {
            $this->load->view('common/left_content');
        }

        $this->load->view($view, $data);

        if (isset($template['footer'])) {
            $this->load->view($template['footer']);
        } else {
            $this->load->view('common/footer');
        }
    }

}
