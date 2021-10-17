<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

		function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }

        $this->load->model('Calendars_model');
        $this->load->library('form_validation');
        $this->user = $this->ion_auth->user()->row();
    }


	/*Home page Calendar view  */
	Public function index()
	{
        $chek = $this->ion_auth->is_admin();
        if (!$chek) {
            $hasil = 0;
        } else {
            $hasil = 1;
        }
		$user = $this->user; 
        $data = array(
			'get_karyawan'=> $this->Calendars_model->get_karyawan(),
            'user' => $user,
            'users' => $this->ion_auth->user()->row(),
            'result' => $hasil,
        );
        $this->template->load('template/template', 'calendar', $data);
        $this->load->view('template/datatables');
	}

	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->Calendars_model->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	Public function addEvent()
	{
		$result=$this->Calendars_model->addEvent();
		echo $result;
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->Calendars_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->Calendars_model->deleteEvent();
		echo $result;
	}
	Public function dragUpdateEvent()
	{	

		$result=$this->Calendars_model->dragUpdateEvent();
		echo $result;
	}

}
