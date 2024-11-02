<?php

namespace App\Models;

use Database\Factories\SomeCustomFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MyCustomModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'custom_model';
    protected $primaryKey = 'some_custom_id';

    protected static function newFactory() : Factory
    {
        return SomeCustomFactory::new();
    }
}
