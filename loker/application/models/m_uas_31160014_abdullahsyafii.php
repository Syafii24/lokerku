<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class m_uas_31160014_abdullahsyafii extends CI_Model {
 	//--------------- Awal kode Film ---------------//
 	function get_pencaker(){
 		return $this->db->get('pencaker');
 	}

 	public function tambah_pencaker($data){
 		$this->db->insert('pencaker',$data);
 	}

	public function getdetail_pencaker($id){
	return $this ->db->get_where ('pencaker', array('pencaker_id' => $id ));
		}
		
	public function detail_pencaker($data, $id){
	$this->db->update('pencaker', $data, array('pencaker_id' => $id));
		}
		
 	public function getEdit_pencaker($id){
 		return $this->db->get_where('pencaker', array('pencaker_id' => $id));
 	}

 	public function edit_pencaker($data, $id){
 		$this->db->update('pencaker', $data, array('pencaker_id' => $id));
 	}

	public function gambar($id){
		$this->db->get_where('pencaker_id', $id );
		return $this->db->get('pencaker')->row();
			}	
			
 	public function hapus_pencaker($id){
 		$this->db->where('pencaker_id',$id);
 		$this->db->delete('pencaker');
 	}
	//--------------- Akhir kode Film ---------------//
	
	//-- Kode yang ditambahkan di models\m_index.php untuk blok teater --//
	function get_perusahaan(){
 		return $this->db->get('perusahaan');
 	}

 	public function tambah_perusahaan($data){
 		$this->db->insert('perusahaan',$data);
 	}

 	public function getEdit_perusahaan($id){
 		return $this->db->get_where('perusahaan', array('id_perusahaan' => $id));
 	}

 	public function edit_perusahaan($data, $id){
 		$this->db->update('perusahaan', $data, array('id_perusahaan' => $id));
 	}

 	public function hapus_perusahaan($id){
 		$this->db->where('id_perusahaan',$id);
 		$this->db->delete('perusahaan');
 	}
	//--------------- Akhir kode teater ---------------//
	function get_kategori(){
 		return $this->db->get('kategori');
 	}

 	public function tambah_kategori($data){
 		$this->db->insert('kategori',$data);
 	}

 	public function getEdit_kategori($id){
 		return $this->db->get_where('kategori', array('id_kategori' => $id));
 	}

 	public function edit_kategori($data, $id){
 		$this->db->update('kategori', $data, array('id_kategori' => $id));
 	}

 	public function hapus_kategori($id){
 		$this->db->where('id_kategori',$id);
 		$this->db->delete('kategori');
	}
	//-- Kode yang ditambahkan di models\m_index.php untuk blok kursi --//
	
	//--------------- Akhir kode kursi ---------------//
	
	//--------------- Jadwal ---------------//
 	function get_lowongan(){
 		$this->db->select('lowongan.*, perusahaan.*, kategori.*');
 		$this->db->from('lowongan');
 		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan', 'left');
 		$this->db->join('kategori', 'kategori.id_kategori = lowongan.id_kategori', 'left');
 		return $this->db->get();
 	}

 	public function tambah_lowongan($data){
 		$this->db->insert('lowongan',$data);
 	}

 	public function getEdit_lowongan($id){
 		return $this->db->get_where('lowongan', array('id_lowongan' => $id));
 	}

 	public function edit_lowongan($data, $id){
 		$this->db->update('lowongan', $data, array('id_lowongan' => $id));
 	}

 	public function hapus_lowongan($id){
 		$this->db->where('id_lowongan',$id);
 		$this->db->delete('lowongan');
 	}
	
	//--------------- Akhir kode jadwal ---------------//
	
	//------- Kode yang ditambahkan di models\m_index.php untuk blok operator -------//	
		function get_admin () {
		return $this->db->get('admin');
			}
		public function tambah_admin($data){
		$this->db->insert('admin',$data);
			}		
		public function getEdit_admin($id){
		return $this ->db->get_where ('admin', array('admin_id' => $id ));
			}
		public function edit_admin($data, $id){
		$this->db->update('admin', $data, array('admin_id' => $id));
			}
	
		public function hapus_admin($id){
		$this->db->where('admin_id', $id);
		$this->db->delete('admin');
			}
			
	//--------------- Akhir kode operator ---------------//
	//------- Kode yang ditambahkan di models\m_index.php untuk blok pembayaran -------//

	function get_pendaftaran(){
		$this->db->select('pendaftaran.*,pencaker.*,perusahaan.*,lowongan.*');
		$this->db->from('pendaftaran');
		$this->db->join('pencaker', 'pencaker.pencaker_id = pendaftaran.pencaker_id', 'left');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = pendaftaran.id_perusahaan', 'left');
		$this->db->join('lowongan', 'lowongan.id_lowongan = pendaftaran.id_lowongan', 'left');
		return $this->db->get();
	}
	
	public function tambah_pendaftaran($data){
		$this->db->insert('pendaftaran',$data);
			}
	public function getEdit_pendaftaran($id){
		return $this ->db->get_where ('pendaftaran', array('id_pendaftaran' => $id ));
			}
	public function edit_pendaftaran($data, $id){
		$this->db->update('pendaftaran', $data, array('id_pendaftaran' => $id));
			}
	public function hapus_pendaftaran($id){
		$this->db->where('id_pendaftaran', $id);
		$this->db->delete('pendaftaran');
			}
	//------- Akhir Kode yang ditambahkan di models\m_index.php untuk blok pembayaran -------//
	//------- Akhir Kode yang ditambahkan di models\m_index.php untuk blok transaksi -------//
//--------------- Awal kode Pengguna ---------------//
 	function get_pengguna(){
 		return $this->db->get('pengguna');
 	}

 	public function tambah_pengguna($data){
 		$this->db->insert('pengguna',$data);
 	}

 	public function getEdit_pengguna($id){
 		return $this->db->get_where('pengguna', array('pengguna_id' => $id));
 	}

 	public function edit_pengguna($data, $id){
 		$this->db->update('pengguna', $data, array('pengguna_id' => $id));
 	}

 	public function hapus_pengguna($id){
 		$this->db->where('pengguna_id',$id);
 		$this->db->delete('pengguna');
 	}
	//--------------- Akhir kode Pengguna ---------------//
	//--------------- Awal kode Cetak Film ---------------//
	function cetak_perusahaan($T1,$T2){
 		//$this->db->select('film.*');
 		$this->db->where('tglberdiri >=',$T1);
 		$this->db->where('tglberdiri <=',$T2);
 		return $this->db->get('perusahaan');
 	}
	//--------------- Akhir kode Cetak Film ---------------//
	function cetak_lowongan($T1,$T2){
 		//$this->db->select('film.*');
 		$this->db->where('tgl_tutup >=',$T1);
 		$this->db->where('tgl_tutup <=',$T2);
 		return $this->db->get('lowongan');
 	}
	//--------------- Akhir kode Cetak Film ---------------//
	function cetak_pencaker($T1,$T2){
 		//$this->db->select('film.*');
 		$this->db->where('tgl_lahir >=',$T1);
 		$this->db->where('tgl_lahir <=',$T2);
 		return $this->db->get('pencaker');
 	}
	//--------------- Akhir kode Cetak Film ---------------//
	function cetak_kategori($T1,$T2){
 		//$this->db->select('film.*');
 		$this->db->where('tgl_input >=',$T1);
 		$this->db->where('tgl_input <=',$T2);
 		return $this->db->get('kategori');
 	}
	//--------------- Akhir kode Cetak Film ---------------//
	function cetak_admin($T1,$T2){
 		//$this->db->select('film.*');
 		$this->db->where('admin_tglentry >=',$T1);
 		$this->db->where('admin_tglentry <=',$T2);
 		return $this->db->get('admin');
 	}
	}
 ?>