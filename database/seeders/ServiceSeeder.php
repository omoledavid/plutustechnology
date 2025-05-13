<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert(values: [
            ['title' => 'Web Development', 'slug' => 'web-development', 'desc' => 'Building and maintaining websites', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Mobile App Development', 'slug' => 'mobile-app-development', 'desc' => 'Creating mobile applications for iOS and Android', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Digital Marketing', 'slug' => 'digital-marketing', 'desc' => 'Promoting brands through digital channels', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Graphic Design', 'slug' => 'graphic-design', 'desc' => 'Designing visual content for branding and marketing', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'SEO Services', 'slug' => 'seo-services', 'desc' => 'Optimizing websites for search engines', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'IT Consulting', 'slug' => 'it-consulting', 'desc' => 'Providing expert advice on IT solutions', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
