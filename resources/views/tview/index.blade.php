@extends('layouts.app')

@section('content')
    <center><h3 class="page-title">Trivia's and Facts</h3></center>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
   
    <div class="col-lg-12">
		<div class="card">
			<div class="card-header">
			
			</div>
			<div class="card-body">
				<table class="table table-bordered table-hover" id="complaint-tbl">
			        <thead>
			          <tr>
			           
			          
						<th></th>
                       
					
			        
			           
			          </tr>
			        </thead>
			        <tbody>
			          <?php
			          $conn= new mysqli('localhost','root','','jftq')or die("Could not connect to mysql".mysqli_error($con));
			          $qry = $conn->query("SELECT * FROM uploads");
			          while($row = $qry->fetch_array()):
			          ?>
			       
					
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to=" <?php echo $row['id'] ?>" ></li>
							
						  </ol>
					  
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
					  
							<div class="item">
								<h3> <?php echo $row['description'] ?></h3>
							  {{-- <img src="la.jpg" alt="Los Angeles" style="width:100%;"> --}}
							  <div class="carousel-caption">
								<h3> <?php echo $row['description'] ?></h3>
								<p><?php echo $row['description'] ?></p>
							  </div>
							</div>
					  
							
						
						  </div>
					  
						
						
						 <td style="padding:100px"><center><h3><?php echo $row['description'] ?><h3></center></td>
			         
						
                     
			          
			          </tr>
			        <?php endwhile; ?>
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron"></span>
						<span class="sr-only"></span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron"></span>
						<span class="sr-only"></span>
					  </a>
					</div>
			
			  
			        </tbody>
			  </table>
			</div>
		</div>
	</div>
  
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('topics.mass_destroy') }}';
    </script>
@endsection