'use strict';

/* Controllers */

var masscoderApp = angular.module('masscoderApp', ['ngAnimate']);

masscoderApp.controller('MasscoderController', function($scope, $http) {
  $http.get('masscoder.json').success(function(data) {
    $scope.masscoder = data;
  });

  $scope.visibles = new Array();

  $scope.toggleVisibility = (function(elId) {
  	if($scope.isVisible(elId)) {
  		console.log("Visible. Removing vis array.");
  		var index = $scope.visibles.indexOf(elId);
  		console.log(index);
  		console.log($scope.visibles);
  		$scope.visibles.splice(index, 1);
  		console.log($scope.visibles);

  	}
  	else {
  		console.log("Not visible. Adding to vis array.");
  		$scope.visibles.push(elId);
  	}
  });

  $scope.isVisible = (function(elId) {
  	return $scope.visibles.indexOf(elId) >= 0;
  });

});
