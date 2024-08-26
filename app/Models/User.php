<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // ข้ามการใช้ฐานข้อมูล
    protected $fillable = ['username', 'password'];

    public static function findByUsername($username)
    {
        $users = [
            'user1' => '123456',
            'user2' => '123456',
        ];

        if (isset($users[$username])) {
            return new self([
                'username' => $username,
                'password' => $users[$username],
            ]);
        }

        return null;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
