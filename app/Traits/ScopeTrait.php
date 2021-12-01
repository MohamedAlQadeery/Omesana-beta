<?php

namespace App\Traits;

trait ScopeTrait
{
    //scopes --------------------------------------
    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });
    }

    // status 1 active 2 disabled
    public function scopeWhenStatus($query, $status)
    {
        return $query->when($status, function ($q) use ($status) {
            return $q->where('status', $status);
        });
    }

    //1 interior 2 exterior
    public function scopeWhenType($query, $type)
    {
        return $query->when($type, function ($q) use ($type) {
            return $q->where('type', $type);
        });
    }

    public function scopeWhenAddress($query, $address)
    {
        return $query->when($address, function ($q) use ($address) {
            return $q->where('address', $address);
        });
    }

    public function scopeWhenEmail($query, $email)
    {
        return $query->when($email, function ($q) use ($email) {
            return $q->where('email', 'like', "%$email%");
        });
    }

    //1 new 2 old
    public function scopeWhenIsRead($query, $is_read)
    {
        return $query->when($is_read, function ($q) use ($is_read) {
            return $q->where('is_read', $is_read);
        });
    }
}