<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_uas_31160014_abdullahsyafii extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_uas_31160014_abdullahsyafii');
	}

	//Bagian pengelolaan dashboard
	public function index()
	{
		$data['isi'] = 'content/uas_home.php';
		$this->load->view('template/uas_utama', $data);
	}

	//--Kode yang ditambahkan di controller\dashboard.php untuk blok film -------//

	public function pencaker(){
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function detail_pencaker($id){
		$data['detail_pencaker']=$this->m_uas_31160014_abdullahsyafii->getdetail_pencaker($id);
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker_detail.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_pencaker(){
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_tambah_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_pencaker(){
		$config['upload_path'] = './assets/pencaker';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$this->upload->initialize($config);
		if(!empty($_FILES['F1']['name'])){
			if($this->upload->do_upload('F1')){
				$gbr = $this->upload->data();
				//Compress image
				$config['image_library']='gd2';
				$config['source_image']='./assets/pencaker'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '50%';
				$config['width']= 600;
				$config['height']= 400;
				$config['new_image']='./assets/pencaker'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
		$data = array ("nm_pencaker" => $this->input->post("T1"),
			"jnskelamin" => $this->input->post("C1"),
			"tgl_lahir" => date("Y-m-d",strtotime($this->input->post("T2"))),
			"alamat_pencaker" => $this->input->post("T3"),
			"email" => $this->input->post("T4"),
			"status" => $this->input->post("C2"),
			"pencaker_photo" => $gbr['file_name'],
		);
		
		$this->m_uas_31160014_abdullahsyafii->tambah_pencaker($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}else{
		echo "Image yang diupload kosong";
	}
	}
	}

	public function edit_pencaker($id){
		$data['edit_pencaker']=$this->m_uas_31160014_abdullahsyafii->getEdit_pencaker($id);
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_edit_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_pencaker(){
		if(empty($_FILES['F1']['name'])){
		$id = $this->input->post("H1");
		$photo_lama = $this->input->post("H2");
		$data = array ("nm_pencaker" => $this->input->post("T1"),
			"jnskelamin" => $this->input->post("C1"),
			"tgl_lahir" => date("Y-m-d",strtotime($this->input->post("T2"))),
			"alamat_pencaker" => $this->input->post("T3"),
			"email" => $this->input->post("T4"),
			"status" => $this->input->post("C2"),
			"pencaker_photo" => $photo_lama,
		);
		
		$this->m_uas_31160014_abdullahsyafii->edit_pencaker($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}else{
		$config['upload_path'] = './assets/pencaker';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$this->upload->initialize($config);
			if($this->upload->do_upload('F1')){
				$gbr = $this->upload->data();
				//Compress image
				$config['image_library']='gd2';
				$config['source_image']='./assets/pencaker'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '50%';
				$config['width']= 600;
				$config['height']= 400;
				$config['new_image']='./assets/pencaker'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this->input->post("H1");
				$data = array ("nm_pencaker" => $this->input->post("T1"),
					"jnskelamin" => $this->input->post("C1"),
					"tgl_lahir" => date("Y-m-d",strtotime($this->input->post("T2"))),
					"alamat_pencaker" => $this->input->post("T3"),
					"email" => $this->input->post("T4"),
					"status" => $this->input->post("C2"),
					"pencaker_photo" => $gbr['file_name'],
				);
		$this->m_uas_31160014_abdullahsyafii->edit_pencaker($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}
}
}

	public function proses_hapus_pencaker($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_pencaker($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['isi'] = "content/pencaker/v_uas_31160014_abdullahsyafii_data_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}
	//--Akhir kode yang ditambahkan di controller\dashboard.php untuk blok film -------//
	
	//--Kode yang ditambahkan di controller\dashboard.php untuk blok teater -------//

	public function perusahaan(){
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_data_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_perusahaan(){
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_tambah_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_perusahaan(){
		$data = array ("nm_perusahaan" => $this->input->post("T1"),
						"alamat_perusahaan" => $this->input->post("T2"),
						"deskripsi_perusahaan" => $this->input->post("T3"),
						"web_perusahaan" => $this->input->post("T4"),
						"telepon_perusahaan" => $this->input->post("T5"),
						"tglberdiri" => date("Y-m-d",strtotime($this->input->post("T6"))),
					);
		$this->m_uas_31160014_abdullahsyafii->tambah_perusahaan($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_data_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_perusahaan($id){
		$data['edit_perusahaan']=$this->m_uas_31160014_abdullahsyafii->getEdit_perusahaan($id);
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_edit_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_perusahaan(){
		$id = $this->input->post("H1");
		$data = array ("nm_perusahaan" => $this->input->post("T1"),
						"alamat_perusahaan" => $this->input->post("T2"),
						"deskripsi_perusahaan" => $this->input->post("T3"),
						"web_perusahaan" => $this->input->post("T4"),
						"telepon_perusahaan" => $this->input->post("T5"),
						"tglberdiri" => date("Y-m-d",strtotime($this->input->post("T6"))),
					);
		$this->m_uas_31160014_abdullahsyafii->edit_perusahaan($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_data_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_hapus_perusahaan($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_perusahaan($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['isi'] = "content/perusahaan/v_uas_31160014_abdullahsyafii_data_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}
	//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok teater -------//
	
	//--Kode yang ditambahkan di controller\dashboard.php untuk blok kategori -------//
	
	public function kategori(){
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_data_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_kategori(){
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_tambah_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_kategori(){
		$data = array ("id_kategori" => $this->input->post("T1"),
						"nm_kategori" => $this->input->post("C1"),
						"tgl_input" => date("Y-m-d",strtotime($this->input->post("T2"))),
					);
		$this->m_uas_31160014_abdullahsyafii->tambah_kategori($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_data_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_kategori($id){
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['edit_kategori']=$this->m_uas_31160014_abdullahsyafii->getEdit_kategori($id);
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_edit_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_kategori(){
		$id = $this->input->post("H1");
		$data = array ("id_kategori" => $this->input->post("T1"),
						"nm_kategori" => $this->input->post("C1"),
						"tgl_input" => date("Y-m-d",strtotime($this->input->post("T2"))),
					);
		$this->m_uas_31160014_abdullahsyafii->edit_kategori($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_data_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_hapus_kategori($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_kategori($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['isi'] = "content/kategori/v_uas_31160014_abdullahsyafii_data_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}
//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok kategori -------//

//--Kode yang ditambahkan di controller\dashboard.php untuk blok jadwal -------//
	
	public function lowongan(){
		$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_data_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_lowongan(){
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan ();
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori ();
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_tambah_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_lowongan(){
		$data = array ("nm_lowongan" => $this->input->post("T1"),
						"id_perusahaan" => $this->input->post("C1"),
						"id_kategori" => $this->input->post("C2"),
						"syarat_lowongan" => $this->input->post("T2"),
						"tgl_tutup" => date("Y-m-d",strtotime($this->input->post("T3"))),
					);
		$this->m_uas_31160014_abdullahsyafii->tambah_lowongan($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_data_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_lowongan($id){
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['kategori']=$this->m_uas_31160014_abdullahsyafii->get_kategori();
		$data['edit_lowongan']=$this->m_uas_31160014_abdullahsyafii->getEdit_lowongan($id);
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_edit_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_lowongan(){
		$id = $this->input->post("H1");
		$data = array ("nm_lowongan" => $this->input->post("T1"),
						"id_perusahaan" => $this->input->post("C1"),
						"id_kategori" => $this->input->post("C2"),
						"syarat_lowongan" => $this->input->post("T2"),
						"tgl_tutup" => date("Y-m-d",strtotime($this->input->post("T3"))),
					);
		$this->m_uas_31160014_abdullahsyafii->edit_lowongan($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_data_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_hapus_lowongan($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_lowongan($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
		$data['isi'] = "content/lowongan/v_uas_31160014_abdullahsyafii_data_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}
//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok jadwal -------//

//--Kode yang ditambahkan di controller\dashboard.php untuk blok operator -------//
	
public function admin(){
		$data['admin']=$this->m_uas_31160014_abdullahsyafii->get_admin();
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_data_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_admin(){
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_tambah_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_admin(){
				$data = array ("admin_name" => $this->input->post("T1"),
					"admin_address" => $this->input->post("T2"),
					"admin_kode_pos" => $this->input->post("T3"),
					"admin_deskripsi" => $this->input->post("T4"),
					"admin_tglentry" => date("Y-m-d",strtotime($this->input->post("T5"))),
		);
		$this->m_uas_31160014_abdullahsyafii->tambah_admin($data);
		$data['msg'] = "Data Berhasil Ditambah";
		$data['admin']=$this->m_uas_31160014_abdullahsyafii->get_admin();
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_data_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_admin($id){
		$data['edit_admin']=$this->m_uas_31160014_abdullahsyafii->getEdit_admin($id);
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_edit_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_admin(){
		$id = $this ->input->post("H1");
		$data = array ("admin_name" => $this->input->post("T1"),
					"admin_address" => $this->input->post("T2"),
					"admin_kode_pos" => $this->input->post("T3"),
					"admin_deskripsi" => $this->input->post("T4"),
					"admin_tglentry" => date("Y-m-d",strtotime($this->input->post("T5"))),
		);
		$this->m_uas_31160014_abdullahsyafii->edit_admin($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['admin']=$this->m_uas_31160014_abdullahsyafii->get_admin();
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_data_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_hapus_admin($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_admin($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['admin']=$this->m_uas_31160014_abdullahsyafii->get_admin();
		$data['isi'] = "content/admin/v_uas_31160014_abdullahsyafii_data_admin.php";
		$this->load->view('template/uas_utama',$data);
	}
//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok admin -------//

//-- Awal kode pendaftaran --//
public function pendaftaran(){
		$data['pendaftaran']=$this->m_uas_31160014_abdullahsyafii->get_pendaftaran();
		$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_data_pendaftaran.php";
		$this->load->view('template/uas_utama',$data);
	}
public function tambah_pendaftaran(){
	$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
	$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
	$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
	$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_tambah_pendaftaran.php";
	$this->load->view('template/uas_utama',$data);
  }
	public function proses_tambah_pendaftaran(){
		$data = array ("tgl_daftar" => date("Y-m-d",strtotime($this->input->post("T1"))),
						"pencaker_id" => $this->input->post("C1"),
						"id_perusahaan" => $this->input->post("C2"),
						"id_lowongan" => $this->input->post("C3"),
						"keterangan_daftar" => $this->input->post("T2"),
					);
		$this->m_uas_31160014_abdullahsyafii->tambah_pendaftaran($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['pendaftaran']=$this->m_uas_31160014_abdullahsyafii->get_pendaftaran();
		$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_data_pendaftaran.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_pendaftaran($id){
		$data['pencaker']=$this->m_uas_31160014_abdullahsyafii->get_pencaker();
		$data['perusahaan']=$this->m_uas_31160014_abdullahsyafii->get_perusahaan();
		$data['lowongan']=$this->m_uas_31160014_abdullahsyafii->get_lowongan();
		$data['edit_pendaftaran']=$this->m_uas_31160014_abdullahsyafii->getEdit_pendaftaran($id);
		$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_edit_pendaftaran.php";
		$this->load->view('template/uas_utama',$data);
	}
	
	public function proses_edit_pendaftaran(){
		$id = $this ->input->post("H1");
		$data = array ("tgl_daftar" => date("Y-m-d",strtotime($this->input->post("T1"))),
						"pencaker_id" => $this->input->post("C1"),
						"id_perusahaan" => $this->input->post("C2"),
						"id_lowongan" => $this->input->post("C3"),
						"keterangan_daftar" => $this->input->post("T2"),
					);
		$this->m_uas_31160014_abdullahsyafii->edit_pendaftaran($data, $id);
		$data['msg'] = "Data Berhasil Di Rubah";
		$data['pendaftaran']=$this->m_uas_31160014_abdullahsyafii->get_pendaftaran();
		$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_data_pendaftaran.php";
		$this->load->view('template/uas_utama',$data);
	}
	
	public function proses_hapus_pendaftaran($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_pendaftaran($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['pendaftaran']=$this->m_uas_31160014_abdullahsyafii->get_pendaftaran();
		$data['isi'] = "content/pendaftaran/v_uas_31160014_abdullahsyafii_data_pendaftaran.php";
		$this->load->view('template/uas_utama',$data);
	}
//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok pendaftaran -------//	
		
//-- Awal kode pengguna --//
		public function pengguna(){
		$data['pengguna']=$this->m_uas_31160014_abdullahsyafii->get_pengguna();
		$data['isi'] = "content/data_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function tambah_pengguna(){
		$data['isi'] = "content/tambah_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_tambah_pengguna(){
		$data = array ("pengguna_nama" => $this->input->post("T1"),
			"pengguna_username" => $this->input->post("T2"),
			"pengguna_password" => base64_encode($this->input->post("T3")),
			"pengguna_level" => $this->input->post("C1"),
			"pengguna_blokir" => $this->input->post("C2"),
			"pengguna_tglupdate" => date("Y-m-d",strtotime($this->input->post("T4"))),
		);
		$this->m_uas_31160014_abdullahsyafii->tambah_pengguna($data);
		$data['msg'] = "Data Berhasil Ditambahkan";
		$data['pengguna']=$this->m_uas_31160014_abdullahsyafii->get_pengguna();
		$data['isi'] = "content/data_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function edit_pengguna($id){
		$data['edit_pengguna']=$this->m_uas_31160014_abdullahsyafii->getEdit_pengguna($id);
		$data['isi'] = "content/edit_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_edit_pengguna(){
		$id = $this->input->post("H1");
		$data = array ("pengguna_nama" => $this->input->post("T1"),
			"pengguna_username" => $this->input->post("T2"),
			"pengguna_password" => base64_encode($this->input->post("T3")),
			"pengguna_level" => $this->input->post("C1"),
			"pengguna_blokir" => $this->input->post("C2"),
			"pengguna_tglupdate" => date("Y-m-d",strtotime($this->input->post("T4"))),
		);
		$this->m_uas_31160014_abdullahsyafii->edit_pengguna($data, $id);
		$data['msg'] = "Data Berhasil Diubah";
		$data['pengguna']=$this->m_uas_31160014_abdullahsyafii->get_pengguna();
		$data['isi'] = "content/data_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function proses_hapus_pengguna($id){
		$this->m_uas_31160014_abdullahsyafii->hapus_pengguna($id);
		$data['msg'] = "Data Berhasil Dihapus";
		$data['pengguna']=$this->m_uas_31160014_abdullahsyafii->get_pengguna();
		$data['isi'] = "content/data_pengguna.php";
		$this->load->view('template/uas_utama',$data);
	}
	
	//-- Akhir Kode yang ditambahkan di controller\dashboard.php untuk blok pengguna -------//	

	//-- Awal kode cetak data film --//
	public function tampil_cetak_perusahaan(){
		$data['isi'] = "cetak/v_uas_31160014_abdullahsyafii_cetak_perusahaan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function perusahaan_cetak(){
		$T1 = $this->input->post('T1',true);
		$T2 = $this->input->post('T2',true);
		ob_start();
		$data['perusahaan'] = $this->m_uas_31160014_abdullahsyafii->cetak_perusahaan($T1,$T2);
		$this->load->view('cetak/v_uas_31160014_abdullahsyafii_cetak_data_perusahaan',$data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en',true,'UTF-8',3);
		$pdf->WriteHTML($html);
		$pdf->Output('Data Perusahaan.pdf','D');
	}
	
	//---------------//
	public function tampil_cetak_lowongan(){
		$data['isi'] = "cetak/v_uas_31160014_abdullahsyafii_cetak_lowongan.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function lowongan_cetak(){
		$T1 = $this->input->post('T1',true);
		$T2 = $this->input->post('T2',true);
		ob_start();
		$data['lowongan'] = $this->m_uas_31160014_abdullahsyafii->cetak_lowongan($T1,$T2);
		$this->load->view('cetak/v_uas_31160014_abdullahsyafii_cetak_data_lowongan',$data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en',true,'UTF-8',3);
		$pdf->WriteHTML($html);
		$pdf->Output('Data Lowongan.pdf','P');
	}
	//--------//
	
	public function tampil_cetak_pencaker(){
		$data['isi'] = "cetak/v_uas_31160014_abdullahsyafii_cetak_pencaker.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function pencaker_cetak(){
		$T1 = $this->input->post('T1',true);
		$T2 = $this->input->post('T2',true);
		ob_start();
		$data['pencaker'] = $this->m_uas_31160014_abdullahsyafii->cetak_pencaker($T1,$T2);
		$this->load->view('cetak/v_uas_31160014_abdullahsyafii_cetak_data_pencaker',$data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en',true,'UTF-8',3);
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pencaker.pdf','P');
	}
	//--------//
	
	public function tampil_cetak_kategori(){
		$data['isi'] = "cetak/v_uas_31160014_abdullahsyafii_cetak_kategori.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function kategori_cetak(){
		$T1 = $this->input->post('T1',true);
		$T2 = $this->input->post('T2',true);
		ob_start();
		$data['kategori'] = $this->m_uas_31160014_abdullahsyafii->cetak_kategori($T1,$T2);
		$this->load->view('cetak/v_uas_31160014_abdullahsyafii_cetak_data_kategori',$data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en',true,'UTF-8',3);
		$pdf->WriteHTML($html);
		$pdf->Output('Data Kategori.pdf','P');
	}
	//--------//
	
	public function tampil_cetak_admin(){
		$data['isi'] = "cetak/v_uas_31160014_abdullahsyafii_cetak_admin.php";
		$this->load->view('template/uas_utama',$data);
	}

	public function admin_cetak(){
		$T1 = $this->input->post('T1',true);
		$T2 = $this->input->post('T2',true);
		ob_start();
		$data['admin'] = $this->m_uas_31160014_abdullahsyafii->cetak_admin($T1,$T2);
		$this->load->view('cetak/v_uas_31160014_abdullahsyafii_cetak_data_admin',$data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en',true,'UTF-8',3);
		$pdf->WriteHTML($html);
		$pdf->Output('Data Admin.pdf','P');
	}
	}
?>