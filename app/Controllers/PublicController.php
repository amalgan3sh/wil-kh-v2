<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\HTTP\ResponseInterface;

class PublicController extends BaseController
{
    protected $RegistrationModel;
    protected $cache;
    protected $useCache;
    protected $cacheTime;

    public function __construct() {
        $this->RegistrationModel = new RegistrationModel();
        $this->cache = \Config\Services::cache(); // Load the cache service
        $this->useCache = getenv('CI_ENVIRONMENT') === 'production'; // Only use cache in production
        $this->cacheTime = getenv('CI_CACHE_TIME') ? (int)getenv('CI_CACHE_TIME') : 600; // Cache time in seconds (10 minutes)
    }
    
    public function index(): string
    {
        return $this->renderView('public_index_view', [
            'public/public_header',
            'public/index',
            'public/public_footer',
        ]);
    }



    /**
     * Renders content from cache if available, otherwise generates and caches it.
     *
     * @param string $cacheKey The cache key to use.
     * @param array $views An array of view names to be concatenated.
     * @return string The cached or generated content.
     */
    private function renderCache(string $cacheKey, callable $contentGenerator): string
    {
        if ($this->useCache) {
            $cachedContent = $this->cache->get($cacheKey);

            if ($cachedContent === null) {
                // Cache miss, generate the content
                $cachedContent = $contentGenerator();
                // Save the content to the cache
                $this->cache->save($cacheKey, $cachedContent, $this->cacheTime);
            }

            return $cachedContent;
        } else {
            // Cache disabled, generate the content directly
            return $contentGenerator();
        }
    }

    /**
     * Renders a series of views and caches the result.
     *
     * @param string $cacheKey The cache key to use.
     * @param array $views An array of view names to be concatenated.
     * @return string The cached or generated content.
     */
    private function renderView(string $cacheKey, array $views): string
    {
        return $this->renderCache($cacheKey, function() use ($views) {
            $content = '';
            foreach ($views as $view) {
                $content .= view($view);
            }
            return $content;
        });
    }
}
