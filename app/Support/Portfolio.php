<?php

namespace App\Support;

use Illuminate\Support\Str;

/**
 * Loads config/portfolio.php and prepares it for the views.
 * Any file (image, PDF, resume) that is not found in /public becomes null,
 * so the page hides that part instead of showing a broken image or link.
 */
class Portfolio
{
    public static function data(): array
    {
        $p = config('portfolio');

        $p['photo'] = self::file($p['photo'] ?? null);
        $p['links'] = ($p['links'] ?? []) + ['github' => null, 'linkedin' => null, 'resume' => null];
        $p['links']['resume'] = self::file($p['links']['resume']);
        $p['experience'] = $p['experience'] ?? [];
        $p['projects'] = array_map([self::class, 'project'], $p['projects'] ?? []);

        return $p;
    }

    public static function find(string $slug): ?array
    {
        foreach (self::data()['projects'] as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    protected static function project(array $x): array
    {
        $x += [
            'title' => 'Untitled project', 'slug' => null, 'description' => '', 'full_description' => '',
            'category' => null, 'date' => null, 'role' => null, 'image' => null, 'gallery' => [],
            'features' => [], 'technologies' => [], 'goal' => null, 'challenges' => null,
            'solution' => null, 'results' => null, 'url' => null, 'github' => null, 'pdf' => null,
        ];

        $x['slug'] = $x['slug'] ?: Str::slug($x['title']);
        $x['image'] = self::file($x['image']);
        $x['pdf'] = self::file($x['pdf']);
        $x['gallery'] = array_values(array_filter(array_map([self::class, 'file'], $x['gallery'] ?? [])));

        return $x;
    }

    /** Returns a full URL if the file exists in /public (or is already a URL), otherwise null. */
    protected static function file(?string $path): ?string
    {
        if (!$path) {
            return null;
        }
        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        return file_exists(public_path($path)) ? asset($path) : null;
    }
}
