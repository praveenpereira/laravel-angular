<!DOCTYPE html>
<html lang="en-US" ng-app="TimeRecords">
    <head>
        <title>Time Management Application</title>

        <!-- Load Bootstrap CSS -->
       
        
    </head>
    <body>
        <h2>Time Management</h2>
        
      
        <div ng-controller="timeCtrl">
            
        <ul>
        <li ng-repeat = "x in products">
         {{x}}
        <span ng-click = "removeItem($index)">&times;</span>
         </li>
        </ul>
        <input ng-model = "addMe">
        <button ng-click = "addItem()">Add</button>
        <p>{{errortext}}</p>
   
        </div>
        
    
    
        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular.min.js') ?>"></script>
       
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/timeCtrl.js') ?>"></script>
       
    </body>
</html>
