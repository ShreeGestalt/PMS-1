'use strict';

describe('Controller: LinkMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsappApp'));

  var LinkMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    LinkMasterCtrl = $controller('LinkMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(LinkMasterCtrl.awesomeThings.length).toBe(3);
  });
});
