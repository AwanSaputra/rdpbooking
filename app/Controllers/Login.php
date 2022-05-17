<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
        $ModelUser = new \App\Models\ModelUser();
        $login = $this->request->getPost('login');
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = "Silahkan masukkan username atau password";
            }

            if (empty($err)) {
                $statusUser = $ModelUser->where("status", 1)->first();
                $statusUser2 = $ModelUser->where("status", 2)->first();
                // var_dump($statusUser["username"]);
                //kondisi saat user ada status
                if (($statusUser["status"] == 1 or $statusUser2["status"] == 2) and ($statusUser["username"] == $username or $statusUser2["username"] == $username)) {
                    $datauser = $ModelUser->where("username", $username)->first();
                    if ($datauser["password"] != $password) {
                        $err = "Password tidak sesuai";
                    } else {
                        $datasesi = [
                            'nama' => $datauser["nama"],
                            'divisi' => $datauser["divisi"],
                            'id' => $datauser["id_data"],
                        ];
                        session()->set($datasesi);
                        return redirect()->to('Main');
                    }
                    //return redirect()->to('login');
                    // echo "Ada User";
                } else if (($statusUser["status"] == 1 and $statusUser2["status"] == 2) and ($statusUser["username"] != $username or $statusUser2["username"] != $username)) {
                    $varNama = $statusUser["nama"];
                    $varNama2 = $statusUser2["nama"];
                    $varDivisi = $statusUser["divisi"];
                    $varDivisi2 = $statusUser2["divisi"];
                    if ($statusUser["status"] == 1 and $statusUser2["status"] == 2) {
                        $err1 = "RDP A Sedang digunakan  $varNama dari divisi $varDivisi <br />  RDP B Sedang digunakan  $varNama2 dari divisi $varDivisi <br /> Silahkan menghubungi user tersebut apabila anda butuh menggunakan RDP";
                    }
                    // else if ($statusUser["status"] == 1) {
                    //     $err1 = "RDP A Sedang digunakan  $var ";
                    // } else if ($statusUser["status"] == 2) {
                    //     $err1 = "RDP A Sedang digunakan  $var2 ";
                    // }

                    session()->setFlashdata('error', $err1);

                    return redirect()->to('login');
                } else {
                    $datauser = $ModelUser->where("username", $username)->first();
                    if ($datauser["password"] != $password) {
                        $err = "Password tidak sesuai";
                    } else {
                        $datasesi = [
                            'nama' => $datauser["nama"],
                            'divisi' => $datauser["divisi"],
                            'id' => $datauser["id_data"],
                        ];
                        session()->set($datasesi);
                        return redirect()->to('Main');
                    }
                }
            }

            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('login');
                // echo "Test";
            }
        }
        return view('login_views');
        // return view('main/login_views');
        // echo "Test";
    }

    public function registrasi()
    {
        return view('registrasi');
    }
}
