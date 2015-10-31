'use strict';

describe('Controller: ChangePinCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var ChangePinCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ChangePinCtrl = $controller('ChangePinCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ChangePinCtrl.awesomeThings.length).toBe(3);
  });
});
