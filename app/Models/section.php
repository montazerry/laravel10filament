<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class section extends Model
{
    use HasFactory;
    protected $fillable = ['title','thumbnail','content','post_as'];

    // function untuk menghapus data upload image yang lama dan mengganti data image yang baru
    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            // jika  is dirti = ada data yang masuk , getoriginal data yg lama, != sudah ada isinya kemudian panggil storage dan hapus data lamanya
            if ($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') != null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
    
}
