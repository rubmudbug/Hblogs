<?php
class News_model extends CI_Model {

    public function get_news($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('article');
            return $query->result_array();
        }
        $query = $this->db->get_where('article', array('article_id' => $id));
        return $query->row_array();
    }
}
?>