<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class Service extends BaseController
{
    public function it_consulting()
    {
        $data = [
            'title' => 'It Consulting',
            'footer' => true
        ];
        return view('services/it_consulting', $data);
    }

    public function cloud_solutions()
    {
        $data = [
            'title' => 'Cloud Solutions',
            'footer' => true
        ];
        return view('services/cloud_solutions', $data);
    }

    public function cyber_security()
    {
        $data = [
            'title' => 'Cyber Security',
            'footer' => true
        ];
        return view('services/cyber_security', $data);
    }

    public function saveData()
    {
        $data = $this->request->getPost();

        $orderData = [
            'id' => $this->_generateRandomId(),
            'user_id' => session()->get('user_id'),
            'fullname' => $data['input-name'],
            'email' => $data['input-email'],
            'company' => $data['input-company'],
            'phone' => $data['input-phone'],
            'service' => $data['input-service'],
            'message' => $data['input-message'],
            'date_created' => time()
        ];

        $serviceModel = new ServiceModel();
        $serviceModel->insert($orderData);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Form submitted successfully']);
    }

    private function _generateRandomId()
    {
        return 'SV' . rand(999, 9999) . '-' . rand(999, 9999);
    }
}
