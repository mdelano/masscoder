'use strict';

var masscoderApp = angular.module('masscoderApp', ['ngAnimate']);

masscoderApp.controller('MasscoderController', function($scope, $http) {
  $http.get('masscoder.json').success(function(data) {
    $scope.masscoder = data;
  });

  $scope.visibles = new Array();

  /**
  ** Drives the isVisible function by maintaining an array of "visibles"
  ** Given a DOM element, we track it's current state using local visibles
  
  **/
  $scope.toggleVisibility = (function(elId) {
  	if($scope.isVisible(elId)) {
  		var index = $scope.visibles.indexOf(elId);
  		$scope.visibles.splice(index, 1);

  	}
  	else {
  		$scope.visibles.push(elId);
  	}
  });

  /**
  ** Determins if a DOM element is currently visible using local visibles
  **/
  $scope.isVisible = (function(elId) {
  	return $scope.visibles.indexOf(elId) >= 0;
  });

});
