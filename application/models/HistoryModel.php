<?php

class HistoryModel extends CI_Model
{
    public function editReGrade($historyid)
    {
        $this->db->where('historyid', $historyid);
        $query = $this->db->get('historygrade');
        return $query-result();
    }

    public function update($data, $historyid)
    {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->where($historyid);
        $this->db->update('historygrade');
        $this->db->trans_complete();
        return $this->db->tran_status();
    }
}
