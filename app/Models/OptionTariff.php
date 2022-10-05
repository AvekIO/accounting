<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionTariff extends Model
{
    use HasFactory;

    public const UPDATED_AT = null;

    protected $table = 'option_tariff';
}
