'use strict';

describe('Controller: CcChargesCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var CcChargesCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    CcChargesCtrl = $controller('CcChargesCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(CcChargesCtrl.awesomeThings.length).toBe(3);
  });
});
