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
.controller('feedbackForm', ['$scope', '$http', function($scope, $http) {

    $scope.submit = function() {
        if ( $scope.feedbackForm.$valid ) {

            $scope.msg = 'Письмо отправляется';

            var formData = {
                'name' : $scope.feedbackForm.user_name.$viewValue,
                'email' : $scope.feedbackForm.user_email.$viewValue,
                'message' : $scope.feedbackForm.message.$viewValue
            };

            $http({
                method: 'POST',
                url: '/local/php_interface/include/LovelyForm.php',
                data: formData
            }).
            then(function(request) {
                $scope.LetterSend = request.data;
                if($scope.LetterSend === 'y')
                    $scope.msg = 'Письмо успешно отправлено';
                else
                    $scope.msg = 'При отправке сообщения возникла непредвиденная ошибка. Пожалуйста, попробуйте еще раз через несколько секунд.';
            }, function(response) {
                $scope.msg = 'Запрос безуспешен';
            });
        }
        else
        {
            $scope.msg = 'В данные формы закралась ошибка';
        }
    }

}]);