<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (BASEPATH .'database/DB.php');
$db =& DB();

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-us']='aboutus';
$route['thank-you']='thankyou';
$route['book-now']='booknow';

$route['location']='location';

//$route['location/(:any)']='location/suburbList/$1';
$route['location/(:any)']='location/locationDetails/$1';

$route['airport-transfer']='airportransfer';
$route['corporate-transfer']='corporatetransfer';

/*
$route['airport-shuttle-cronulla']='airportshuttlecronulla';
$route['airport-shuttle-engadine']='airportshuttleengadine';
$route['airport-shuttle-miranda']='airportshuttlemiranda';
$route['airport-shuttle-caringbah']='airportshuttlecaringbah';
$route['airport-shuttle-sylvania']='airportshuttlesylvania';
$route['airport-shuttle-menai']='airportshuttlemenai';
$route['airport-shuttle-kirrawee']='airportshuttlekirrawee';
$route['airport-shuttle-illawong']='airportshuttleillawong';
$route['airport-shuttle-gymea']='airportshuttlegymea'; */


/*$locationQRY = $db->query("SELECT * FROM locations");
$locationArr = $locationQRY->result();
if(!empty($locationArr)){
foreach($locationArr as $loc)
{
    $route[$loc->slug] = "location/getLocationPage";
}

}*/

$route['pay-now']='payment';
$route['step-one-submit']='payment/paymentSubmit';
$route['square-payment']='payment/squarePayment';
$route['square/payment-process']='payment/squarePaymentProcess';


// For Admin
$route['admin/change-password']='admin/changepassword';
$route['admin/change-password/success']='admin/changepassword/success';
$route['admin/change-password/error']='admin/changepassword/error';

$route['admin/slider/list']= 'admin/slider/slider_list';

$route['admin/page/list']= 'admin/page/page_list';
$route['admin/testimonial/list']= 'admin/testimonial/testimonial_list' ;

$route['admin/booking/departure']= 'admin/booking/bookingdeparture_list';
$route['admin/booking/arrival']= 'admin/bookingarrival/bookingarrival_list';
$route['admin/location/list']= 'admin/location/location_list';
