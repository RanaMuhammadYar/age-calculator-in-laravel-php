<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

</head>

<body class="bg-light">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="row mt-5">
            <div class="col-12 col-md-3 col-sm-12"></div>
            <div class="col-12 col-md-6 col-sm-12">
                <form method="POST" action="{{ route('agepost') }}">
                    @csrf
                    <label for="dob" class="form-lable">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" value="{{ isset($dob) ? $dob : '' }}"
                        class="form-control" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    <button type="submit" class="btn btn-outline-primary px-3 mt-3 rounded-pill float-end">Calculate
                        Age</button>
                </form>
            </div>
            <div class="col-12 col-md-3 col-sm-12"></div>
            @isset($ageString)
            <div class="row mt-5">
                <div class="col-12 col-md-3 col-sm-12"></div>
                <div class="col-12 col-md-6 col-sm-12">
                    <i class="bi bi-person-heart mx-2"></i>Age: <span class="text-success">{{ isset($ageString) ? $ageString : '' }}</span><br>
                    <i class="bi bi-calendar3 mx-2"></i> Age in Month: <span class="text-success">{{ isset($totalMonths) ? $totalMonths . ' month'  : '' }}</span> <br>
                    <i class="bi bi-calendar3 mx-2"></i> Age in Days: <span class="text-success">{{ isset($totalDays) ? $totalDays. ' days' : '' }}</span><br>
                    <i class="bi bi-hourglass-bottom mx-2"></i> Age in Hours: <span class="text-success">{{ isset($totalHores) ? $totalHores.' hours' : '' }}</span>
                    <br>
                    <i class="bi bi-clipboard-minus mx-2"></i> Age in Minutes: <span class="text-success">{{ isset($totalMinutes) ? $totalMinutes.' minutes' : '' }}</span><br>
                    <i class="bi bi-alarm mx-2"></i> Age in Seconds: <span class="text-success">{{ isset($totalSeconds) ? $totalSeconds.' Seconds' : '' }}</span><br>

                </div>
                <div class="col-12 col-md-3 col-sm-12"></div>
            </div>
            @endisset

        </div>



    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
