<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {   
        //Menampilkan Data dengan menggunakan Query Builder
        $builder = $this->db->table('acara');
        $query   = $builder->get()->getResult();
        
        // //Menampilkan Data dengan Query Manual
        // $query = $this->db->query("SELECT * FROM acara");
        $data['acara'] = $query;
        return view('acara/get', $data);
    }

    public function create()
    {    
        return view('acara/add');
    }

    public function store()
    {
        //cara 1 : jika nama dalam form dan field database sama
        $data = $this->request->getPost();
        
        //cara 2 : jika nama berbeda
        // $data = [
        //     'nama_acara' => $this->request->getVar('nama_acara'),
        //     'date_acara' => $this->request->getVar('date_acara'),
        //     'info_acara' => $this->request->getVar('info_acara'),
        // ];

        $this->db->table('acara')->insert($data);
        
        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
            }
            else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

        }
        else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }
    public function update ($id)
    {
        //cara 1 : jika nama dalam form dan field database sama
        // $data = $this->request->getPost() ;
        // unset($data['_method']);
       

        //cara 2 : jika nama berbeda
        $data = [
            'nama_acara' => $this->request->getVar('nama_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];

        $this->db->table('acara')->where(['id_acara'=> $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Diubah');
    }
    public function delete ($id){

        $this->db->table('acara')->where(['id_acara'=> $id])->delete();
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Dihapus');
    }
}