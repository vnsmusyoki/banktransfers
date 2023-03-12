<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    public function accounttypename()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }
}
