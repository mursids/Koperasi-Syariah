<?php

/**
 * @Author: Aviv Arifian D
 * @Date:   2016-08-16 06:08:27
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-18 18:25:09
 */

class AngsuranPembiayaan extends CI_Model
{
    //Untuk Ambil Data Angsuran Pembiayaan
    public function ambilAngsuranPembiayaan($id_pembiayaan)
    {
        $this->db->where('id_pembiayaan', $id_pembiayaan);
        return $this->db->get('tb_angsuran_pembiayaan')->result();
    }

    //Untuk Simpan Angsuran Pembiayaan
    public function simpanAngsuranPembiayaan($data)
    {
        $this->db->insert('tb_angsuran_pembiayaan', $data);
    }

    public function ambilAngsuranPembiayaanTerbaru($id_pembiayaan)
    {
        $this->db->where('id_pembiayaan', $id_pembiayaan);
        $this->db->order_by('tanggal_pembayaran_angsuran', 'DESC');
        return $this->db->get('tb_angsuran_pembiayaan')->result();
    }

    /**
     * untuk mengambil semua data angsuran pembiayaan
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function ambilSemuaAngsuranPembiayaan()
    {
        return $this->db->get('tb_angsuran_pembiayaan')->result();
    }

}
