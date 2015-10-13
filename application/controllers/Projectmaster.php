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
            //$this->load->view('project_process_view', $result);
            $this->viewTemplates('project_process_view', $result, array('left_content' => 'common/main_left_content', 'content' => 'No'));
        }
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

    public function airSystem() {
        $result['project'] = $this->projectprocess->get_project_process();
        $result['process'] = $this->projectprocess->get_property();


        //$i = count($_POST) - 1;
        $count = count($_POST) - 1;
        $this->form_validation->set_rules('check' . $count . '[checkbox]', 'Checkbox', 'required');

        if ($_POST) {
            if ($this->form_validation->run() == FALSE) {
                $this->viewTemplates('airsystem_process_view', $result);
                return false;
            }

            for ($i = 1; $i <= $count; $i++) {

                $property_name = ($_POST["check$i"]['propertyname']);
                $property_check = ($_POST["check$i"]['checkbox']);
                $property_comments = ($_POST["check$i"]['comments']);
                $data = array(
                    'pid' => 1,
                    'propertyid' => $i,
                    'propertyname' => $property_name,
                    'propertycheck' => $property_check,
                    'comments' => $property_comments,
                );
                $last_insert_id = $this->projectprocess->insert_process($data);
            }//exit;
            $project_comments = $this->input->post('projproc_comments');

            $data_comments = array(
                'projectid' => 1,
                'comments' => $project_comments
            );

            $last_insert_id = $this->projectprocess->insert_process_comment($data_comments);
        }
        $result['projectcomments'] = $this->projectprocess->get_process_comments();
        $result['airsystem'] = $this->projectprocess->get_airsystem();
        $this->viewTemplates('airsystem_process_view', $result);
    }

    public function backflush() {

        $result['backflush'] = $this->projectprocess->get_back_flush();
        $result['project'] = $this->projectprocess->get_project_process();
        $this->viewTemplates('backflush_view', $result);
    }

    public function createBlackflush() {
        $this->form_validation->set_rules('reference', 'Reference', 'required');
        $this->form_validation->set_rules('temperature', 'Temperature', 'required|is_natural|numeric');
        if ($this->form_validation->run() == FALSE) {
            $result = array();
            $this->viewTemplates('backflush_create_view', $result);
        } else {
            $data = array(
                'reference' => $this->input->post('reference'),
                'temperature' => $this->input->post('temperature'),
                'comments' => $this->input->post('comments'),
            );
            $last_insert_id = $this->projectprocess->insert_backflush($data);
            $result['project'] = $this->projectprocess->get_project_process();
            $result['backflush'] = $this->projectprocess->get_back_flush();
            $this->viewTemplates('backflush_view', $result);
        }
    }

    public function directvol() {

        $result['direct_volume'] = $this->projectprocess->get_direct_volume();
        $result['project'] = $this->projectprocess->get_project_process();
        $this->viewTemplates('direct_volume_view', $result);
    }

    public function create_direct_volume() {
        $this->form_validation->set_rules('reference', 'Reference', 'required');
        $this->form_validation->set_rules('grille', 'Grille Size', 'required|is_natural|numeric');
        $this->form_validation->set_rules('design', 'Design Volume', 'required|is_natural|numeric');
        $this->form_validation->set_rules('finalvol', 'Final Volume', 'required|is_natural|numeric');
        $this->form_validation->set_rules('correctionfact', 'Correction Factor', 'required|is_natural|numeric');
        $this->form_validation->set_rules('settings', 'Setting', 'required');
        if ($this->form_validation->run() == FALSE) {
            $result = array();
            $this->viewTemplates('directvol_create_view', $result);
        } else {
            $design = $this->input->post('design');
            $finalvolume = $this->input->post('finalvol');
            $correctionfactor = $this->input->post('correctionfact');
            $actualvolume = $finalvolume * $correctionfactor;
            $percentage = ($actualvolume / $design);
            $data = array(
                'reference' => $this->input->post('reference'),
                'grillesize' => $this->input->post('grille'),
                'designvolume' => $design,
                'finalvolume' => $finalvolume,
                'correctionfactor' => $correctionfactor,
                'actualvolume' => $actualvolume,
                'percentage' => $percentage,
                'settings' => $this->input->post('settings'),
                'comments' => $this->input->post('comments'),
            );
            $last_insert_id = $this->projectprocess->insert_directvolume($data);

            $result['project'] = $this->projectprocess->get_project_process();
            $result['direct_volume'] = $this->projectprocess->get_direct_volume();
            $this->viewTemplates('direct_volume_view', $result);
        }
    }

}
