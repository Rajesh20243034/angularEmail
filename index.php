<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
    <style type="text/css">
      .container {
          margin-top: 20px;
      }
    </style>
</head>
<body>
    <div class="container" ng-app ng-controller="EmailController">
      <table class="table table-bordered table-condensed">
        <tbody>
            <tr ng-repeat="email in emails" ng-click="showPopUp(email)">
              <td>
                {{email.from}}
              </td>
              <td>
                {{email.subject}}
              </td>
              <td>
                {{email.date}}
              </td>
               <td>
                {{email.body}}
              </td>
            </tr>
        </tbody>
      </table>
      <div class="modal" ng-show="isPopUpVisible">
      <div class="modal-header">
          <button type="button" class="close" ng-click="closePopUp()">×</button>
          <h3>{{selectedEmail.subject}}</h3>
      </div>
      <div class="modal-body">
          <strong>From:</strong> {{selectedEmail.from}} <br />
          <strong>Date:</strong> {{selectedEmail.date}} <br />
          <br />
          <p>
             {{selectedEmail.body}}
          </p>
      </div>
      <div class="modal-footer">
          <a href="#" class="btn btn-primary" ng-click="closePopUp()">Close</a>
      </div>
    </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script  src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    <script type="text/javascript" src="ang.js"></script>
</body>
</html