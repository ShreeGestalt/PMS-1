'use strict';

describe('Controller: ConcisePrintCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var ConcisePrintCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ConcisePrintCtrl = $controller('ConcisePrintCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ConcisePrintCtrl.awesomeThings.length).toBe(3);
  });
});
