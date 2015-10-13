<?PHP

class Projectprocess extends CI_Model {

    public function __construct() {
// Call the CI_Model constructor
        parent::__construct();
    }

    public function get_project_process() {
        $sql = "SELECT * FROM projectprocess ";
        $query = $this->db->query($sql);
        return $result = $query->row_array();
    }

    public function insert_project($data) {
        $this->db->insert('projectprocess', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function get_property() {
        $sql = "SELECT * FROM property ";
        $query = $this->db->query($sql);
        return $result = $query->result_array();
    }

    public function get_airsystem() {
        $sql = "SELECT * FROM airsystem";
        $query = $this->db->query($sql);
        return $result = $query->result_array();
    }

    public function insert_process($data) {
        $this->db->insert('airsystem', $data);
        $insert_id = $this->db->insert_id();
        $this->db->last_query();

        return $insert_id;
    }

    public function insert_process_comment($data) {
        $this->db->insert('processcomments', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function get_process_comments() {
        $sql = "SELECT * FROM processcomments where id=1";
        $query = $this->db->query($sql);
        return $result = $query->row();
    }

}

?>