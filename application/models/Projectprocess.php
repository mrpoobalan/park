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

}

?>