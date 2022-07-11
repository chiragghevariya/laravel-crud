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
  width: 125px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>City Listing</h1>

<div>
  <h3>
    <a href="{{route('city.add-form')}}">Add City Name</a>
  </h3>
</div>

<table>
  <tr>
    <th>Id</th>
    <th>Country Name</th>
    <th>State Name</th>
    <th>City Name</th>
    <th>Status</th>
    <th>Action </th>
  </tr>

  @if(isset($getallcity) && !$getallcity->isEmpty())

    @foreach($getallcity as $key=>$v)

       <?php 

        $mycountry = \App\Models\Country::where('id',$v->country_name)->first();
        $mystate = \App\Models\State::where('id',$v->state_name)->first();

       ?>

      <tr>

       <td>{{$v->id}}</td>

       <td>
       @if($mycountry !=null)
        {{$mycountry->country_name}}
       @else
        -
       @endif
      </td>

       <td>
        @if($mystate !=null)
         {{$mystate->state_name}}
        @else
        -
        @endif
       </td>
       
       <td>{{$v->city_name}}</td>

       <td>
       @if($v->status == 1)
         active
       @else
         inactive
       @endif
       </td>

       <td>
          <a href="{{route('city.edit-form',$v->id)}}">Edit</a>
          <a href="{{route('city.delete-form',$v->id)}}">Delete</a>
       </td>


      </tr>

    @endforeach
  
  @endif
  
</table>

  @if(isset($getallcity) && !$getallcity->isEmpty())

   <div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallcity->links() !!} -->
    {!! $getallcity->render() !!}              <!-- for pagination -->

   </div>
    
 @endif


</body>
</html>

