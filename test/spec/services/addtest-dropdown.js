'use strict';

describe('Service: addtestDropdown', function () {

  // load the service's module
  beforeEach(module('pmsApp'));

  // instantiate service
  var addtestDropdown;
  beforeEach(inject(function (_addtestDropdown_) {
    addtestDropdown = _addtestDropdown_;
  }));

  it('should do something', function () {
    expect(!!addtestDropdown).toBe(true);
  });

});
