<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div style="height: 15px;"></div>
                <form action="/nilai/cari" method="GET">
                <div class="row">
                    <strong>Search : </strong>
                    &nbsp;                    
                    <input type="text" name="search" id="search" placeholder="Nama" value="{{ old('search') }}" class="input-group-text" style="text-align: left">                    
                    &nbsp;
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>
                </form>
            <br>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Absen</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>Kelas</th>
                </tr>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->tanggal }}</td>
                    <td>{{ $value->absen }}</td>
                    <td>{{ $value->nis }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->status }}</td>
                    <td>{{ $value->kelas }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>