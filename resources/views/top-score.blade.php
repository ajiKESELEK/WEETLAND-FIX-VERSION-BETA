<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet" type="text/css" >
    <title>Top Scores</title>
</head>
<style>
   
        table {
            width: 100%;
            /* border: collapse; */
           
        }

        th, td {
            padding: 10px;
           border: 1px solid black;
            backdrop-filter: blur(40px); 
          }

        /* th {
         
        } */



</style>
<body>
    <h1>HALAMAN TOP SCORE</h1>
    <div class="blur-background">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>USER NAME</th>
                    <th>MAX SCORE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topScores as $index => $topScore)
                <tr>
                    <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                    <td>{{ $topScore->name }}</td> <!-- Nama pengguna -->
                    <td>{{ $topScore->max_score }}</td> <!-- Skor tertinggi -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
