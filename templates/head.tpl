<!--Esta plantilla contiene el HEAD y muestra la barra de navegacion-->
 <!DOCTYPE html>
            <html lang="en">
            <head>
                <base href= "{$base_url}" >
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <title>{$titulo}</title>
            </head>
            <body>

            <div class= "container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand"> {$titulo} </a>
                            <a class="btn btn-outline-dark" href="home"> {$home} </a>
                            <a class="btn btn-outline-dark" href="areas"> {$areas} </a>
                            <a class="btn btn-outline-dark" href="cursos"> {$cursos} </a>
                            <a class="btn btn-outline-dark" href="admin"> {$administrador} </a>
                        </nav>
                    </div>
                </div>
            </div>
