<?php

namespace App\Repositories\Auth\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes, InteractsWithMedia;

    protected $guarded = ['avatar'];

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
        'password' => 'hashed',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile()
            ->useDisk(env('FILESYSTEM_DISK') ?? 'public');
    }

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($this->getFirstMediaUrl('avatar') != '' ? $this->getFirstMediaUrl('avatar') : asset('assets/avatar.png')),
        );
    }

    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => (Hash::make($value)),
        );
    }

    public function latestOTPToken(): MorphOne
    {
        return $this->morphOne(AuthenticatableOTP::class,'authenticatable')->latestOfMany();
    }

    public function OTPTokens(): MorphMany
    {
        return $this->morphMany(AuthenticatableOTP::class,'authenticatable')->whereActive(true)->latest();
    }

    public function isActive(): bool
    {
        return $this->account_status ?? 1;
    }
}
