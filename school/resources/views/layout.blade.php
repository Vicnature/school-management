<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootsrap files --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>STUDENT MANAGEMENT</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-l2">
            {{-- bootstrap code --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><h2>Student Management Project</h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">     
                </div>
              </nav>
            </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            {{-- responsive sidebar --}}
                <div class="sidebar">
                  <a class="active" href="/">Home</a>
                  <a href="/students">Student</a>
                  <a href="/teachers">Teacher</a>
                  <a href="/courses">Courses</a>                  
                  <a href="/enrolment">Enrolment</a>
                  <a href="/payment">Payment</a>
                </div>
          </div>
                
                {{-- page content --}}
            <div class="col-md-9">
              
                  @yield('content')
            
            </div>

          </div>
          </div>
        
        </div>
</body>
</html>