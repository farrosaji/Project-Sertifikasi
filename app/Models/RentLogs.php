<?php

namespace App\Models;

use App\Models\sportsequip;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RentLogs extends Model
{
    use HasFactory;

    //define table in DB 
    protected $table = 'rent_logs';

    protected $fillable = [
        'user_id',
        'sportequip_id',
        'rent_date',
        'return_date',
    ];

    /**
     * Get the user that owns the RentLogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the user that owns the RentLogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sportsequip(): BelongsTo
    {
        return $this->belongsTo(sportsequip::class, 'sportequip_id', 'id');
    }
}
