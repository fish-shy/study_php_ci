<?php
namespace App\Controllers;

class Mahasiswa extends BaseController{
        
    public function index(){
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa',
            
        ];
        return view('template', $data);
    }
        public function add(){
        helper('form');
        $data = [
            'title' => 'Tambah Mahasiswa',
            'content' => 'v_mahasiswa_add',
            
        ];
        return view('template', $data);
    }
    public function submit(){
        $validation = \Config\Services::validation();
        $rules = [
            'nim' => 'required',
            'Nama' => 'required',
            'jenisKelamin' => 'required',
            'tgl_lahir' =>'required',
            'umur' => 'required|integer',
            'jurusan' => 'required',
        ];


        if ($this -> validate($rules)){
            echo "sukses data berhasil disimpan";
            $data =[
            'nim' => $this->request->getpost('nim'),
            'Nama' => $this->request->getpost('Nama'),
            'jenisKelamin' => $this->request->getpost('jenisKelamin'),
            'tgl_lahir' => $this->request->getpost('tgl_lahir'),
            'umur' => $this->request->getpost('umur'),
            'jurusan' => $this->request->getpost('jurusan'),  
            ];
            
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        
        }else{
            echo $validation->listErrors();
        }

        
    }

}
?>