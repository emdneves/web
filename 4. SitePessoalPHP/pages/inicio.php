<main>
    <h1>Lista de utilizadores</h1>
    <!--div.container>div.row>div.col*4-->
    <div class="container">
        <div class="row border-bottom text-center">
            <div class="col"></div>
            <div class="col">ID</div>
            <div class="col">USERNAME</div>
            <div class="col">PASSWORD</div>
        </div>
        <?php include('db/selectAll.php')?>
    </div>
</main>