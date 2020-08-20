<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Pipelines</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.1.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            Home
                        </a>
                        <a class="navbar-brand" href="/pipelines">
                            Pipelines
                        </a>
                        <a class="navbar-brand" href="/columns">
                            Columns
                        </a>

                    </div>
                </div>
            </nav>
        </div>
    </nav>


<div>
    @yield('content')
</div>
</body>
</html>
