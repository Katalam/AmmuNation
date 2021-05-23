<?php

use App\Models\InviteCode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInviteCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by_id')->nullable()->constrained('users');
            $table->foreignId('used_by_id')->nullable()->constrained('users');
            $table->string('code');
            $table->timestamps();
        });

        InviteCode::create([
            'created_by_id' => null,
            'used_by_id' => null,
            'code' => 'aaaaa'
        ])->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invite_codes');
    }
}
