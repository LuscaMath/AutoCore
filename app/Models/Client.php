<?php

namespace App\Models;

use App\Enums\DocumentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected function  casts(): array
    {
        return [
            'birth_date' => 'date',
            'document_type' => DocumentType::class,
        ];
    }
    protected $fillable = [
        'name', 
        'document', 
        'document_type', 
        'email', 
        'phone', 
        'birth_date', 
        'zip_code', 
        'street', 
        'number', 
        'complement', 
        'neighborhood', 
        'city', 
        'state', 
        'notes'
    ];
}
