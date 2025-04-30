<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insert the existing banner images from the site
        DB::table('banners')->insert([
            [
                'image' => 'https://th.bing.com/th/id/R.d343136b443ca9810fb04873a294fea8?rik=eX3AWThE9linYw&pid=ImgRaw&r=0',
                'active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'https://th.bing.com/th/id/R.85298e4ffac423a5c97f4352fdd28dc5?rik=baPkqOL2p8fENw&pid=ImgRaw&r=0',
                'active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'https://th.bing.com/th/id/R.a51ea741153816670470a2b2f28a9c44?rik=Q4225SMyhyxqPg&pid=ImgRaw&r=0',
                'active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the inserted banners by their image URLs
        DB::table('banners')
            ->whereIn('image', [
                'https://th.bing.com/th/id/R.d343136b443ca9810fb04873a294fea8?rik=eX3AWThE9linYw&pid=ImgRaw&r=0',
                'https://th.bing.com/th/id/R.85298e4ffac423a5c97f4352fdd28dc5?rik=baPkqOL2p8fENw&pid=ImgRaw&r=0',
                'https://th.bing.com/th/id/R.a51ea741153816670470a2b2f28a9c44?rik=Q4225SMyhyxqPg&pid=ImgRaw&r=0'
            ])
            ->delete();
    }
};