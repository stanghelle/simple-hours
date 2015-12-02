<ion-view view-title="Account">
  <ion-content>
    <ion-list>
<div role="navigation">
          <ul class="nav nav-justified">
            <li><a href="#/dashboard">Home</a></li>
            <li><a href="#/timer">Timer</a></li>
            <li><a href="#/endre_passord">Endre passord</a></li>
            <li><a ng-click="logout();">Logg ut</a></li>
          </ul>
        </div>
<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="/#/dashboard">Dashboard</a>
        </li>
        <li class="active">Dine timer</li>
    </ul>
</div>
<div class="page-content">
    <div class="row">
        <div class="space-6"></div>
        <div class="col-sm-10 col-sm-offset-1">
            <div id="login-box" class="login-box visible widget-box no-border">
                <div class="widget-body">
                    <div class="widget-main">
                        <h4 class="header blue lighter bigger">
                    <i class="icon-coffee green"></i>
                   Dine timer
                </h4>
                        <div class="space-16"></div>
                        Navn: {{name}}
                         <form name='myForm'>

  <input type="text" id="user_id" value="{{uid}}" /> <br />
   Mnd: 
   <select id='mnd'  onchange='ajaxFunction()'>
    <option value="01">Januar(01)</option>
    <option value="02">Februar(02)</option>
    <option value="03">Mars(03)</option>
    <option value="04">April(04)</option>
    <option value="05">Mai(05)</option>
    <option value="06">Juni(06)</option>
    <option value="07">Juli(07)</option>
    <option value="08">August(08)</option>
    <option value="09">September(09)</option>
    <option value="10">Oktober(10)</option>
    <option value="11">November(11)</option>
    <option value="12">Desmber(12)</option>
    
    
      
   </select>
   
</form>

<div id='ajaxDiv' class="ajaxDiv"></div>
<table id="empTable" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Start</th>
                <th>slutt</th>
                <th>dato</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>start</th>
                <th>slutt</th>
                <th>dato</th>
            </tr>
        </tfoot>
    </table>
    
    <!-- load jquery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- load datatables js library -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function() {
        $('#empTable').dataTable({
            "ajax": "https://simplehours.no/api/user_json/{{uid}}.json",
            "columns": [
                {"data": "start_time"},
                {"data": "end_time"},
                {"data": "dato"}
            ]
        });   
    });
    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-content -->
 </ion-list>
  </ion-content>
</ion-view>
