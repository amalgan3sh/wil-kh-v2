<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('about_us', 'PublicController::aboutUs');
$routes->get('our_team', 'PublicController::Team');
$routes->get('contact_us', 'PublicController::ContactUs');
$routes->get('ongoing_projects', 'PublicController::OngoingProjects');
$routes->get('water_product', 'PublicController::WaterProduct');
$routes->get('food_product', 'PublicController::FoodProduct');
$routes->get('environmental_product', 'PublicController::EnvironmentalProduct');
$routes->get('arsenic_research', 'PublicController::ArsenicResearch');
$routes->get('short_course_training', 'PublicController::ShortCourseTraining');
$routes->get('laboratory', 'PublicController::Laboratory');
$routes->get('water_quality_test', 'PublicController::WaterQualityTest');
$routes->get('food_quality_test', 'PublicController::FoodQualityTest');
$routes->get('soil_quality_test', 'PublicController::SoilQualityTest');
$routes->get('climate_soil_and_farms', 'PublicController::ClimateSoilAndFarms');
$routes->get('risk_assessment', 'PublicController::RiskAssessment');
$routes->get('journal_article', 'PublicController::JournalArticle');
$routes->get('conference', 'PublicController::Conference');
$routes->get('wil_newsletter', 'PublicController::WILNewsletter');
$routes->get('our_vision', 'PublicController::OurVision');
$routes->get('drinking_water_testing_package', 'PublicController::DrinkingWaterTestingPackage');
$routes->get('wastewater_test_information', 'PublicController::WastewaterTestInformation');
$routes->get('swimming_pool_water_test', 'PublicController::SwimmingPoolWaterTest');
$routes->get('industrial_water_testing', 'PublicController::IndustrialWaterTest');
$routes->get('irrigation_water_test', 'PublicController::IrrigationWaterTest');
$routes->get('all_water_test_information', 'PublicController::AllWaterTestInformation');
$routes->get('soil_testing_package', 'PublicController::SoilTestingPackage');
$routes->get('groundwater_survey', 'PublicController::GroundwaterSurvey');
$routes->get('food_quality_testing_package', 'PublicController::FoodQualityTestingPackage');
$routes->get('research_and_project_consultation', 'PublicController::ResearchAndProjectConsultation');
$routes->get('blog_one', 'PublicController::BlogOne');
$routes->get('blog_two', 'PublicController::BlogTwo');
$routes->get('blog_three', 'PublicController::BlogThree');



