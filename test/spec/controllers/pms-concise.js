'use strict';

describe('Controller: PmsConciseCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PmsConciseCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PmsConciseCtrl = $controller('PmsConciseCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PmsConciseCtrl.awesomeThings.length).toBe(3);
  });
});
