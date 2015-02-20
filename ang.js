function EmailController($scope) {
	$scope.isPopUpVisible = false;
	$scope.composeEmail = {};
	$scope.activeTab = 'inbox';
	$scope.sentEmails = [];
		$scope.isComposePopUpVisible = false;
	  $scope.sendEmail = function() {
        $scope.isComposePopUpVisible = false;
        $scope.sentEmails.push($scope.composeEmail);
    };
	$scope.showPopUp = function(email) {
		$scope.isPopUpVisible = true;
		$scope.selectedEmail = email;
	};
	$scope.closePopUp = function() {
		$scope.isPopUpVisible = false;
	};


	$scope.showComposePopUp = function() {
		$scope.composeEmail = {};
		$scope.isComposePopUpVisible = true;
	};
	$scope.closeComposePopUp = function() {
		$scope.isComposePopUpVisible = false;
	}

	$scope.emails = [{from:'john', subject:'I love Angular', date:'jan1', body:'Hello World'},
        			{from:'jack', subject:'Angular and I are Just Friends', date:'02jan', body:'Just Kidding'},
        			{from:'Rajesh', subject:'Angular JS the developers Framework', date:'03jan', body:'hello there'}
    ];
}