<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $now = Carbon::now();
        
        $sections = [
            // Home page sections
            [
                'page_name' => 'home',
                'section_key' => 'hero',
                'content' => json_encode([
                    'title' => 'Smart ideas for <span>your</span> brand are here',
                    'subtitle' => 'BOOST YOUR VISIBILITY',
                    'description' => 'Unleash the full potential Benifites of your website and elevate with its online presence with our comprehensive Digital solutions.',
                    'button-url' => 'javascript::',
                    'button-text' => 'Explore Our work',
                    'button-play-url' => 'javascript::',
                    'button-play-text' => 'Play our intro',
                ]),
                'settings' => json_encode([
                    'background_color' => '#f8f9fa',
                    'text_color' => '#212529',
                    'full_width' => true,
                    'padding' => '80px 0',
                ]),
                'is_active' => true,
                'order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_name' => 'home',
                'section_key' => 'about-us',
                'content' => json_encode([
                    'title' => 'Who We Are',
                    'subtitle' => 'We bring our ideas to life every step of the way',
                    'description' => 'At PlustusTechnology, we are passionate about transforming ideas into impactful digital experiences. With a team of innovative thinkers and creative problem-solvers, we deliver tailored marketing solutions that drive growth and engagement.',
                    'image_1' => 'image.jpeg',
                    'image_2' => 'image.jpeg',
                    'data' => [
                        [
                            'title' => 'High Quality',
                            'description' => 'Top-notch products crafted with care',
                            'icon' => 'quality.svg',
                        ],
                        [
                            'title' => 'Affordable',
                            'description' => 'Great value for your money',
                            'icon' => 'price.svg',
                        ],
                    ],
                ]),
                'settings' => json_encode([
                    'background_color' => '#ffffff',
                    'text_color' => '#333333',
                    'columns' => 3,
                    'animation' => 'fade-in',
                ]),
                'is_active' => true,
                'order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_name' => 'home',
                'section_key' => 'services',
                'content' => json_encode([
                    'title' => 'Our Solutions',
                    'subtitle' => 'Our Services, Tailored for <spane>Your Needs</span>',
                    'description' => 'Explore a diverse spectrum of innovative digital agency solutions meticulously crafted to elevate your online visibility.',
                ]),
                'settings' => json_encode([
                    'background_color' => '#f0f4f8',
                    'text_color' => '#2d3748',
                    'auto_scroll' => true,
                    'scroll_speed' => 5000,
                ]),
                'is_active' => true,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_name' => 'home',
                'section_key' => 'portfolio',
                'content' => json_encode([
                    'title' => 'Our Portfolio',
                    'subtitle' => 'Our Featured Work',
                    'description' => 'We have an amazing variety of services to offer so',
                ]),
                'settings' => json_encode([
                    'background_color' => '#f0f4f8',
                    'text_color' => '#2d3748',
                    'auto_scroll' => true,
                    'scroll_speed' => 5000,
                ]),
                'is_active' => true,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_name' => 'home',
                'section_key' => 'testimonies',
                'content' => json_encode([
                    'title' => 'Client’s Testimonial',
                    'subtitle' => 'Real Stories from People What We Do',
                    'description' => 'We cherish the trust our clients place in us. Through their testimonials, see how our insurance solutions have positively impacted their lives. From easy claims to personalized service, our clients share how we help them.',
                    'button-url' => 'javascript::',
                    'button-text' => '',
                    'data' => [
                        [
                            'name' => 'Mr. Danel Scott',
                            'position' => 'CEO at SoftNic',
                            'testimony' => 'PlustusTechnology has been a game-changer for our business. Their innovative solutions and exceptional service have exceeded our expectations.',
                            'image' => ''
                        ],
                        [
                            'name' => 'Ms. Emily Carter',
                            'position' => 'Marketing Manager at BrightTech',
                            'testimony' => 'Working with PlustusTechnology has been a pleasure. Their team is professional, creative, and always delivers on time.',
                            'image' => ''
                        ],
                        [
                            'name' => 'Mr. John Doe',
                            'position' => 'Founder of GreenLeaf',
                            'testimony' => 'The team at PlustusTechnology helped us achieve our goals with their outstanding digital marketing strategies.',
                            'image' => ''
                        ],
                        [
                            'name' => 'Ms. Sarah Johnson',
                            'position' => 'CTO at InnovateNow',
                            'testimony' => 'Their expertise in technology and marketing is unmatched. We highly recommend PlustusTechnology for any business.',
                            'image' => ''
                        ],
                        [
                            'name' => 'Mr. Robert Brown',
                            'position' => 'Director at FutureVision',
                            'testimony' => 'PlustusTechnology transformed our online presence and helped us reach a wider audience. Truly exceptional service!',
                            'image' => ''
                        ]
                    ],
                ]),
                'settings' => json_encode([
                    'background_color' => '#f0f4f8',
                    'text_color' => '#2d3748',
                    'auto_scroll' => true,
                    'scroll_speed' => 5000,
                ]),
                'is_active' => true,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'page_name' => 'about',
                'section_key' => 'blog',
                'content' => json_encode([
                    'title' => 'Our News & Blogs',
                    'subtitle' => 'Innovative Insights for Solutions & Blogs',
                    'description' => 'At our digital agency, we focus on innovative strategies that elevate brands team excels in creating engaging content, dynamic web design, and targeted marketing campaigns.',
                ]),
                'settings' => json_encode([
                    'background_color' => '#f0f4f8',
                    'text_color' => '#2d3748',
                    'auto_scroll' => true,
                    'scroll_speed' => 5000,
                ]),
                'is_active' => true,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Insert all sections
        DB::table('page_sections')->insert($sections);
    }
}
