<?php 
namespace App\Controllers;
use App\Models\ProdukModel;
use CodeIgniter\Controller;

class ProdukCrud extends Controller
{
    // show produk list
    public function index(){

        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";

        $produkModel = new ProdukModel();
        $data['produksi'] = $produkModel->orderBy('id_produk', 'DESC')->findAll();
        echo view('header', $data);
        echo view('produk_view', $data);
    }

    // show add produk form
    public function create(){

        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";
        echo view('header', $data);
        echo view('add_produk');
    }
 
    // insert data into database
    public function store() {
        $produkModel = new ProdukModel();
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'deskripsi_produk'  => $this->request->getVar('deskripsi_produk'),
        ];
        $produkModel->insert($data);
        return $this->response->redirect(site_url('/produk-list'));
    }

    // show single user
    public function singleUser($id = null){
        $produkModel = new ProdukModel();
        $data['dta_produk'] = $produkModel->where('id_produk', $id)->first();
        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";
        echo view('header', $data);
        echo view('edit_produk', $data);
    }

    // update user data
    public function update(){
        $produkModel = new ProdukModel();
        $id = $this->request->getVar('id_produk');
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'deskripsi_produk'  => $this->request->getVar('deskripsi_produk'),
        ];
        $produkModel->update($id, $data);
        return $this->response->redirect(site_url('/produk-list'));
    }
 
    // delete user
    public function delete($id = null){
        $produkModel = new ProdukModel();
        $data['user'] = $produkModel->where('id_produk', $id)->delete($id);
        return $this->response->redirect(site_url('/produk-list'));
    }    
}