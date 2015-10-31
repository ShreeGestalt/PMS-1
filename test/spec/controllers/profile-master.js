'use strict';

describe('Controller: ProfileMasterCtrl', function () {

  // load the controller's module
  beforeEach(module('pmsApp'));

  var ProfileMasterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ProfileMasterCtrl = $controller('ProfileMasterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ProfileMasterCtrl.awesomeThings.length).toBe(3);
  });
});
