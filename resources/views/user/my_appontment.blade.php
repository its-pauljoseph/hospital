<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center</title>

  <style>
    table {
        table-layout: fixed;
        width: 90%;
        border-collapse: collapse;
        font-family: sans-serif;
        margin: 2em;
    }
    table, th, td {
        border: 1px solid black;
    }

    thead, th, td {
        padding: 5px;
        text-align: center;
    }
  </style>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.header')

  <div align="center">

    <table>
    <thead>
        <tr>
            <th>Doctor</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
            <th>Cancel Appointment</th>
        </tr>
    </thead>

    @foreach($appoint as $appoints)

    <tbody>
        <tr>
            <td>{{ $appoints->doctor }}</td>
            <td>{{ $appoints->date }}</td>
            <td>{{ $appoints->message }}</td>
            <td>{{ $appoints->status }}</td>
            <td onclick="return confirm('Are you sure you want to delete the appointment?')"><a href="{{ url('cancel_appoint', $appoints->id) }}" class="btn btn-danger">Cancel</a></td>
        </tr>
    </tbody>

    @endforeach

    </table>

  </div>


  @include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>