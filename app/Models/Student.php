<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Departement;

class Student extends Model
{
    protected $fillable = [
        'nom',
        'departement_id',
        'email',
        'telephone'
    ];

   public function departement(): BelongsTo{
    return $this->belongsTo(Departement::class);
   }
}
