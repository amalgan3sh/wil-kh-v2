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
        return $this->renderView('team_view', [
            'public/public_header',
            'public/team',
            'public/public_footer',
        ]);
    }

    public function ContactUs(): string
    {
        return $this->renderView('contact_us_view', [
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
        return $this->renderView('water_product_view', [
            'public/public_header',
            'public/water_product',
            'public/public_footer',
        ]);
    }

    public function FoodProduct(): string
    {
        return $this->renderView('food_product_view', [
            'public/public_header',
            'public/food_product',
            'public/public_footer',
        ]);
    }

    public function EnvironmentalProduct(): string
    {
        return $this->renderView('environmental_product_view', [
            'public/public_header',
            'public/environmental_product',
            'public/public_footer',
        ]);
    }

    public function ArsenicResearch(): string
    {
        return $this->renderView('arsenic_research_view', [
            'public/public_header',
            'public/arsenic_research',
            'public/public_footer',
        ]);
    }

    public function ShortCourseTraining(): string
    {
        return $this->renderView('short_course_training_view', [
            'public/public_header',
            'public/short_course_training',
            'public/public_footer',
        ]);
    }

    public function Laboratory(): string
    {
        return $this->renderView('laboratory_view', [
            'public/public_header',
            'public/laboratory',
            'public/public_footer',
        ]);
    }
    public function WaterQualityTest(): string
    {
        return $this->renderView('water_quality_test_view', [
            'public/public_header',
            'public/water_quality_test',
            'public/public_footer',
        ]);
    }
    public function FoodQualityTest(): string
    {
        return $this->renderView('food_quality_test_view', [
            'public/public_header',
            'public/food_quality_test',
            'public/public_footer',
        ]);
    }

    public function SoilQualityTest(): string
    {
        return $this->renderView('soil_quality_test_view', [
            'public/public_header',
            'public/soil_quality_test',
            'public/public_footer',
        ]);
    }

    public function ClimateSoilAndFarms(): string
    {
        return $this->renderView('climate_soil_and_farms_view', [
            'public/public_header',
            'public/climate_soil_and_farms',
            'public/public_footer',
        ]);
    }

    public function RiskAssessment(): string
    {
        return $this->renderView('risk_assessment_view', [
            'public/public_header',
            'public/risk_assessment',
            'public/public_footer',
        ]);
    }
    
    public function JournalArticle(): string
    {
        return $this->renderView('journal_article_view', [
            'public/public_header',
            'public/journal_article',
            'public/public_footer',
        ]);
    }

    public function Conference(): string
    {
        return $this->renderView('conference_view', [
            'public/public_header',
            'public/conference',
            'public/public_footer',
        ]);
    }

    public function WILNewsletter(): string
    {
        return $this->renderView('wil_newsletter_view', [
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

    public function DrinkingWaterTestingPackage(): string
    {
        return $this->renderView('drinking_water_testing_package_view', [
            'public/public_header',
            'public/drinking_water_testing_package',
            'public/public_footer',
        ]);
    }

    public function WastewaterTestInformation(): string
    {
        return $this->renderView('wastewater_test_information_view', [
            'public/public_header',
            'public/wastewater_test_information',
            'public/public_footer',
        ]);
    }

    public function SwimmingPoolWaterTest(): string
    {
        return $this->renderView('swimming_pool_water_test_view', [
            'public/public_header',
            'public/swimming_pool_water_test',
            'public/public_footer',
        ]);
    }

    public function IndustrialWaterTest(): string
    {
        return $this->renderView('industrial_water_testing_view', [
            'public/public_header',
            'public/industrial_water_testing',
            'public/public_footer',
        ]);
    }

    public function IrrigationWaterTest(): string
    {
        return $this->renderView('irrigation_water_test_view', [
            'public/public_header',
            'public/irrigation_water_test',
            'public/public_footer',
        ]);
    }

    public function AllWaterTestInformation(): string
    {
        return $this->renderView('all_water_test_information_view', [
            'public/public_header',
            'public/all_water_test_information',
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

    public function GroundwaterSurvey(): string
    {
        return $this->renderView('groundwater_survey_view', [
            'public/public_header',
            'public/groundwater_survey',
            'public/public_footer',
        ]);
    }

    public function FoodQualityTestingPackage(): string
    {
        return $this->renderView('food_quality_testing_package_view', [
            'public/public_header',
            'public/food_quality_testing_package',
            'public/public_footer',
        ]);
    }

    public function ResearchAndProjectConsultation(): string
    {
        return $this->renderView('research_and_project_consultation_view', [
            'public/public_header',
            'public/research_and_project_consultation',
            'public/public_footer',
        ]);
    }

    public function BlogOne(): string
    {
        return $this->renderView('blog_one_view', [
            'public/public_header',
            'public/blog_one',
            'public/public_footer',
        ]);
    }

    public function BlogTwo(): string
    {
        return $this->renderView('blog_two_view', [
            'public/public_header',
            'public/blog_two',
            'public/public_footer',
        ]);
    }

    public function BlogThree(): string
    {
        return $this->renderView('blog_three_view', [
            'public/public_header',
            'public/blog_three',
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
