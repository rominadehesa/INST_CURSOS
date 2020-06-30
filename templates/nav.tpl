<div class= "container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-light bg-light text-dark">
                            <a class="navbar-brand"> IDC </a>
                            <a class="btn btn-light" href="home"> Home</a>
                            <a class="btn btn-light" href="areas"> Areas </a>
                            <a class="btn btn-light" href="courses"> Cursos </a>
                            {if $session}
                                {if $administer == 1}
                                    <a class="btn btn-dark" href="administer">Administrar</a>
                                {/if}
                                <a class="btn btn-dark" href="logout"> Salir {$username}</a>
                            {else}
                            <a class="btn btn-dark" href="registry">Registrarme</a>
                            <a class="btn btn-dark" href="login">Iniciar sesion</a>
                            {/if}
                        </nav>
                    </div>
                </div>
            </div>