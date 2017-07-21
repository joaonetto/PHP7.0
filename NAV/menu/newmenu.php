<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Dropdowns within Buttons</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 10px;
      margin-right: -15px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <!--Default buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default">Inicio</button>
    </div>
    <!--Primary buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle">Análise por Vendors <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Checkpoint</a></li>
            <li><a href="#">Cisco</a></li>
            <li><a href="#">Juniper</a></li>
            <li><a href="#">Pulse Secure</a></li>
            <li><a href="#">Symantec</a></li>
            <li class="divider"></li>
            <li><a href="#">Todos</a></li>
        </ul>
    </div>
    <!--Info buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-info dropdown-toggle">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Success buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-success dropdown-toggle">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Warning buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!--Danger buttons with dropdown menu-->
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-sm btn-danger dropdown-toggle">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
</div>
</body>
</html>
