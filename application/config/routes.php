<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['default_controller'] = "welcome";
$route["register"] = 'welcome/register';
$route["login"] = 'welcome/login';
$route["loginUsers"] = 'welcome/loginUsers';
$route["addUsers"] = 'welcome/addUsers';
$route["create"] = 'welcome/create';
$route["createObject"] = 'welcome/createObject';
$route["logout"] = 'welcome/logout';
$route["getList"] = 'welcome/getList';

$route["addUsers_reg"] = 'welcome/addUsers_reg';
$route["register_auth"] = 'welcome/register_auth';
$route["register_auth1"] = 'welcome/register_auth1';
$route["getTickets"] = 'welcome/getTickets';

$route["mail"] = 'welcome/mail';

$route["manage"] = 'welcome/manage';
$route["manage1"] = 'welcome/manage1';
$route["refer"] = 'welcome/refer';


$route["connect"] = 'welcome/connect';
$route["connectUser"] = 'welcome/connectUser';
$route["ticketDetails"] = 'welcome/ticketDetails';
$route["getMyTickets"] = 'welcome/getMyTickets';
$route["tokenConfirmation"] = 'welcome/tokenConfirmation';

$route["ticketResponse"] = 'welcome/ticketResponse'; 
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */