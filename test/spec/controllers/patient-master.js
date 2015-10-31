'use strict';

describe('Controller: PatientMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PatientMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PatientMasterCtrl = $controller('PatientMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PatientMasterCtrl.awesomeThings.length).toBe(3);
  });
});
