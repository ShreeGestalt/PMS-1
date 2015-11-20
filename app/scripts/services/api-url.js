'use strict';

/**
 * @ngdoc service
 * @name pmsApp.apiUrl
 * @description
 * # apiUrl
 * Service in the pmsApp.
 */
angular.module('pmsApp').constant('apiUrl', function () {
		var BASE_URL = 'services/index.php/',
       		 apiRoot = $('#apiRoot').attr('href') ? $('#apiRoot').attr('href') : '';

    BASE_URL = apiRoot + BASE_URL;
    return {
      'getGenericData': BASE_URL + 'instruments',
      'updateGenericData': BASE_URL + 'instruments/instru',
      'getSelectedCategoryData': BASE_URL + 'instruments/instrument',

      'getStats': BASE_URL + 'states',
      'getDistrics': BASE_URL + 'districts',
      
      'getCitys': BASE_URL + 'citys',
      'getPatient' : BASE_URL + 'patientmaster',

      'instrument': BASE_URL + 'testdropdown',
      'sample' :  BASE_URL + 'testdropdown/sample',
      'methode' :  BASE_URL + 'testdropdown/methode',
      'group' :  BASE_URL + 'testdropdown/group',
      'flag' :  BASE_URL + 'testdropdown/flag',
      'Addtest': BASE_URL + 'addtest',
      'testdetails' : BASE_URL + 'testmasterdetail',
      'login' : BASE_URL + 'user'
    };
  }());
