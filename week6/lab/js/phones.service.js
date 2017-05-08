(function() {

	'use strict';
	angular
		.module('app')
		.factory('PhonesService', PhonesService);

	PhonesService.$inject = ['$http', 'REQUEST'];

	// pass in REQUEST as a parameter for the function along with $http from other page
	function PhonesService($http, REQUEST) {

		var url = REQUEST.Phones;
		var service = {
			'getPhones': getPhones,
			'findPhone': findPhone
		};
		return service;
		// get the results of the phone and decide what happens based on if it passed or failed
		function getPhones() {
			return $http.get(url)
				.then(getPhonesComplete, getPhonesFailed);
			// when complete return the response
			function getPhonesComplete(response) {
				return response.data;
			}
			// if fails return an empty array
			function getPhonesFailed(error) {
				return [];
			}
		}

		function findPhone(id) {

			 return getPhones()
			 	.then(function(data) {
			 		return findPhoneComplete(data);;
			 	});

			 function findPhoneComplete(data) {
			 		var results= {};
			 		// for all of the items if it has an id return the results
			 		angular.forEach(data, function (value, key) {
			 			if (!results.length) {
			 				if (value.hasOwnProperty('id') && value.id === id) {
			 					results = angular.copy(value);
			 				}
			 			}
			 		}, results);

			 		return results;
			 	}
		}
	}

})();