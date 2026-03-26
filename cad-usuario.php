<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuarios</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        .btn_cad{
    background: none;
    border: none;
    color: #004a8d;
    cursor: pointer;
    font-size: 16px;
}

    </style>
</head>
<body>
<header class="titulo_dash"><h1>Dashboard Tarefas</h1></header>

    <div class="dashboard-container">
       <?php 
            include 'menu.php';
       ?>
        <main>  
            <section class="container-cards">
                
            </section>
        </main>
    </div>
    <?php 
        include 'footer.php';
    ?>
</body>
</html>