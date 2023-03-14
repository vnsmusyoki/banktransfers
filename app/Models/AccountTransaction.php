<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTransaction extends Model
{
    use HasFactory;

    public function acctaccount()
    {
        return $this->belongsTo(UserAccount::class, 'account_id');
    }
    public function recipientaccount()
    {
        return $this->belongsTo(UserRecipient::class, 'recipient_id');
    }
}
