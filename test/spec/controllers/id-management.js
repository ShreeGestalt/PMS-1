'use strict';

describe('Controller: IdManagementCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var IdManagementCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    IdManagementCtrl = $controller('IdManagementCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(IdManagementCtrl.awesomeThings.length).toBe(3);
  });
});
