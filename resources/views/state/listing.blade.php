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
  width: 198px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

div {
    margin-bottom: 34px;
}

</style>
</head>
<body>

<h2>HTML Table</h2>

<div>
  <a href="{{route('state.create_form')}}">Add State Name</a>
</div>

<table>

  <tr>
    <th>ID</th>
    <th>Country name</th>
    <th>State name</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

@if(isset($getallstate) && !$getallstate->isEmpty())

@foreach($getallstate as $key=>$v)
  <?php 

    $mycountr = \App\Models\Country::where('id',$v->country_name)->first();
    
  ?>
  <tr>

    <td>{{$v->id}}</td>
    <td>
      @if($mycountr !=null)
        {{$mycountr->country_name}}

      @else
        - 
      @endif
    </td>
    <td>{{$v->state_name}}</td>
    <td>
  @if($v->status == 1)
     Active
  @else
     Inactive
  @endif
    </td>
    <td>
      <a href="{{route('state.edit-form-route',$v->id)}}">Edit</a>
      <a href="{{route('state.delete-form-route',$v->id)}}">Delete</a>
    </td>
  </tr>

@endforeach

@endif
  
</table>

@if(isset($getallstate) && !$getallstate->isEmpty())

  <div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallstate->links() !!} -->
    {!! $getallstate->render() !!}              <!-- for pagination -->

  </div>
    
@endif

</body>
</html>

