<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form id="update-records" action="/employees" method="GET">
    <h1>Update Records</h1>
        <div class="row">
            <div class="col-md-6">
                    <h4>Employee</h4>
                        <div class="class">
                            <label>Get Name:</label>
                            <label id="" name="empName">All Employee Name</label>
                        </div>
                        <div class="class">
                            <label>Get Employee ID:</label>
                            <label  id="" name="empId">All Employee ID</label>
                        </div>
                    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                    <h4>Attendance</h4>
                        <div class="class">
                            <label id="" name="date">Date</label>
                        </div>
                        <div class="class">
                            <label id="" name="startTime">Time In</label>
                        </div>
                        <div class="class">
                            <label id="" name="endTime">Time Out</label>
                        </div>
            </div>
        </div>
    </form>
</body>
</html>

{{-- http://192.168.0.115:8090/newFindRecords --}}
