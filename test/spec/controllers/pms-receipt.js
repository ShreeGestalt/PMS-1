'use strict';

describe('Controller: PmsReceiptCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var PmsReceiptCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PmsReceiptCtrl = $controller('PmsReceiptCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PmsReceiptCtrl.awesomeThings.length).toBe(3);
  });
});
