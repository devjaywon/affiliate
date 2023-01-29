<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\Product;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'surname',
        'phone',
        'email',
        'password',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        return $this->firstname .' '.$this->middlename.' '.$this->surname;
    }
    
    public function getReferralLinkAttribute() {
        return route('register', ['ref' => base64_encode($this->id)]);
    }    

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function referer_user() {
        return $this->belongsTo(User::class, 'referer_user_id');
    }

    public function referred_users() {
        return $this->hasMany(User::class, 'referer_user_id');
    }


    public function uploadProfilePicture(UploadedFile $profilePicture): void
    {
        $this->update([
            'image' => $profilePicture->storePublicly('profile', ['disk' => 'public'])
        ]);
    }

   

}


