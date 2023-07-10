<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/employees" method="GET">
        <input type="hidden" name="pass" value="12345">
        <input type="text" name="personID" placeholder="Emp ID">
        <input type="datetime-local'" name="startTime" id="">
        <input type="datetime-local" name="endTime" id="">
        {{-- <input type="datetime" id="time-input" name="startTime" step="3600" min="00:00" max="23:59" pattern="[0-2][0-9]:[0-5][0-9]">
        <input type="datetime-local" id="time-input" name="endTime" step="3600" min="00:00" max="23:59" pattern="[0-2][0-9]:[0-5][0-9]"> --}}
        <input type="submit" value="Get all">
    </form>
</body>
</html>

{{-- http://192.168.0.115:8090/newFindRecords --}}
