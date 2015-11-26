'use strict';
angular.module('pmsApp').factory('DataStore', function() {

	var testDataForUpdata = {};
	return {
		setTestData : function(testData) {
			testDataForUpdata = testData;
		},
		getTestData: function() {
			return testDataForUpdata;
		}
	};
});