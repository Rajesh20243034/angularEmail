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
      <ul class="nav nav-tabs">
        <li ng-class="{active: activeTab == 'inbox'}"><a ng-click="activeTab='inbox'">Inbox</a></li>
        <li ng-class="{active: activeTab == 'sent'}"><a ng-click="activeTab='sent'"> Sent</a></li>
      </ul>
      <table class="table table-bordered table-condensed">
        <tbody>
            <tr ng-show="activeTab=='inbox'" ng-repeat="email in emails" ng-click="showPopUp(email)">
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
       <table class="table table-bordered table-condensed" ng-show="activeTab=='sent'">
        <tbody>
            <tr ng-repeat="email in sentEmails" ng-click="showPopUp(email)">
              <td>{{ email.to }}</td>
                <td>{{ email.subject }}</td>
                <td>{{ email.date }}</td>
            </tr>
        </tbody>
      </table>
          <button class="btn btn-primary" ng-click="showComposePopUp()">Compose</button>

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
    <div class="modal" ng-show="isComposePopUpVisible">
      <div class="modal-header">
          <button type="button" class="close" ng-click="closeComposePopUp()">×</button>
          <h3>Compose Email</h3>
      </div>
      <div class="modal-body">
          <form>
              <input type="text" placeholder="To" style="width:95%;" ng-model="composeEmail.to"><br />
              <input type="text" placeholder="Subject" style="width:95%;" ng-model="composeEmail.subject"><br />
              <textarea style="width:95%;" rows="10" ng-model="composeEmail.body"></textarea>
          </form>
      </div>
      <div class="modal-footer">
          <a href="#" class="btn" ng-click="closeComposePopUp()">Close</a>
          <a href="#" class="btn btn-primary" ng-click="sendEmail() ">Send</a>
      </div>
    </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script  src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    <script type="text/javascript" src="ang.js"></script>
</body>
</html