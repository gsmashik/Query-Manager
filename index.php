<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BoilerPlate</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome-4/css/font-awesome.min.css" rel="stylesheet"> 

     <link href="vendor/css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="card" id="query-table">
			<div class="card-block">

				<!-- query Manager Table -->


<form name="query-manager" id="query-manager" action="query-manager-process.php" method="POST" onsubmit="query_manager(this)">
<div class="form-group">
<textarea name="query" class="form-control" id="query" ></textarea> <br>
</div>
<div class="form-group">

  <button type="submit" class="btn btn-primary  ">Submit</button>

</div>
</form>

<div class="col-md-12">
<div class="scroll-table-container shadow-sm" style="margin-bottom: 5px;">

<table class="table table-bordered  scroll-table" id="table" >
<thead></thead>
	<tbody>
		
	</tbody>
</table>
</div>
</div>
			</div>
		</div>

   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>    <script src="vendor/custom-js/custom.js"></script>
	<script>
	function query_manager(elem) {
event.preventDefault();
var method = $(elem).attr("method");
var url = $(elem).attr('action');
var data = $(elem).serialize();

$.ajax({
url:url,
type:method,
data:data,
success: function (response) {
    // var data = JSON.parse(response);
    // for (i in data.column) {
    //     x += data.column[i];
    // }
    // var col_length = data.length;
    // var ff = JSON.parse(JSON.stringify(response));
    // var len = response.length;
    // var col = response[0][0];
    // var b = JSON.parse(response);
    // var h = b.length;



    $("#table").html(response);

}

});

}
	</script>
  </body>

</html>
