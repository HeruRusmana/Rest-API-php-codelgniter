<?php 
class M_siswa extends CI_Model{
	/**
     * Get All Data Siswa
     */
    public function read()
    {
        /**$this->db->select("*");
        $this->db->from("tbl_siswa");
        $this->db->order_by("id_siswa", "DESC");
		*/
        return $this->db->get('tbl_siswa');
    }

    public function create($data)
    {
        $simpan = $this->db->insert("tbl_siswa", $data);

        if ($simpan) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
	/**
     * Detail Data Siswa
     */
    public function detail($id_siswa)
    {
        /*$this->db->select("*");
        $this->db->from("tbl_siswa");
		*/
        $this->db->where("id_siswa", $id_siswa);
        return $this->db->get('tbl_siswa');
    }
	 
	 /**
     * Update Data Siswa
     */
    public function update($nama_siswa, $id_siswa)
    {
        $update = $this->db->update("tbl_siswa", $nama_siswa, $id_siswa);

        if($update) {
            return TRUE;
        } else {
            return FALSE;
        }

    }
	/**
     * Delete Data Siswa
     */
    public function delete_siswa($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $delete = $this->db->delete('tbl_siswa');

        if($delete) {
            return TRUE;
        } else {
            return FALSE;
        }

	}


}
?>
