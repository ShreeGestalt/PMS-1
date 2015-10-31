'use strict';

describe('Controller: PmsReportsCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PmsReportsCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PmsReportsCtrl = $controller('PmsReportsCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PmsReportsCtrl.awesomeThings.length).toBe(3);
  });
});
