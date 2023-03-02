<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AdminModel;
 
class Login extends Controller
{
 
    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id_admin'],
                    'user_name'     => $data['nama_admin'],
                    'user_email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/auth-login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/auth-login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth-login');
    }
} 