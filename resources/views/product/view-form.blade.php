  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
	.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: -416px;
    margin-top: 111px;
}

</style>
  </head>
  <body>

  	<?php  
       
       $mycountry =  \App\Models\Country::where('id',$viewdata->product_country)->firstOrfail();

  	?>
  
  <div class="container">
  	
	<div>
	   <label>Product Name:-</label> 
	   <p>{{$viewdata->product_name}}</p>
	</div>  
	    
	<div>
	   <label>Product Type:-</label>
	    <p>{{$viewdata->product_type}}</p>
	</div>
	  
	<div>
	   <label>Product country:-</label>
	    <p>
	     @if($mycountry == !null)
           {{$mycountry->country_name}}
         @else
           -
         @endif
	    </p> 	
	</div>

	<div>
	  <label>Which Gender use:-</label>
	   <p>
        @if($viewdata->gender == 1)
	       Male
	    @else
	       Female
	    @endif	  
	   </p>

	</div>

	<div>
	  <label>status:-</label>
	   <p>
	   	@if($viewdata->status == 1)
	       Active
	    @else
	       Inactive
	    @endif	
	   </p>
	</div>

	<div>
	   <label>confirm:-</label>
	   <p>
	   	@if($viewdata->confirm == 1)
	       checked
	    @else
	      -
	    @endif	
	   </p>
	</div>   
	     
	<div>
	   <a href="{{route('product.listing')}}" class="btn btn-danger">Cancle</a>
	</div>

</div>
    

  </body>
  </html>