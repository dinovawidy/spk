<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('alternatif_m');
	}

	public function index()
	{
		$data['row'] = $this->alternatif_m->get();
		$this->template->load('template', 'alternatif/alternatif_data', $data);
	}

	/*public function add()
	{
		$alternatif = new stdClass();
		$alternatif->alternatif_id = null;
		$alternatif->name = null;
		$alternatif->phone = null;
		$alternatif->address = null;
		$alternatif->description = null;
		$data = array(
			'page' => 'add',
			'row' => $alternatif
		);
		$this->template->load('template', 'alternatif/alternatif_form', $data);
	}*/

	public function add()
	{
		$alternatif = new stdClass();
		$alternatif->alternatif_id = null;
		$alternatif->name = null;
		$alternatif->address = null;
		$alternatif->gender = null;
		$alternatif->email = null;
		$alternatif->kode = null;
		$data = array(
			'page' => 'add',
			'row' => $alternatif
		);
		$this->template->load('template', 'alternatif/alternatif_form', $data);
	}

	public function edit($id)
	{
		$query = $this->alternatif_m->get($id);
		if ($query->num_rows() > 0) {
			$alternatif = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $alternatif
		);
		$this->template->load('template', 'alternatif/alternatif_form', $data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "window.location='".site_url('alternatif')."'</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			if($this->alternatif_m->check_kode($post['kode'])->num_rows() > 0) {
				$this->session->set_flashdata('error', "Code $post[kode] telah digunakan alternatif lain");
				redirect('alternatif/add');
			} else {
				$this->alternatif_m->add($post);
				if ($this->db->affected_rows() > 0 ) {
             echo "<script>alert('Data Berhasil duisimpan');</script>";
        }	
			}
			
		} else if (isset($_POST['edit'])) {
			if($this->alternatif_m->check_kode($post['kode'], $post['id'])->num_rows() > 0) {
				$this->session->set_flashdata('error', "Code $post[kode] telah digunakan alternatif lain");
				redirect('alternatif/edit/'.$post['id']);
			} else {
				$this->alternatif_m->edit($post);	
				if ($this->db->affected_rows() > 0 ) {
             echo "<script>alert('Data Berhasil duisimpan');</script>";
        }
			}
		}
        echo "<script>window.location='".site_url('alternatif')."'</script>"; //redirect
	}

	

	public function del($id)
	{
		$this->alternatif_m->del($id);
		if ($this->db->affected_rows() > 0 ) {
             echo "<script>alert('Data Berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('alternatif')."'</script>"; //redirect
	}
}
 