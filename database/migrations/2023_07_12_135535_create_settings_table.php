<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });


        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Web Sederhana',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_lcation',
            'label' => 'Alamat Kanor',
            'value' => 'Purwakarta,WestJava , Indeonesia',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_youtub',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/?gl=ID',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_IG',
            'label' => 'intagram',
            'value' => 'https://www.instagram.com/?gl=ID',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_twitter',
            'label' => 'TWitter',
            'value' => 'https://www.twitter.com/?gl=ID',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://www.facebook.com/?gl=ID',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Webiste With Filament',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
