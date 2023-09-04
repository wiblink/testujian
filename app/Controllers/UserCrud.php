<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    // show users list
    public function index(){
        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('user_id', 'DESC')->findAll();
        echo view('header', $data);
        echo view('user_view', $data);
    }

    // show add user form
    public function create(){
        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";
        echo view('header', $data);
        echo view('add_user');
    }
 
    // insert data into database
    public function store() {
        $userModel = new UserModel();

        helper(['form', 'url']);

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,300]'
        ]);
 
        if ($validation == FALSE) {
                $data = array(
                    'user_name' => $this->request->getVar('name'),
                    'user_email'  => $this->request->getVar('email'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                );
        } else {
            $upload = $this->request->getFile('file_upload');
            $newName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../upload/', $newName);
           
                $data = array(
                    'user_name' => $this->request->getVar('name'),
                    'user_email'  => $this->request->getVar('email'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'img_file' => $newName
                );
        }

        $userModel->insert($data);
        #echo $userModel->db->getLastQuery()->getQuery(); die;
        return $this->response->redirect(site_url('/users-list'));
    }

    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('user_id', $id)->first();
        $session = session();
        $data['teks'] = "Welcome back, ".$session->get('user_name')."";
        echo view('header', $data);
        echo view('edit_user', $data);
    }

    public function getimages($id = null){
        $userModel = new UserModel();
        $getimg = $userModel->where('user_id', $id)->first();        
       die(print_r($getimg));
    }

    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,300]'
        ]);
 
        if ($validation == FALSE) {
                $data = array(
                    'user_name' => $this->request->getVar('name'),
                    'user_email'  => $this->request->getVar('email'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                );
        } else {

            $dt = $userModel->where('user_id', $id)->first();
        $gambar = $dt['img_file'];
        //die(print_r($gambar));
        $path = '../upload/';
        @unlink($path.$gambar);

            $upload = $this->request->getFile('file_upload');
            $newName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../upload/', $newName);
           
                $data = array(
                    'user_name' => $this->request->getVar('name'),
                    'user_email'  => $this->request->getVar('email'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'img_file' => $newName
                );
        }
       /* $data = [
            'user_name' => $this->request->getVar('name'),
            'user_email'  => $this->request->getVar('email'),
        ];*/
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}