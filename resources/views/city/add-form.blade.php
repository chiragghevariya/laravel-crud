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
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.container {
    width: 535px;
    margin-left: 365px;
    margin-top: 30px;
}

h1 {
    text-align: center;
}

</style>
</head>
<body>

<h1>City Form</h1>

<div class="container">

  <form action="{{route('city.save-add-form')}}" method="POST">
    
    @csrf

    <label>Country Name</label>
    <select id="country" name="country">
      <option value="usa">select country</option>

     @if(isset($getallcountry) && !$getallcountry->isEmpty())

        @foreach($getallcountry as $key=>$v)

          <option value="{{$v->id}}">{{$v->country_name}}</option>

        @endforeach

     @endif

    </select>

    <label>State Name</label>
    <select id="country" name="state">
      <option value="usa">select state</option>

      @if(isset(@getallstate) && !$getallstate->isEmpty())
           
      @foreach($getallstate $key=>$p)
      
            <option value="{{$p->id}}">{{$p->state_name}}</option>

      @endforeach

      @endif
    </select>

    <label>City Name</label>
    <input type="text" id="lname" name="city" placeholder="Your city name">
    
    <label>status</label>
    <select name="status" class="form-control" id="my_change_event">
            <option value="">Select Status</option>
            <option value="1">active</option>
            <option value="2">inactive</option>
     </select>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="" class="btn btn-danger">Cancle</a>

  </form>
</div>

</body>
</html>


