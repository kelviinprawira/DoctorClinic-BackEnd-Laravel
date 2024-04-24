<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id', 'day', 'time', 'status', 'note'
    ];

    public static function create(array $array)
    {
    }


    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
