<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acategory_lib extends Main_Model {

    public function __construct($deleted=NULL)
    {
        $this->deleted = $deleted;
        $this->tableName = 'account_category';
    }

    function combo()
    {
        $this->db->select('id, code, name');
        $this->db->where('deleted', NULL);
        $this->db->order_by('name', 'asc');
        $val = $this->db->get($this->tableName)->result();
        $data['options'][0] = 'Top';
        foreach($val as $row){ $data['options'][$row->id] = ucfirst($row->name); }
        return $data;
    }

    function combo_all()
    {
        $this->db->select('id, code, name');
        $this->db->where('deleted', NULL);
        $this->db->order_by('name', 'asc');
        $data['options'][''] = '-- All --';
        $val = $this->db->get($this->tableName)->result();
        foreach($val as $row){ $data['options'][$row->id] = ucfirst($row->name); }
        return $data;
    }
    
    function combo_dppa($id)
    {
        $this->db->select('id, code, name');
        $this->db->where('deleted', NULL);
        $this->db->where('dppa_id', $id);
        $this->db->order_by('name', 'asc');
        $val = $this->db->get($this->tableName)->result();
        if ($val){ foreach($val as $row){ $data['options'][$row->id] = ucfirst($row->name); } }
        else { $data['options']['0'] = 'Top'; }
        return $data;
    }

    function combo_update($id)
    {
        $this->db->select('id, code, name');
        $this->db->where('deleted', NULL);
        $this->db->order_by('name', 'asc');
        $this->db->where_not_in('id', $id);
        $val = $this->db->get($this->tableName)->result();
        $data['options'][0] = 'Top';
        foreach($val as $row){ $data['options'][$row->id] = ucfirst($row->name); }
        return $data;
    }

    function get_name($id=null)
    {
        if ($id)
        {
            $this->db->select('id, code, name');
            $this->db->where('id', $id);
            $val = $this->db->get($this->tableName)->row();
            if ($val){ return $val->name; }
        }
        else if($id == 0){ return 'Top'; }
        else { return ''; }
    }

    function get_type($id=null)
    {
        if ($id)
        {
            $this->db->select('id, code, name, type');
            $this->db->where('id', $id);
            $val = $this->db->get($this->tableName)->row();
            if ($val){ return $val->type; }
        }
        else { return ''; }
    }

    function type($val)
    {
	switch ($val) {
            case "1":return 'BIAYA LANGSUNG'; break;
            case "2":return 'BIAYA TIDAK LANGSUNG'; break;
            case "green":return 'PEMBIAYAAN DAERAH';
        }
    }

}

/* End of file Property.php */
