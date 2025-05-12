<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name', 
        'section_key', 
        'content', 
        'settings', 
        'is_active', 
        'order'
    ];

    protected $casts = [
        'content' => 'array',
        'settings' => 'array',
        'is_active' => 'boolean'
    ];

    /**
     * Scope to find a section by page and key
     */
    public function scopeFindSection($query, $pageName, $sectionKey)
    {
        return $query->where('page_name', $pageName)
                     ->where('section_key', $sectionKey)
                     ->where('is_active', true)
                     ->first();
    }

    /**
     * Get all active sections for a specific page
     */
    public function scopeGetPageSections($query, $pageName)
    {
        return $query->where('page_name', $pageName)
                     ->where('is_active', true)
                     ->orderBy('order')
                     ->get();
    }

    /**
     * Create or update a section
     */
    public static function updateSection($pageName, $sectionKey, $data)
    {
        return self::updateOrCreate(
            [
                'page_name' => $pageName,
                'section_key' => $sectionKey
            ],
            $data
        );
    }

    /**
     * Prepare default sections if not exists
     */
    public static function ensureDefaultSections($pageName)
    {
        $defaultSections = [
            'hero' => [
                'content' => [
                    'title' => 'Welcome to Our Website',
                    'subtitle' => 'Discover Amazing Features',
                    'slides' => [
                        [
                            'image' => '/images/default-hero.jpg',
                            'alt' => 'Default Hero Image'
                        ]
                    ],
                    'buttons' => [
                        [
                            'text' => 'Get Started',
                            'url' => '/get-started',
                            'style' => 'primary'
                        ]
                    ]
                ],
                'settings' => [
                    'background_color' => '#f8f9fa',
                    'text_color' => '#333333'
                ],
                'order' => 1
            ]
            // Add more default sections as needed
        ];

        foreach ($defaultSections as $sectionKey => $sectionData) {
            // Only create if section doesn't exist
            if (!self::findSection($pageName, $sectionKey)) {
                self::create([
                    'page_name' => $pageName,
                    'section_key' => $sectionKey,
                    'content' => $sectionData['content'],
                    'settings' => $sectionData['settings'],
                    'order' => $sectionData['order'] ?? 0,
                    'is_active' => true
                ]);
            }
        }
    }
}