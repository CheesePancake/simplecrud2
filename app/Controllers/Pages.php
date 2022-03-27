<?php

namespace App\Controllers;

use App\Models\crudModel;

class Pages extends BaseController
{
    protected $crudModel;
    public function __construct()
    {
        $this->crudModel = new crudModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Simple Crud | Alif Aldiansyah'
        ];

        echo view('pages/default', $data);
    }
    public function crud()
    {
        // $orang = $this->crudModel->findAll();
        $data = [
            'title' => 'Data Crud',
            'orang' => $this->crudModel->getDetail()
        ];


        echo view('pages/crud', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'detail data',
            'detail' => $this->crudModel->getDetail($id)
        ];
        if (empty($data['detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan :(");
        }
        return view('pages/details', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah data baru',

        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        // $this->request->getVar();
        $this->crudModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil ditambahkan");
        return redirect()->to('/pages/crud');
    }
    public function delete($id)
    {
        $this->crudModel->delete($id);
        return redirect()->to('/pages/crud');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form edit data',
            'detail' => $this->crudModel->getDetail($id)

        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {

        // $this->request->getVar();
        $this->crudModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil diubah");
        return redirect()->to('/pages/crud');
    }
}
