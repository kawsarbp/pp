<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail</title>
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>
                        <strong>Name: </strong>
                        <span>{{ $name }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Greeting: </strong>
                        <span>{{ $greeting }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Status: </strong>
                        <span>{{ ucwords($status) }}</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


</body>
</html>

