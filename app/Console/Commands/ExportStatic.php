<?php

namespace App\Console\Commands;

use App\Support\Portfolio;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class ExportStatic extends Command
{
    protected $signature = 'portfolio:export {--out=dist : Folder to write the static site to}';

    protected $description = 'Export the portfolio as plain HTML files for Netlify or any static host';

    public function handle(): int
    {
        // Render with a placeholder host, then strip it so every link becomes root-relative (/css/..., /projects/...).
        $fake = 'http://portfolio.invalid';
        URL::forceRootUrl($fake);

        $out = base_path($this->option('out'));
        File::deleteDirectory($out);
        File::ensureDirectoryExists($out);

        foreach (['css', 'js', 'images', 'documents', 'resume'] as $dir) {
            if (File::isDirectory(public_path($dir))) {
                File::copyDirectory(public_path($dir), $out . '/' . $dir);
            }
        }

        $p = Portfolio::data();

        $this->write($out . '/index.html', view('portfolio', ['p' => $p])->render(), $fake);

        foreach ($p['projects'] as $project) {
            $html = view('projects.show', ['p' => $p, 'project' => $project])->render();
            $this->write($out . '/projects/' . $project['slug'] . '/index.html', $html, $fake);
        }

        // Makes /projects/<slug> work on Netlify even without "pretty URLs"
        File::put($out . '/_redirects', "/projects/:slug  /projects/:slug/index.html  200\n");

        $this->info('Static site exported to: ' . $out);

        return self::SUCCESS;
    }

    protected function write(string $path, string $html, string $fake): void
    {
        File::ensureDirectoryExists(dirname($path));
        // route('home') has no trailing slash, so "<host>#work" and href="<host>" would become "#work" and "".
        $html = str_replace([$fake . '#', 'href="' . $fake . '"'], ['/#', 'href="/"'], $html);

        File::put($path, str_replace($fake, '', $html));
    }
}