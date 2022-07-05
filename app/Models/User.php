<?php

namespace App\Models;

use App\Traits\Jalali;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Jalali;

    public const ADMIN_ROLE = 'ADMIN';

    public const USER_ROLE = 'USER';

    public const INSTRUCTOR_ROLE = 'INSTRUCTOR';

    public const FELLOW_ROLE = 'FELLOW';

    protected const ROLES_NAME = [
        self::ADMIN_ROLE => 'مدیریت سایت',
        self::USER_ROLE  => 'کاربر',
        self::INSTRUCTOR_ROLE  => 'مدرس',
        self::FELLOW_ROLE  => 'همیار',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'mobile',
        'password',
        'address',
        'bio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function hasAdmin()
    {
        return (bool) ($this->role == self::ADMIN_ROLE);
    }

    public function hasUser()
    {
        return (bool) (! $this->hasAdmin());
    }

    public function getRoleName()
    {
        return self::ROLES_NAME[$this->role] ?? null;
    }

    public function getRoles(): array
    {
        return self::ROLES_NAME;
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'owner_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_id');
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class, 'owner_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'owner_id');
    }

    public function scopeInstructors($query)
    {
        return $query->whereRole(self::INSTRUCTOR_ROLE);
    }

    public function username($login)
    {
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        return [$field => $login];
    }
}
