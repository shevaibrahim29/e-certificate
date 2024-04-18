<?php

defined('BASEPATH') or exit('No direct script access allowed');
class M_event extends CI_model
{
    function getDataEvent()
    {
        $query = $this->db->get('events');
        return $query->result();
    }
    function insertDataEvent($data)
    {
        $this->db->insert('event', $data);
    }
    
    function getDataEventDetail($id)
    {
        $this->db->where('event_id', $id);
        $query = $this->db->get('event');
        return $query->row();
    }
    
    function updateDataEvent ($id, $data)
    {
        $this->db->where('event_id', $id);
        $this->db->update('events', $data);
    }
    
    function hapusDataEvent($id)
    {
        $this->db->where('event_id', $id);
        $this->db->delete('events', $data);
        
    }
}