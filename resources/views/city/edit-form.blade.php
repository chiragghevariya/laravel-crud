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

  <form action="{{route('city.update-form')}}" method="POST">
    
    @csrf
<input type="hidden"  value="{{$editdata->id}}"  name="form_edit">


    <label>Country Name</label>
    <select id="country" name="country">
      <option value="">select country</option>

     @if(isset($getallcountry) && !$getallcountry->isEmpty())
      
        @foreach($getallcountry as $key=>$v)

          <option value="{{$v->id}}" @if($editdata->country_name == $v->id) selected @endif>{{$v->country_name}}</option>

        @endforeach

     @endif

    </select>

    <label>State Name</label>
    <select id="country" name="state">
      <option value="">select state</option>

      @if(isset($getallstate) && !$getallstate->isEmpty())
            
       @foreach($getallstate as $key=>$p)
            
            <option value="{{$p->id}}" @if($editdata->state_name == $p->id) selected @endif>{{$p->state_name}}</option>

       @endforeach

      @endif
    </select>

    <label>City Name</label>
    <input type="text" id="lname" value="{{$editdata->city_name}}"  name="city" placeholder="Your city name">
    
    <label>status</label>
    <select name="status" class="form-control" id="my_change_event">
            <option value="">Select Status</option>
            <option value="1" @if($editdata->status == 1) selected @endif >active</option>
            <option value="2" @if($editdata->status == 2) selected @endif>inactive</option>
     </select>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="" class="btn btn-danger">Cancle</a>

  </form>
</div>

</body>
</html>


