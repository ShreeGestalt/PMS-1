'use strict';

describe('Directive: footerDir', function () {

  // load the directive's module
  beforeEach(module('pmsApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<footer-dir></footer-dir>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the footerDir directive');
  }));
});
