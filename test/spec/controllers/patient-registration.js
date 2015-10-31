'use strict';

describe('Controller: PatientRegistrationCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PatientRegistrationCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PatientRegistrationCtrl = $controller('PatientRegistrationCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PatientRegistrationCtrl.awesomeThings.length).toBe(3);
  });
});
