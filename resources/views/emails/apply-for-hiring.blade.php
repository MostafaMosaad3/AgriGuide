<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hiring Application</title>
</head>
<body>
<h2>New Hiring Application</h2>
<p>You have received a new application for hiring:</p>
<p>Name: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>University: {{ $data['university'] }}</p>
<p>Degree: {{ $data['degree'] }}</p>
<p>Major: {{ $data['major'] }}</p>
<p>graduation_date: {{ $data['graduation_date'] }}</p>
@if(isset($data['position']))
    <p>University: {{ $data['position'] }}</p>
@endif
@if(isset($data['start_date']))
    <p>Degree: {{ $data['start_date'] }}</p>
@endif
@if(isset($data['end_date']))
    <p>Major: {{ $data['end_date'] }}</p>
@endif


</body>
</html>
