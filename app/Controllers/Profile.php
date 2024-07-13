<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\UserModel;


class Profile extends BaseController
{
    public function __construct()
    {
        $this->MUser = new UserModel();
        $this->MService = new ServiceModel();
    }
    public function index()
    {
        $userId = session()->get('user_id');
        $user = $this->MUser->find($userId);
        $orders = $this->MService->where('user_id', $userId)
            ->orderBy('date_created', 'DESC')
            ->findAll();

        $data = [
            'title' => 'Profile',
            'footer' => true,
            'user' => $user,
            'orders' => $orders
        ];

        return view('profile/index', $data);
    }

    public function update()
    {
        $field = $this->request->getPost('field');
        $value = $this->request->getPost('value');

        $userId = session()->get('user_id');

        // Validasi input
        if ($field && $value && in_array($field, ['username', 'email', 'fullname'])) {
            $this->MUser->update($userId, [$field => $value]);
            session()->setFlashdata('success', 'Data updated successfully.');
            return $this->response->setJSON(['status' => 'success']);
        } else {
            session()->setFlashdata('error', 'Failed to update data, please try again.');
            return $this->response->setJSON(['status' => 'error']);
        }
    }
    public function changePassword()
    {
        $userId = session()->get('user_id');
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if (strlen($newPassword) < 6) {
            session()->setFlashdata('error', 'New Password must be at least 6 characters long.');
            return $this->response->setJSON(['status' => 'error']);
        }

        if ($newPassword !== $confirmPassword) {
            session()->setFlashdata('error', 'New Password and Confirm Password do not match.');
            return $this->response->setJSON(['status' => 'error']);
        }

        // Ambil user berdasarkan ID
        $user = $this->MUser->find($userId);

        // Periksa apakah user ditemukan
        if (!$user) {
            session()->setFlashdata('error', 'User not found.');
            return $this->response->setJSON(['status' => 'error']);
        }

        // Periksa apakah password saat ini cocok
        if (password_verify($currentPassword, $user['password'])) {
            // Update password
            $this->MUser->update($userId, ['password' => password_hash($newPassword, PASSWORD_DEFAULT)]);
            session()->setFlashdata('success', 'Password changed successfully.');
            return $this->response->setJSON(['status' => 'success']);
        } else {
            session()->setFlashdata('error', 'Current password is incorrect.');
            return $this->response->setJSON(['status' => 'error']);
        }
    }

    public function delete($id)
    {
        if ($this->MService->delete($id)) {
            session()->setFlashdata('success', 'Order deleted successfully.');
            return $this->response->setJSON(['status' => 'success']);
        } else {
            session()->setFlashdata('error', 'Failed to delete order.');
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
