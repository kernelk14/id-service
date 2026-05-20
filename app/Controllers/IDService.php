<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\IDModel;
 
class IDService extends BaseController
{
    
    public function index()
    {
        $idModel = new IDModel();
        $data['users'] = $idModel->findAll();

        return view('users', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store() {
        $idModel = new IDModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'contact_num' => $this->request->getPost('contact_num'),
            'address' => $this->request->getPost('address'),
            'emergency_person' => $this->request->getPost('emergency_person'),
            'emergency_number' => $this->request->getPost('emergency_number'),
            'attach_id' => $this->request->getPost('attach_id'),
        ];
        $idModel->insert($data);
        return redirect()->to('/')->with('message', 'ID request submitted successfully.');
    }
}
