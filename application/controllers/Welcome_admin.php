<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin/admin_reg', 'reg');
    }

    public function index() {
        $this->load->view('admin/login');
    }

    /*
     *  User registration Page
     *
     */

    public function registration() {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repassword', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('agree', 'Agree', 'required');

        if ($this->form_validation->run() == True) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'agree' => $this->input->post('agree'),
                'status' => 1
            );
            //Transfering data to Model
            $id = $this->reg->reg_form_insert($data);

            if ($id) {
                $data['page'] = 'admin/admin_view';
                $this->load->view('admin/partial/leftsidebar', $data);
            }
        } else {

            $this->load->view('admin/register');
        }
    }

    /*
     *  Check login page username and password credential
     *
     */

    public function login() {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_user_exists');

        if ($this->form_validation->run() == True) {
            redirect('admin/dashboard', 'refresh');
            /* $data = array(
              'email' => $this->input->post('email'),
              'password' => $this->input->post('password'),
              );

              $result = $this->reg->sel_user($data);

              if ($result) {
              $resemail = $result->email;
              $respass = $result->password;
              if ($resemail == $data['email'] && $respass == $data['password']) {
              $sess_user = array(
              'id' => $result->id,
              'username' => $result->username
              );
              $this->session->set_userdata('user_detail', $sess_user);
              redirect('admin/dashboard', 'refresh');
              } else {

              $this->load->view('admin/login');
              }
              } else {

              $this->form_validation->set_message('email', 'The email doesnot match');
              //redirect('welcome_admin', 'refresh');
              $this->load->view('admin/login');
              } */
        } else {

            $this->load->view('admin/login');
        }
    }

    /*
     * Check Whether the username and password is existing or not
     *
     */

    function user_exists($data) {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $result = $this->reg->sel_user($data);
        if ($result) {
            $resemail = $result->email;
            $respass = $result->password;
            if ($resemail == $data['email'] && $respass == $data['password']) {
                $sess_user = array(
                    'id' => $result->id,
                    'username' => $result->username
                );
                $this->session->set_userdata('user_detail', $sess_user);
                return true;
            }
        } else {
            $this->form_validation->set_message('user_exists', 'Invalid username or password');
            return false;
        }
    }

    public function edit_users() {
        $editid = $this->uri->segment(3);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('postalcode', 'Postalcode', 'required');

        if ($editid) {

            $result['value'] = $this->reg->get_edit_users($editid);
            if (empty($this->input->post('submit'))) {
                $result['page'] = 'admin/profile/edit_profile';
                $this->load->view('admin/partial/leftsidebar', $result);
            }
            if ($this->form_validation->run() == True) {
                $data = array(
                    'id' => $editid,
                    'username' => $this->input->post('username'),
                    'mobile' => $this->input->post('mobile'),
                    'gender' => $this->input->post('gender'),
                    'age' => $this->input->post('age'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'postalcode' => $this->input->post('postalcode')
                );
                $this->reg->update_profile($data);
                redirect('admin/dashboard/manageusers', 'refresh');
            }
        } else {
            $data['page'] = 'admin/profile/edit_profile';
            $this->load->view('admin/partial/leftsidebar', $data);
        }
    }

}
