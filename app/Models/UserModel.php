<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'fname',
        'lname',
        'tel_no',
        'email',
        'password',
    ];

    public function processRegister($userData)
    {
        return $this->insert($userData);
    }

    public function login($email, $password)
{
    // Retrieve the user based on the provided email
    $user = $this->where('email', $email)->first();

    if ($user) {
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password matches, return the user data
            return $user;
        }
    }

    // Invalid email or password
    return null;
}

}
