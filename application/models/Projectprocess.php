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
        $sql = "SELECT * FROM processcomments where projectid=1";
        $query = $this->db->query($sql);
        return $result = $query->row_array();
    }

    public function insert_backflush($data) {
        $this->db->insert('backflush', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function get_back_flush() {
        $sql = "SELECT * FROM backflush";
        $query = $this->db->query($sql);
        return $result = $query->result_array();
    }

    public function insert_directvolume($data) {
        $this->db->insert('directvolume', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function get_direct_volume() {
        $sql = "SELECT * FROM directvolume";
        $query = $this->db->query($sql);
        return $result = $query->result_array();
    }

    public function get_editback_flush($id) {
        $sql = "SELECT * FROM backflush where id=" . $id;
        $query = $this->db->query($sql);
        return $result = $query->row_array();
    }

    public function update_backflush($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('backflush', $data);
    }

}

?>