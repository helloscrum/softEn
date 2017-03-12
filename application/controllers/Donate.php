<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donate extends CI_Controller{
  function  __construct() {
		parent::__construct();
	}

  function donor(){
    $this->load->view('page_donor');
  }
  function donor_create(){
    $config['upload_path'] = 'images/';
    $config['allowed_types'] = 'gif|jpg|png';

    $this->load->library('upload', $config);
    $upload_error = array();

    for($i=0; $i<count($_FILES['fileUpload']['name']); $i++)
        {
            $_FILES['userfile']['name']= $_FILES['fileUpload']['name'][$i];
            $_FILES['userfile']['type']= $_FILES['fileUpload']['type'][$i];
            $_FILES['userfile']['tmp_name']= $_FILES['fileUpload']['tmp_name'][$i];
            $_FILES['userfile']['error']= $_FILES['fileUpload']['error'][$i];
            $_FILES['userfile']['size']= $_FILES['fileUpload']['size'][$i];

            if (!$this->upload->do_upload())
            {
                // fail
                $upload_error = array('error' => $this->upload->display_errors());
                $this->load->view('page_donor', $upload_error);
                break;
            }

            $file_name = $_FILES['fileUpload']['name'][$i];
  					$created = date("Y-m-d H:i:s");
  					$modified = date("Y-m-d H:i:s");
            $status = '1';

            $data = array(
                  'file_name' => $file_name,
                  'created' => $created,
                  'modified' => $modified,
                  'status' => $status
            );
            $insert = $this->UploadDAO->insert_image($data);


        }
        // success
        if ($upload_error == NULL)
        {
            $data['success_msg'] = '<div class="alert alert-success text-center">อัพโหลดเสร็จสมบูรณ์</div>';
            $this->load->view('page_donor', $data);
        }

        redirect('index.php/donate/donor');
  }
}
?>
