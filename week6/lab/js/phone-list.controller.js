(function() {

	'use strict';
	angular
		.module('app')
		.controller('PhoneListController', PhoneListController);

	PhoneListController.$inject = ['PhonesService'];

	function PhoneListController(PhonesService) {
		var vm = this;
		//defines it as an array
		vm.phones = [];
		// calls the function activate
		activate();
		// the actual function where it returns results for the array phones
		function activate() {
			PhonesService.getPhones().then(function(response) {
				vm.phones = response;
			});
		}

	}
})();