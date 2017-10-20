<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="http://localhost/assignment1_final/public/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Oswald:300" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
@include('shared.navbar')
@yield('content')
<footer>
    <center>
        Copyright © 2017 RMIT University | <a href="https://www.rmit.edu.au/utilities/disclaimer">Disclaimer</a> | <a href="https://www.rmit.edu.au/utilities/terms">Terms</a> | <a href="https://www.rmit.edu.au/utilities/privacy">Privacy</a> | <a href="https://www.rmit.edu.au/utilities/accessibility">Accessibility</a> | <a href="https://www.rmit.edu.au/utilities/website-feedback">Website feedback</a> | ABN 49 781 030 034 |
    <br>
    CRICOS provider number: 00122A | RTO Code: 3046 | Open Universities Australia
    </center>
</footer>
</body>
</html>