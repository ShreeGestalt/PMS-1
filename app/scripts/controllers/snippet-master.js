'use strict';

/**
 * @ngdoc function
 * @name pmsApp.controller:SnippetMasterCtrl
 * @description
 * # SnippetMasterCtrl
 * Controller of the pmsApp
 */
angular.module('pmsApp')
  .controller('SnippetMasterCtrl', ['$scope', '$http','snippet', function ($scope, $http, snippet) {
  		$scope.myData = {
  			columnDefs: [
    		  { name: 'short_code'},
     		  { name: 'description'}
    		]
 		 };	
  		$http.get('http://localhost/PMS-1/services/index.php/snippet')
  			.success(function (data) {
   				 $scope.myData = data;
  			});
  		$scope.submitForm = function()
  			{
  				var data = {
  						short_code: $scope.snippet.short_code,
       					description: $scope.snippet.description
  				};
  				snippet.save( data, function() {
        			console.log( 'Data Saved Successfully');
      			});
  			};
  		
}]);
