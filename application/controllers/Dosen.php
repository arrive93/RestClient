<?php
Class Dosen extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://usr.atwebpages.com/index.php";
    }
    
    // menampilkan data dosen
    function index(){
        $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
        $this->load->view('dosen/list',$data);
    }
    
    // insert data dosen
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nip'       =>  $this->input->post('nip'),
                'nmds'      =>  $this->input->post('nmds'));
            $insert =  $this->curl->simple_post($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $this->load->view('dosen/create',$data);
        }
    }
    
    // edit data dosen
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nip'       =>  $this->input->post('nip'),
                'nmds'      =>  $this->input->post('nmds'));
            $update =  $this->curl->simple_put($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $params = array('nip'=>  $this->uri->segment(3));
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen',$params));
            $this->load->view('dosen/edit',$data);
        }
    }
    
    // delete data dosen
    function delete($nip){
        if(empty($nip)){
            redirect('dosen');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/dosen', array('nip'=>$nip), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('dosen');
        }
    }
}