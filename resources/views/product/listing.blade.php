<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 34px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

th {
    width: 129px;
}
</style>
</head>
<body>

<h1>Product Form</h1>
<a href="{{route('product.add-form')}}"><h3>Add Product Name</h3></a>
<table>
  <tr>
    <th>Id</th>
    <th>product Name</th>
    <th>product Type</th>
    <th>product country</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Confirm</th>
    <th>Action</th>
  </tr>

  @if(isset($getalldata) && !$getalldata->isEmpty())

     @foreach($getalldata as $key=>$v)
  
      <?php 

        $mycountry = \App\Models\Country::where('id',$v->product_country)->first();
       
      ?>

  <tr>
    <td>{{$v->id}}</td>

    <td>{{$v->product_name}}</td>
    <td>{{$v->product_type}}</td>
    <td>
      @if($mycountry !=null)
       {{$mycountry->country_name}}
      @else
        -
      @endif
    </td>

    <td>
     @if($v->gender == 1)
         male
     @else
         female
     @endif
    </td>

    <td>
     @if($v->status == 1)
         active
     @else
         inactive
     @endif
    </td>

     <td>
     @if($v->confirm == 1)
         confirm
     @else
         not-confirm
     @endif
    </td>

    <td>
      <a href="{{route('product.edit-form',$v->id)}}">Edit</a>
      <a href="{{route('product.view-form',$v->id)}}">View</a>
      <a href="{{route('product.delete-form',$v->id)}}">Delete</a>
    </td>

  </tr>

    @endforeach

  @endif
  
 
</table>

@if(isset($getallarea) && !$getallarea->isEmpty())

  <div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallarea->links() !!} -->
    {!! $getallarea->render() !!}              <!-- for pagination -->

  </div>
    
@endif

</body>
</html>

