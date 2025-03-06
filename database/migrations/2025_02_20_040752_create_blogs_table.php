<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('outer_image');
            $table->string('inner_image');
            $table->string('title');
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('author');
            $table->date('date_of_post');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void {
        Schema::dropIfExists('blogs');
    }
};
