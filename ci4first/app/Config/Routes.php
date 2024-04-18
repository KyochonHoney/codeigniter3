<?php
use App\Controllers\News;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class,'show']);

$routes->get('pages', [pages::class, 'index']);
$routes->get('(:segment)', [pages::class, 'view']); //"데이터가 들어오면 view로 들어가라"

