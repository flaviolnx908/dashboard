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
            <section class="container-cards">
                <article>
                    <h2>Modulo de Usuários</h2>
                    <p>Controle de acesso dos usuários ao sistema</p>
                    <a href="usuarios.php" class="btn">acessar</a>
                </article>

                <article>
                    <h2>Gerenciar Tempo</h2>
                    <p>Controle e gerênciamento de suas atividades</p>
                    <a href="#" class="btn">acessar</a>
                </article>

                <article>
                    <h2>Controle de atividades</h2>
                    <p>Tabelas de controle de acessos</p>
                    <a href="#" class="btn">acessar</a>
                </article>
            </section>
        </main>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>
</html>