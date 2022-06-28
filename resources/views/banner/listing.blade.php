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

<h2>Banner listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('banner.create-form-route')}}">Add Banner Record</a>
</div>

<table>

  <tr>
    <th>Name</th>
    <th>Link</th>
    <th>Action</th>
  </tr>

  @if(isset($getAllBanner) && !$getAllBanner->isEmpty())

    @foreach($getAllBanner as $key=>$v)

    <tr>
      <td>{{$v->name}}</td> <!-- database name -->
      <td>{{$v->link}}</td>
      <td>
        <a href="">Edit</a>   <a href="">Delet</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getAllBanner) && !$getAllBanner->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getAllBanner->links() !!} -->
    {!! $getAllBanner->render() !!}              <!-- for pagination -->

</div>
    
  @endif

</body>
</html>

