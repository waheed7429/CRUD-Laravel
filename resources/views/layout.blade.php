<html>
    <head>
        <script
            src="{{asset('js/app.js')}}">
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
           </head>
           <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <body>
          <div class="header">
              @section ('header')
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">E2E </a>
                       </div>
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="create">Create Item</a></li>
                            <li><a href="list">View</a></li>
                          </ul>
                        </div>
                </nav>

               @show
          </div>

    <div class="content">
            @section ('content')
            @show
            </div>

            <div class="footer">
            @section ('footer')
            <h1>footer Part</h1>
            @show
            </div>
        </body>
</html>