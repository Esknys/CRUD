<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CustomerModel;

class Customer extends Controller
{
     
    public function index()
    {
        $model = new CustomerModel();
        
        $data['customers_detail'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('list', $data);
    }
    
    public function create()
    {
        return view('add');
    }
    
    public function store() 
    {
        
        helper(['form', 'url']);
        
        $model = new CustomerModel();
        
        $data = [
            'name' => $this->request->getVar('txtName'),
            'surname' => $this->request->getVar('txtSurname'),
            'email' => $this->request->getVar('txtEmail'),
            'username' => $this->request->getVar('txtUsername'),
            'password' => $this->request->getVar('txtPassword'),
            'address' => $this->request->getVar('txtAddress'),
            'phonenumber' => $this->request->getVar('txtPhonenumber'),
            'city' => $this->request->getVar('txtCity'),   
        ];
            $save = $model->insert($data);
            return redirect()->to( base_url('customer') );
    }
    
    public function edit($id = null)
    {
        $model = new CustomerModel();
        
        $data['customer'] = $model->where('id', $id)->first();
        
        return view('edit', $data);    
    }
    
    public function update()
    {
        helper(['form', 'url']);
        
        $model = new CustomerModel();
        
        $id = $this->request->getVar('id');
        
        $data = [
            'name' => $this->request->getVar('txtName'),
            'surname' => $this->request->getVar('txtSurname'),
            'email' => $this->request->getVar('txtEmail'),
            'username' => $this->request->getVar('txtUsername'),
            'password' => $this->request->getVar('txtPassword'),
            'address' => $this->request->getVar('txtAddress'),
            'phonenumber' => $this->request->getVar('txtPhonenumber'),
            'city' => $this->request->getVar('txtCity'),   
        ];
            $save = $model->update($id,$data);
            return redirect()->to( base_url('customer') );
    }
    
    public function delete($id = null){
        $model = new CustomerModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to( base_url('customer'));
    }
            
}


?>
