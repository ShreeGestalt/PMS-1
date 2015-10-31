'use strict';

/**
 * @ngdoc overview
 * @name pmsApp
 * @description
 * # pmsApp
 *
 * Main module of the application.
 */
angular
  .module('pmsApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngSanitize',
    'ngTouch',
    'ui.router',
    'ui.grid'
  ])
  .config(['$stateProvider','$urlRouterProvider',
     function ($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise("/");
    $stateProvider
	   .state('main', {
        url: '/',
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
    .state('about', {
        url: '/about',
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
    .state('login', {
        url: '/login',
        templateUrl: 'views/login.html',
        controller: 'LoginCtrl'
      })
    .state('genric', {
        url: '/genric',
        templateUrl: 'views/genric.html',
        controller: 'GenricCtrl'
      })
    .state('/descriptive test', {
        url: '/descriptive test',
        templateUrl: 'views/descriptive test.html',
        controller: 'MainCtrl'
      })
    .state('link-master', {
        url: '/link-master',
        templateUrl: 'views/link-master.html',
        controller: 'linkMasterCtrl'
      })
    .state('flag-master', {
        url: '/flag-master',
        templateUrl: 'views/flag-master.html',
        controller: 'flagMasterCtrl'
      })
    .state('patient-master', {
        url: '/patient-master',
        templateUrl: 'views/patient-master.html',
        controller: 'patientMasterCtrl'
      })
    .state('hospital-master', {
        url: '/hospital-master',
        templateUrl: 'views/hospital-master.html',
        controller: 'HospitalMasterCtrl'
      })
    .state('staff-master', {
        url: '/staff-master',
        templateUrl: 'views/staff-master.html',
        controller: 'staffMasterCtrl'
      })
    .state('descriptive-test', {
        url: '/descriptive-test',
        templateUrl: 'views/descriptive-test.html',
        controller: 'DescriptiveTestCtrl'
      })
    .state('user-account', {
        url: '/user-account',
        templateUrl: 'views/user-account.html',
        controller: 'UserAccountCtrl'
      })
    .state('test-calculator', {
        url: '/test-calculator',
        templateUrl: 'views/test-calculator.html',
        controller: 'TestCalculatorCtrl'
      })
    .state('snippet-master', {
        url: '/snippet-master',
        templateUrl: 'views/snippet-master.html',
        controller: 'SnippetMasterCtrl'
      })
    .state('profile-master', {
        url: '/profile-master',
        templateUrl: 'views/profile-master.html',
        controller: 'ProfileMasterCtrl'
      })
    .state('patient-registration', {
        url: '/patient-registration',
        templateUrl: 'views/patient-registration.html',
        controller: 'PatientRegistrationCtrl'
      })
    .state('test-master-details', {
        url: '/test-master-details',
        templateUrl: 'views/test-master-details.html',
        controller: 'TestMasterDetailsCtrl'
      })
    .state('bill-master-detail-view', {
        url: '/bill-master-detail-view',
        templateUrl: 'views/bill-master-detail-view.html',
        controller: 'BillMasterDetailViewCtrl'
      })
    .state('pms-administration', {
        url: '/pms-administration',
        templateUrl: 'views/pms-administration.html',
        controller: 'PmsAdministrationCtrl'
      })
    .state('pms-concise', {
        url: '/pms-concise',
        templateUrl: 'views/pms-concise.html',
        controller: 'PmsConciseCtrl'
      })
    .state('visit-request-authentication', {
        url: '/visit-request-authentication',
        templateUrl: 'views/visit-request-authentication.html',
        controller: 'VisitRequestAuthenticationCtrl'
      })
    .state('pms-receipt', {
        url: '/pms-receipt',
        templateUrl: 'views/pms-receipt.html',
        controller: 'PmsReceiptCtrl'
      })
    .state('pms-privilliges', {
        url: '/pms-privilliges',
        templateUrl: 'views/pms-privilliges.html',
        controller: 'PmsPrivilligesCtrl'
      })
    .state('id-management', {
        url: '/id-management',
        templateUrl: 'views/id-management.html',
        controller: 'IdManagementCtrl'
      })
    .state('todays-patient', {
        url: '/todays-patient',
        templateUrl: 'views/todays-patient.html',
        controller: 'TodaysPatientCtrl'
      })
    .state('sample-collection', {
        url: '/sample-collection',
        templateUrl: 'views/sample-collection.html',
        controller: 'SampleCollectionCtrl'
      })
    .state('cc-charges', {
        url: '/cc-charges',
        templateUrl: 'views/cc-charges.html',
        controller: 'CcChargesCtrl'
      })
    .state('branch-management', {
        url: '/branch-management',
        templateUrl: 'views/branch-management.html',
        controller: 'BranchManagementCtrl'
      })
    .state('sample-received', {
        url: '/sample-received',
        templateUrl: 'views/sample-received.html',
        controller: 'SampleReceivedCtrl'
      })
    .state('concise-print', {
        url: '/concise-print',
        templateUrl: 'views/concise-print.html',
        controller: 'ConcisePrintCtrl'
      })
    .state('pms-reports', {
        url: '/pms-reports',
        templateUrl: 'views/pms-reports.html',
        controller: 'PmsReportsCtrl'
      })
    .state('change-pin', {
        url: '/change-pin',
        templateUrl: 'views/change-pin.html',
        controller: 'ChangePinCtrl'
      })
    .state('entire-test', {
        url: '/entire-test',
        templateUrl: 'views/entire-test.html',
        controller: 'EntireTestCtrl'
      })
    .state('addgroup', {
        url: '/addgroup',
        templateUrl: 'views/addgroup.html',
        controller: 'MainCtrl'
      })
    .state('addemployeecategory', {
        url: '/addemployeecategory',
        templateUrl: 'views/addemployeecategory.html',
        controller: 'MainCtrl'
      })
    .state('addfaculty', {
        url: '/addfaculty',
        templateUrl: 'views/addfaculty.html',
        controller: 'MainCtrl'
      })
    .state('testmaster', {
        url: '/testmaster',
        templateUrl: 'views/testmaster.html',
        controller: 'TestMasterDetailsCtrl'
      })
    .state('addcontactcategory', {
        url: '/addcontactcategory',
        templateUrl: 'views/addcontactcategory.html',
        controller: 'MainCtrl'
      })
    .state('addexamtype', {
        url: '/addexamtype',
        templateUrl: 'views/addexamtype.html',
        controller: 'MainCtrl'
      })
    .state('addsnippet', {
        url: '/addsnippet',
        templateUrl: 'views/addsnippet.html',
        controller: 'MainCtrl'
      })
    .state('addflag', {
        url: '/addflag',
        templateUrl: 'views/addflag.html',
        controller: 'MainCtrl'
      })
    .state('addsample', {
        url: '/addsample',
        templateUrl: 'views/addsample.html',
        controller: 'MainCtrl'      
      })
    .state('addinstrument', {
        url: '/addinstrument',
        templateUrl: 'views/addinstrument.html',
        controller: 'MainCtrl'
      })
    .state('addmethod', {
        url: '/addmethod',
        templateUrl: 'views/addmethod.html',
        controller: 'MainCtrl'
      })
  }]);