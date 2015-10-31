'use strict';

describe('Controller: PmsAdministrationCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PmsAdministrationCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PmsAdministrationCtrl = $controller('PmsAdministrationCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PmsAdministrationCtrl.awesomeThings.length).toBe(3);
  });
});
