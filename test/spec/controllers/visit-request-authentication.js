'use strict';

describe('Controller: VisitRequestAuthenticationCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var VisitRequestAuthenticationCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    VisitRequestAuthenticationCtrl = $controller('VisitRequestAuthenticationCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(VisitRequestAuthenticationCtrl.awesomeThings.length).toBe(3);
  });
});
