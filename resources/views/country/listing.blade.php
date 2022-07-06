<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Country Form Listing</h2>

 <div style="margin-bottom: 40px;">
  <a href="{{route('country.create-form')}}">Add Countries Name</a>
 </div>

<table>

  <tr>
    <th>id</th>
    <th>Country name</th>
    <th>Action</th>
  </tr>

  @if(isset($getallcountries) && !$getallcountries->isEmpty())

  @foreach($getallcountries as $key=>$V)

  <tr>
    <td>{{$V->id}}</td>
    <td>{{$V->country_name}}</td>
    <td>
      <a href="{{route('country.edit-form-route',$V->id)}}">Edit</a>         
       <a href="{{route('country.delete-form-route',$V->id)}}">Delete</a>
    </td>
  </tr>

  @endforeach
 
  @endif 
  
</table>

 @if(isset($getallcountries) && !$getallcountries->isEmpty())

   <div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallcountries->links() !!} -->
    {!! $getallcountries->render() !!}              <!-- for pagination -->

   </div>
    
 @endif

</body>
</html>

