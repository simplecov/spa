'use strict';

/**
 * angular
 * Description: Angular!
 */
angular

/**
 * app
 * Description: Устанавливаем первоначальное состояние приложения
 */
angular.module('app', [])
    .controller('feedbackForm', ['$scope', function($scope, $http) {
        $scope.patternEmail = '/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/';
        $scope.patternPhone = '\d+';

        $scope.submit = function() {
            $scope.msg = 'Форма в разработке, на данный момент сообщения не отправляются';
            $scope.formData = {};
            console.log($scope.formData);
        };
    }]);