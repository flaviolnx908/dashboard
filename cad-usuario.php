<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuarios</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
<header class="titulo_dash"><h1>Dashboard Tarefas</h1></header>

    <div class="dashboard-container">
       <?php 
            include 'menu.php';
       ?>
        <main>  
            <section class="container-cards">
                <section class="card-form">
    <div class="form-header">
        <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
        <p>Preencha os dados abaixo para registrar um novo acesso.</p>
    </div>

    <form action="processa.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
        </div>

        <div class="form-row">
            <div class="form-group flex-1">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group flex-1">
                <label for="nivel">Nível</label>
                <select id="nivel" name="nivel">
                    <option value="1">Usuário</option>
                    <option value="2">Administrador</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Finalizar Cadastro</button>
            <a href="usuarios.php"><button type="button" class="btn-calcel">Cancelar</button></a>
        </div>
    </form>
</section>
            </section>
        </main>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>
</html>