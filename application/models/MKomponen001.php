<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class MKomponen001 extends CI_Model
{

    public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('komponen_001');
		if($id != null) {
			$this->db->where('id_komponen', $id);
		}
		$query = $this->db->get();
		return $query;
	}

    public function SemuaData()
    {
        return $this->db->get('komponen_001')->result_array();
    }

    public function m_inputdata()
    {
        $inputdata= [
            "merek_001" => $this->input->post('merek') ,
            "kapasitas_001" => $this->input->post('kapasitas') ,
            "harga_001" => $this->input->post('harga') ,
            "jenis_001" => $this->input->post('jenis')
        ];
        $this->db->insert('komponen_001',$inputdata);
    }

    
	public function del($id)
	{
		$this->db->where('id_komponen', $id);
		$this->db->delete('komponen_001');
	}
    
    public function update($id_komponen, $data) {
        
        
      $this->db->where(['id_komponen' => $id_komponen]);
      $this->db->update('komponen_001',$data);
                   
	}
   
    
}