'use strict';

describe('Service: patientMaster', function () {

  // load the service's module
  beforeEach(module('pmsApp'));

  // instantiate service
  var patientMaster;
  beforeEach(inject(function (_patientMaster_) {
    patientMaster = _patientMaster_;
  }));

  it('should do something', function () {
    expect(!!patientMaster).toBe(true);
  });

});
