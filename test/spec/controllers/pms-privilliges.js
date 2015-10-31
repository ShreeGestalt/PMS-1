'use strict';

describe('Controller: PmsPrivilligesCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PmsPrivilligesCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PmsPrivilligesCtrl = $controller('PmsPrivilligesCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PmsPrivilligesCtrl.awesomeThings.length).toBe(3);
  });
});
