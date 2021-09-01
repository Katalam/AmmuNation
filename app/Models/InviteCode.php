<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * The invite_code length
 */
define('_CODE_LENGTH', 10);

class InviteCode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_by',
        'used_by',
        'code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'used_by');
    }

    public function generateCode()
    {
        $code = Str::random(_CODE_LENGTH);
        while (InviteCode::where('code', '=', $code)->first() != null){
            $code = Str::random(_CODE_LENGTH);
        }
        $this->code = $code;
        $this->save();
    }
}
