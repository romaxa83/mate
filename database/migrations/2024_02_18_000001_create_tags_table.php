<?php

use App\Models\Users\User;
use App\Modules\Tag\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(Tag::TABLE, function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('type', 50);
            $table->string('color', 20)->nullable();

            $table->foreignId('user_id')->nullable()
                ->references('id')
                ->on(User::TABLE)
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Tag::TABLE);
    }
};
