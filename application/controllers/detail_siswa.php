<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_siswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('data_sis');
    }

    public function index()

    {
		$data['mahasiswa'] = $this->data_sis->ambildata()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('detail_data',$data);	
		$this->load->view('templates_admin/footer');
    }

    public function hapus($id){
        $where = array ('id'=> $id);
        $this->data_sis->hapus_data($where,'tb_siswa');
        redirect('detail_siswa/index');
    }
    public function tambah(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('tambah_data');   
        $this->load->view('templates_admin/footer');
    }


        public function fungsitambah(){        
        
            $nama = $this->input->post('nama');
            $nisn = $this ->input ->post ('nisn');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $agama = $this->input->post('agama');
            $no_telpon = $this->input->post('no_telpon');
            $asal_sekolah = $this->input->post('asal_sekolah');
            $alamat = $this->input->post('alamat');

           

        $data = array(
            
            'nama'=>$nama,
            'nisn'=>$nisn,
            'jenis_kelamin'=>$jenis_kelamin,
            'tanggal_lahir'=>$tanggal_lahir,
            'agama'=>$agama,
            'no_telpon'=>$no_telpon,
            'asal_sekolah'=>$asal_sekolah,
            'alamat'=>$alamat,

        );
        $this->data_sis->input($data,'tb_siswa');
        redirect('detail_siswa/index');
    }

    public function edit($id){
        $where = array('id'=>$id);
        $data['mahasiswa']=$this->data_sis->edit_data($where,'tb_siswa')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Edit_admin',$data);
        $this->load->view('templates_admin/footer');
    }
        public function update(){
            $id =$this ->input->post('id');
            $nama = $this->input->post('nama');
            $nisn = $this ->input ->post ('nisn');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $agama = $this->input->post('agama');
            $no_telpon = $this->input->post('no_telpon');
            $asal_sekolah = $this->input->post('asal_sekolah');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');
            


        $data = array(
            'nama'=>$nama,
            'nisn'=>$nisn,
            'jenis_kelamin'=>$jenis_kelamin,
            'tanggal_lahir'=>$tanggal_lahir,
            'agama'=>$agama,
            'no_telpon'=>$no_telpon,
            'asal_sekolah'=>$asal_sekolah,
            'alamat'=>$alamat,
            'status'=>$status,


        );
        $where = array(
            'id'=>$id
        );
        $this->data_sis->update_data($where,$data,'tb_siswa');
        redirect('detail_siswa/index');
    }
    public function pdf(){

        $this->load->library('dompdf_gen');
        $data['mahasiswa']=$this->data_sis->ambildata('tb_siswa')->result();
        $this->dompdf_gen->generate('tampilan_pdf', $data, 'Data Penerimaan Siswa Baru', 'A4', 'landscape');
        }

}