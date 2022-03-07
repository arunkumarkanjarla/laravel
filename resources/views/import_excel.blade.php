<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Excel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"

        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"

        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">

    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"

        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">

    </script>

    <!-- Styles -->

    <style>

        body {

            font-family: 'Nunito', sans-serif;

        }

 

        #hideMe {

            -webkit-animation: seconds 1.0s forwards;

            -webkit-animation-iteration-count: 1;

            -webkit-animation-delay: 3s;

            animation: seconds 1.0s forwards;

            animation-iteration-count: 1;

            animation-delay: 3s;

            position: relative;

 

        }

        @-webkit-keyframes seconds {

            0% {

                opacity: 1;

            }

            100% {

                opacity: 0;

                left: -9999px;

                position: absolute;

            }

        }

        @keyframes seconds {

            0% {

                opacity: 1;

            }

            100% {

                opacity: 0;

                left: -9999px;

                position: absolute;

            }

        }

    </style>

</head>

 

<body class="antialiased ">

    <div class="d-flex  align-items-center justify-content-center ">

        <div class="mt-2 border">

            <h4 class="m-0 p-0" style="color: #495057" for="">Imort</h4>

            <div class="border p-2 ">

                @if (\Session::has('success'))

                    <div class="text-success text-center" id="hideMe">

                        <strong id="hideMe" style=" text-align:center !important;">{!! \Session::get('success') !!}</strong>

                    </div>

                @endif

                @if (\Session::has('danger'))

                    <div class="text-warning text-center" id="hideMe">

                        <strong id="hideMe" style=" text-align:center !important;">{!! \Session::get('danger') !!}</strong>

                    </div>

                @endif

                @if (\Session::has('choose_file'))

                    <div class="text-danger text-center" id="hideMe">

                        <strong id="hideMe" style=" text-align:center !important;">{!! \Session::get('choose_file') !!}</strong>

                    </div>

                @endif

                <form action="import" class="p-2" method="post" enctype="multipart/form-data">

                    @csrf

                    <h2>Upload Excel File Here</h2>

                    <input type="file" name="file" accept=".csv" class="form-control col">

                    <input class="btn btn-success m-1" type="submit" value="Import">

                </form>

            </div>

        </div>

    </div>

</body>

</html>