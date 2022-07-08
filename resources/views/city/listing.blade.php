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
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>

</table>

</body>
</html>

