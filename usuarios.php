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
            <div class="header-content">
                <h2>Gestão de Usuários</h2>
                <p>Visuaize e gerêncie as permissões dos usuários dosistema</p>
            </div>
            <div class="table-responsive">
                <table>
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.ead.br</td>
                            <td>Administrador</td>
                            <td>Ativo</td>
                            <td>Editar</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ana Sousa</td>
                            <td>ana.souza@gmail.com</td>
                            <td>Editor</td>
                            <td>Ativo</td>
                            <td>Editar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <!-- //Editado -->
    <footer>
        <p>&copy; <?php echo date ('Y'); ?> - desenvolvido na aula web 1</p>    
    </footer>
</body>
</html>