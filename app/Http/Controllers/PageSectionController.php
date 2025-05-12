<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use Illuminate\Http\Request;

class PageSectionController extends Controller
{
    /**
     * Get sections for a specific page
     */
    public function getSections($pageName)
    {
        // Ensure default sections exist
        PageSection::ensureDefaultSections($pageName);

        // Retrieve sections
        $sections = PageSection::getPageSections($pageName);

        return response()->json($sections);
    }

    /**
     * Update a specific section
     */
    public function updateSection(Request $request, $pageName, $sectionKey)
    {
        $validatedData = $request->validate([
            'content' => 'nullable|array',
            'settings' => 'nullable|array',
            'is_active' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $section = PageSection::updateSection($pageName, $sectionKey, $validatedData);

        return response()->json($section);
    }
}