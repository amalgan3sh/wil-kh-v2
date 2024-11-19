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
$routes->get('consultation', 'PublicController::Consultation');
$routes->get('short_course_training', 'PublicController::ShortCourseTraining');
$routes->get('laboratory', 'PublicController::Laboratory');
$routes->get('water_quality_test', 'PublicController::WaterQualityTest');
$routes->get('food_quality_test', 'PublicController::FoodQualityTest');
$routes->get('soil_quality_test', 'PublicController::SoilQualityTest');
$routes->get('arsenic_research', 'PublicController::ArsenicResearch');
$routes->get('risk_assessment', 'PublicController::RiskAssessment');
$routes->get('journal_article', 'PublicController::JournalArticle');
$routes->get('conference', 'PublicController::Conference');
$routes->get('wil_newsletter', 'PublicController::WILNewsletter');
$routes->get('our_vision', 'PublicController::OurVision');
$routes->get('water_testing_package', 'PublicController::WaterTestingPackage');
$routes->get('soil_testing_package', 'PublicController::SoilTestingPackage');



