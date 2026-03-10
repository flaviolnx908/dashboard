<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
    
<body>

<header class="titulo_dash"><h1>Dashboard Tarefas</h1></header>

    <div class="dashboard-container">
        <nav>
            <ul>
                    <li><a href="modulo">Inicio</a></li>
                    <li><a href="modulo">Projetos</a></li>    
                    <li><a href="modulo">Relatórios</a></li>
                    <li><a href="modulo">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Flavio+gomes&background=008080&color=fff"alt="avatar">
                <span>Flavio</span>
            </div>
        </nav>
        <main>  
            <section class="container-cards">
                <article>
                    <h2>Modulo de Usuários</h2>
                    <p>Controle de acesso dos usuários ao sistema</p>
                    <a href="usuarios.php" class="btn">acessar</a>
                </article>

                <article>
                    <h2>Gerenciar Tempo</h2>
                    <p>Controle e gerênciamento de suas atividades</p>
                    <a href="dieta" class="btn">acessar</a>
                </article>

                <article>
                    <h2>Controle de atividades</h2>
                    <p>Tabelas de controle de acessos</p>
                    <a href="configurações" class="btn">acessar</a>
                </article>
            </section>
        </main>
    </div>



    <footer>
        <p>&copy; <?php echo date ('Y'); ?> - desenvolvido na aula web 1</p>    
    </footer>


</body>
</html>