<?php

namespace App\Controllers;

class Main extends BaseController
{
    protected $ModelUser1;
    public function __construct()
    {
        $this->ModelUser1 = new \App\Models\ModelUser();
    }
    public function index()
    {
        //echo view('layout/header');
        //$ModelUser1 = new \App\Models\ModelUser();
        $statusUser = $this->ModelUser1->where("status", 1)->first();
        $statusUser2 = $this->ModelUser1->where("status", 2)->first();
        $datauser1 = [
            'nama' => $statusUser["nama"],
            'divisi' => $statusUser["divisi"],
            'profile' => $statusUser["divisi"],
            'nama2' => $statusUser2["nama"],
            'divisi2' => $statusUser2["divisi"],
            'profile2' => $statusUser2["divisi"],
        ];
        // $data = [
        //     'nama' => $this->request->getVar('name'),
        //     'kontak' => $this->request->getVar('kontak'),
        //     'profile' => $this->request->getVar('profile'),
        //     'nama2' => $this->request->getVar('name2'),
        //     'kontak2' => $this->request->getVar('kontak2'),
        //     'profile2' => $this->request->getVar('profile2'),
        // ];
        // echo session()->set('nama');
        // echo session()->set('divisi');
        echo view('main/home', $datauser1);
    }

    // public function addU()
    // {

    //     echo view('main/addUser', array('error' => ' '));
    // }

    public function AddStatusRDP1($id)
    {

        $this->ModelUser1->save([
            'id_data' => $id,
            'status' => 1,
        ]);
        echo $id;
        return redirect()->to('Main');
    }
    public function AddStatusRDP2($id)
    {

        $this->ModelUser1->save([
            'id_data' => $id,
            'status' => 2,
        ]);
        echo $id;
        return redirect()->to('Main');
    }
    public function deleteStatus1($id)
    {

        $this->ModelUser1->save([
            'id_data' => $id,
            'status' => 0,
        ]);
        echo $id;
        return redirect()->to('Main');
    }
    public function registrasi()
    {
        return view('registrasi');
    }
    public function addU2()
    {
        $this->ModelUser1->save([
            'nama' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'divisi' => $this->request->getVar('divisi'),
        ]);

        return redirect()->to('login');
        // echo view('main/addUser2', array('error' => ' '));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
