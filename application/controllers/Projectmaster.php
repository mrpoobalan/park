<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projectmaster extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     *
     * $this->buildTemplate('airsystem_process_view', $data, array('sidebar' => 'common/left_content'));
     * $this->viewTemplates('airsystem_process_view', $data, array('left_content' => 'common/main_left_content'));
     */
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('projectprocess');
    }

    public function index() {
        $data = array();
        $this->form_validation->set_rules('engineername', 'Engineer name', 'required');
        $this->form_validation->set_rules('project', 'Project', 'required');
        $this->form_validation->set_rules('system', 'System', 'required');
        $this->form_validation->set_rules('startdate', 'Date', 'required|callback_startval');
        $this->form_validation->set_rules('refno', 'Ref No', 'required');
        $this->form_validation->set_rules('totpage', 'Total no of page', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');


        if ($this->form_validation->run() == True) {
            $data = array(
                'engineername' => $this->input->post('engineername'),
                'project' => $this->input->post('project'),
                'system' => $this->input->post('system'),
                'date' => $this->input->post('startdate'),
                'refno' => $this->input->post('refno'),
                'totnopages' => $this->input->post('totpage'),
                'client' => $this->input->post('client'),
            );
            $last_insert_id = $this->projectprocess->insert_project($data);
            if ($last_insert_id) {
                redirect('projectmaster');
            }
        } else {

            $result['value'] = $this->projectprocess->get_project_process();
            $this->viewTemplates('project_process_view', $result, array('left_content' => 'common/main_left_content'));
        }

        // $result['value'] = $this->projectprocess->get_project_process();
        // $this->viewTemplates('project_process_view', $result, array('left_content' => 'common/main_left_content'));
    }

    public function startval($startdate) {
        $startdate = $this->input->post('startdate');
        //Check for valid date in given format
        if (date('Y-m-d', strtotime($startdate)) == $startdate) {
            return true;
        } else {
            $this->form_validation->set_message('startval', 'Please type a correct date format');
            return false;
        }
    }

    /* public function insert_project_master() {
      $this->form_validation->set_rules('engineername', 'Engineer name', 'required');
      $this->form_validation->set_rules('project', 'Project', 'required');
      $this->form_validation->set_rules('system', 'System', 'required');
      $this->form_validation->set_rules('startdate', 'Date', 'required|regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
      $this->form_validation->set_rules('refno', 'Ref No', 'required');
      $this->form_validation->set_rules('totpage', 'Ref No', 'required');
      $this->form_validation->set_rules('client', 'Ref No', 'required');

      if ($this->form_validation->run() == True) {
      $data = array(
      'engineername' => $this->input->post('engineername'),
      'project' => $this->input->post('project'),
      'system' => $this->input->post('system'),
      'date' => $this->input->post('startdate'),
      'refno' => $this->input->post('refno'),
      'totnopages' => $this->input->post('totpage'),
      'client' => $this->input->post('client'),
      );
      $last_insert_id = $this->projectprocess->insert_project($data);
      if ($last_insert_id) {
      redirect('projectmaster');
      }
      } else {

      $result['value'] = $this->projectprocess->get_project_process();
      $this->viewTemplates('project_process_view', $result, array('left_content' => 'common/main_left_content'));
      }
      }
     */
}
