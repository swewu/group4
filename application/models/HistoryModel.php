<?php

class HistoryModel extends CI_Model
{
    public function editReGrade($historyid)
    {
        $this->db->where('historyid', $historyid);
        $query = $this->db->get('historygrade');
        return $query-result();
    }
}
