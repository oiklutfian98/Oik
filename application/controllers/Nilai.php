<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
/**
* Required untuk akses data customer di server
*/
class Nilai extends CI_Controller{
var $API = "";
	function __construct(){
	parent::__construct();
	$this->API="https://fahrurrozi.000webhostapp.com/server/index.php/api/nilais/";
}
// menampilkan daftar customer
function index(){
	$data['nilais'] = $this->__execute($this->API,'get', '');
	$this->template->load('template_master','nilai/list',$data);
}
//load form tambah dan memproses simpan data baru
function add(){
	if (isset($_POST['submit'])){
	$params = array(
		'Kode'=> $this->input->post('Kode'),
		'Nim'=> $this->input->post('Nim'),
		'Matakuliah'=> $this->input->post('Matakuliah'),
		'Kpkl'=> $this->input->post('Kpkl'),
		'Khs'=> $this->input->post('Khs'),
		'Dosenp'=> $this->input->post('Dosenp'));
	$this->__execute($this->API, 'post',$params);
	redirect('nilai');
	}else{
		$this->template->load('template_master', 'nilai/add');
	}
}
//load form edit dan memproses simpan update data
function edit(){
	if (isset($_POST['submit'])){
		$params = array(
			'id'=> $this->input->post('id'),
			'Kode'=> $this->input->post('Kode'),
			'Nim'=> $this->input->post('Nim'),
			'Matakuliah'=> $this->input->post('Matakuliah'),
			'Kpkl'=> $this->input->post('Kpkl'),
			'Khs'=> $this->input->post('Khs'),
			'Dosenp'=> $this->input->post('Dosenp'));	
		$result = $this->__execute($this->API.'format/json/','put',$params);
		redirect('nilai');
	}else{
	$id = $this->uri->segment(3);
	$data['nilai'] = $this->__execute($this->API.'id/'.$id,'get',array('id' => $id));
	$this->template->load('template_master','nilai/edit',$data);
	}
}

//hapus data customer
function delete(){
	$id = $this->uri->segment(3);
	$this->__execute($this->API,'delete', array('id' => $id));
	redirect('nilai');
}
function __execute($url,$method,$param){
	$this->curl->create($url);
	$this->curl->$method($param);
	$result = json_decode($this->curl->execute());
	return $result;
}
}
	

