<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ovoke Omole',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => null,
        ]);
        GeneralSetting::create([
            'site_name' => 'Plutus Technology',
            'email' => 'info@plutustechnology.com',
            'description' => 'Plutus Technology is a leading technology company specializing in software development, IT consulting, and digital transformation services.',
            'alt_email' => 'support@plutustechnology.com',
            'address' => '123 Main Street, Tech City',
            'alt_address' => '456 Secondary Street, Tech City',
            'phone' => '+1234567890',
            'alt_phone' => '+0987654321',
            'facebook' => 'https://facebook.com/plutustechnology',
            'instagram' => 'https://instagram.com/plutustechnology',
            'twitter' => 'https://twitter.com/plutustechnology',
            'linkedin' => 'https://linkedin.com/company/plutustechnology',
        ]);
        $this->call([
            // Other seeders...
            SectionSeeder::class,
            ServiceSeeder::class
        ]);
    }
}
