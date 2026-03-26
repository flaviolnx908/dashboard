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
         <?php 
            include 'menu.php';
         ?>
        <main>  
            <div class="header-content">
                <h2>Gestão de Usuários</h2>
                <p>
                    Visuaize e gerêncie as permissões dos usuários do sistema
                </p>
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
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></i></button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ana Sousa</td>
                            <td>ana.souza@gmail.com</td>
                            <td>Editor</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn_cad"> Cadastrar Usuario </button>
            </div>
        </main>
    </div>
    <!-- //Editado -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php 
        include 'footer.php';
    ?>
</body>
</html>