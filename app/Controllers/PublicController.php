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

    public function aboutUs(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/about_us',
            'public/public_footer',
        ]);
    }

    public function Team(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/team',
            'public/public_footer',
        ]);
    }

    public function ContactUs(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/contact_us',
            'public/public_footer',
        ]);
    }

    public function OngoingProjects(): string
    {
        return $this->renderView('ongoing_projects_view', [
            'public/public_header',
            'public/ongoing_projects',
            'public/public_footer',
        ]);
    }

    public function WaterProduct(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/water_product',
            'public/public_footer',
        ]);
    }

    public function FoodProduct(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/food_product',
            'public/public_footer',
        ]);
    }

    public function EnvironmentalProduct(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/environmental_product',
            'public/public_footer',
        ]);
    }

    public function Consultation(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/consultation',
            'public/public_footer',
        ]);
    }

    public function ShortCourseTraining(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/short_course_training',
            'public/public_footer',
        ]);
    }

    public function Laboratory(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/laboratory',
            'public/public_footer',
        ]);
    }
    public function WaterQualityTest(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/water_quality_test',
            'public/public_footer',
        ]);
    }
    public function FoodQualityTest(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/food_quality_test',
            'public/public_footer',
        ]);
    }

    public function SoilQualityTest(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/soil_quality_test',
            'public/public_footer',
        ]);
    }

    public function ArsenicResearch(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/arsenic_research',
            'public/public_footer',
        ]);
    }

    public function RiskAssessment(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/risk_assessment',
            'public/public_footer',
        ]);
    }
    
    public function JournalArticle(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/journal_article',
            'public/public_footer',
        ]);
    }

    public function Conference(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/conference',
            'public/public_footer',
        ]);
    }

    public function WILNewsletter(): string
    {
        return $this->renderView('about_us_view', [
            'public/public_header',
            'public/wil_newsletter',
            'public/public_footer',
        ]);
    }
    
    public function OurVision(): string
    {
        return $this->renderView('our_vision_view', [
            'public/public_header',
            'public/our_vision',
            'public/public_footer',
        ]);
    }

    public function WaterTestingPackage(): string
    {
        return $this->renderView('water_testing_package_view', [
            'public/public_header',
            'public/water_testing_package',
            'public/public_footer',
        ]);
    }

    public function SoilTestingPackage(): string
    {
        return $this->renderView('soil_testing_package_view', [
            'public/public_header',
            'public/soil_testing_package',
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
