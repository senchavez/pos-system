<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',
            'users' => [
                [
                    'username' => 'admin01',
                    'full_name' => 'Andrea Cruz',
                    'role' => 'Administrator',
                ],
                [
                    'username' => 'cashier01',
                    'full_name' => 'Mark Santos',
                    'role' => 'Cashier',
                ],
                [
                    'username' => 'cashier02',
                    'full_name' => 'Bea Reyes',
                    'role' => 'Cashier',
                ],
                [
                    'username' => 'manager01',
                    'full_name' => 'John Garcia',
                    'role' => 'Manager',
                ],
                [
                    'username' => 'staff01',
                    'full_name' => 'Ella Mendoza',
                    'role' => 'Staff',
                ],
            ],
        ];

        return view('users', $data);
    }
}