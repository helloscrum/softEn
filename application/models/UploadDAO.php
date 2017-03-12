<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
  class UploadDAO extends CI_Model {

    public function __construct() {
      parent::__construct();
    }
    function insert_image($data){
      $this->db->insert('files', $data);
    }
}
?>
