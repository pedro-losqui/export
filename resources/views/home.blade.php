<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Export - gerador de relatório</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gerador de relatório</a>
        </div>
    </nav>
    <div class="container mt-4">
        <form action="{{ route('export'); }}" method="POST">
            @csrf
            <div class="row mt-2">
                <div class="col">
                    <label for="" class="form-label">Data inicial</label>
                    <input type="date" name="from" class="form-control" value="2022-01-10">
                </div>
                <div class="col">
                    <label for="" class="form-label">Data final</label>
                    <input type="date" name="to" class="form-control" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#container").show();
        $(window).load(function () {
            $('#container').fadeOut('slow');
        });
    });

</script>

</html>
