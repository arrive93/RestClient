<?php



Class Krs extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://usr.atwebpages.com/index.php";
    }
    
    // menampilkan data mahasiswa
    function index(){
		
        $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        $this->load->view('krs/list',$data);
    }
    
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nmmk'		=>  $this->input->post('nmmk'),
                'nmds'		=>  $this->input->post('nmds'));
            $insert =  $this->curl->simple_post($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal / Data Sudah Ada');
            }
			
            redirect('krs/lihat');
        }else{
			
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
			
			 $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $this->load->view('krs/create',$data);
        }
    }
    
    // edit data mahasiswa
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nmmk'		=>  $this->input->post('nmmk'),
                'nmds'		=>  $this->input->post('nmds'));
            $update =  $this->curl->simple_put($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','KRS Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','KRS Gagal');
            }
            redirect('krs');
        }else{
			
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
			
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $this->load->view('krs/edit',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($nim){
        if(empty($nim)){
            redirect('krs/lihat');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/krs', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('krs/lihat');
        }
    }
	
	function lihat(){
		if(isset($_POST['submit'])){
			
				$delete =  $this->curl->simple_delete($this->API.'/krs', array('nim'=> $this->input->post('nim')), array(CURLOPT_BUFFERSIZE => 10)); 
				if($delete)
				{
					$this->session->set_flashdata('hasil','KRS Berhasil');
				}else
				{
				   $this->session->set_flashdata('hasil','KRS Gagal');
				}
				redirect('krs');
			}
					
		
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
		
		$params = array('nim'=>  $this->uri->segment(3));
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
        $this->load->view('krs/lihat',$data);
    }
	
}