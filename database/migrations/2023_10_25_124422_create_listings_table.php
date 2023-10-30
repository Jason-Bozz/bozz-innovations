<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     
    //     Schema::create('listings', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('user_id')->constrained()->onDelete('cascade');
    //         $table->string('title');
    //         $table->string('logo')->nullable();
    //         $table->string('tags');
    //         $table->string('company');
    //         $table->string('location');
    //         $table->string('email');
    //         $table->string('website');
    //         $table->longText('description');
    //         $table->timestamps();
    //     });
    // }

    public function up(): void
    {
        // protected $fillable = ['title', 'img', 'brand', 'body_wood', 'neck_wood', 'description', 'tags']
        // title is the name of the guitar
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('img')->nullable();            
            $table->string('brand');
            $table->string('body_wood');
            $table->string('neck_wood');
            $table->longText('description');
            $table->string('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
 