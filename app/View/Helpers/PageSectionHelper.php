<?php

namespace App\View\Helpers;

use App\Models\PageSection;
use Illuminate\Support\Facades\Cache;

class PageSectionHelper
{
    /**
     * Get a page section by page name and section key
     * 
     * @param string $pageName
     * @param string $sectionKey
     * @param int $cacheDuration Cache duration in seconds
     * @return mixed
     */
    public static function getSection($pageName, $sectionKey, $cacheDuration = 60)
    {
        $cacheKey = "page_section:{$pageName}:{$sectionKey}";

        return Cache::remember($cacheKey, $cacheDuration, function () use ($pageName, $sectionKey) {
            // Find the section directly (without going through another model method)
            $section = PageSection::where('page_name', $pageName)
                ->where('section_key', $sectionKey)
                ->where('is_active', true)
                ->first();
                
            // Return null if no section found
            if (!$section) {
                return null;
            }
            
            // Keep the original model structure but with safe serialization
            $result = new \stdClass();
            $result->id = $section->id;
            $result->page_name = $section->page_name;
            $result->section_key = $section->section_key;
            
            // Important: content and settings need to be arrays, not objects
            $result->content = $section->content;
            $result->settings = $section->settings;
            
            $result->is_active = (bool)$section->is_active;
            $result->order = (int)$section->order;
            
            // Convert dates to strings to avoid serialization issues
            $result->created_at = $section->created_at ? $section->created_at->toDateTimeString() : null;
            $result->updated_at = $section->updated_at ? $section->updated_at->toDateTimeString() : null;
            
            return $result;
        });
    }
    
    /**
     * Get all sections for a page
     * 
     * @param string $pageName
     * @param int $cacheDuration Cache duration in seconds
     * @return array
     */
    public static function getAllSections($pageName, $cacheDuration = 60)
    {
        $cacheKey = "page_sections:{$pageName}";
        
        return Cache::remember($cacheKey, $cacheDuration, function () use ($pageName) {
            $sections = PageSection::where('page_name', $pageName)
                ->where('is_active', true)
                ->orderBy('order')
                ->get();
                
            if ($sections->isEmpty()) {
                return [];
            }
            
            // Create array of stdClass objects with proper array structure for content and settings
            $result = [];
            foreach ($sections as $section) {
                $sectionObj = new \stdClass();
                $sectionObj->id = $section->id;
                $sectionObj->page_name = $section->page_name;
                $sectionObj->section_key = $section->section_key;
                
                // Important: content and settings need to be arrays, not objects
                $sectionObj->content = $section->content;
                $sectionObj->settings = $section->settings;
                
                $sectionObj->is_active = (bool)$section->is_active;
                $sectionObj->order = (int)$section->order;
                
                // Convert dates to strings to avoid serialization issues
                $sectionObj->created_at = $section->created_at ? $section->created_at->toDateTimeString() : null;
                $sectionObj->updated_at = $section->updated_at ? $section->updated_at->toDateTimeString() : null;
                
                $result[] = $sectionObj;
            }
            
            return $result;
        });
    }
    
    /**
     * Clear the cache for a specific section
     * 
     * @param string $pageName
     * @param string $sectionKey
     * @return void
     */
    public static function clearSectionCache($pageName, $sectionKey = null)
    {
        if ($sectionKey) {
            Cache::forget("page_section:{$pageName}:{$sectionKey}");
        } else {
            Cache::forget("page_sections:{$pageName}");
            
            // Also clear individual section caches
            $sections = PageSection::where('page_name', $pageName)->get();
            foreach ($sections as $section) {
                Cache::forget("page_section:{$pageName}:{$section->section_key}");
            }
        }
    }
}