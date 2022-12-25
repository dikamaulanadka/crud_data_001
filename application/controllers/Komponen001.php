<?php

// Controller

defined('BASEPATH') or exit('No direct script access allowed');
class Komponen001 extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('mkomponen001', 'komponen001');
	}

    //MENAMPILKAN ISI DATA KE HALAMAN V_DATA
    public function index()
    {
        $data['vdata'] = $this->MKomponen001->SemuaData();
        $this->load->view('v_data001',$data);
    }
    //MENAMPILKAN HALAMAN TAMBAH DATA (V_tambah001)
    public function tambah()
    {
        $this->load->view('v_tambah001');
    }

    //FUNGSI UNTUK PROSES FORM TAMBAH DATA
    public function inputdata()
    {
        $this->MKomponen001->m_inputdata();
        redirect('Komponen001/index');
        
    }
    
	public function delete($id = null){
        $this->MKomponen001->del($id);
        redirect('komponen001');
    } 

	public function c_edit($id = null)
	{
		$query = $this->komponen001->get($id);
		$data = array(
				'edit' => $query->row()
			);
		$this->load->view('v_edit001', $data);

        }

        public function update() {
            $id_komponen	= $this->request->getPost('id_komponen');
            $merek_001	    = $this->request->getPost('merek');
            $kapasitas_001	= $this->request->getPost('kapasitas');
            $harga_001		= $this->request->getPost('harga');
            $jenis_001		= $this->request->getPost('jenis');
            
            $data = [
                'id_komponen'	=> $id_komponen,
                'merek_001'		=> $merek_001,
                'kapasitas_001'	=> $kapasitas_001,
                'harga_001'		=> $harga_001,
                'jenis_001'		=> $jenis_001
            ];
    
             $this->mkomponen001->update($id_komponen, $data);
            
        }
        
}