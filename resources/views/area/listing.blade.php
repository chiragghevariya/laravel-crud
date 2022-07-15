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

<h1>Area Form</h1>
<a href="{{route('area.add-form')}}"><h3>Add Area Name</h3></a>
<table>
  <tr>
    <th>Id</th>
    <th>Country Name</th>
    <th>State Name</th>
    <th>City Name</th>
    <th>Area Name</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallarea) && !$getallarea->isEmpty())

     @foreach($getallarea as $key=>$v)
  
      <?php 

        $mycountry = \App\Models\Country::where('id',$v->country_name)->first();
       
        $mystate = \App\Models\State::where('id',$v->state_name)->first();
       
        $mycity = \App\Models\City::where('id',$v->city_name)->first();

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
    <td>
      @if($mycity !=null)
       {{$mycity->city_name}}
      @else
        -
      @endif
    </td>

    <td>{{$v->area_name}}</td>


    <td>
     @if($v->status == 1)
         active
     @else
         inactive
     @endif
    </td>

    <td>
      <a href="{{route('area.edit-form',$v->id)}}">Edit</a>
      <a href="{{route('area.delete-form',$v->id)}}">Delete</a>
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

