<main>
    <form action="email.php" method="get">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>

    <?php 
        if(isset($_GET['r'])){
            if($_GET['r'] == "ok"){
                ?>
                <div class="alert alert-success" role="alert">
                    Mensagem enviada com sucesso
                </div>
                <?php
            }else if($_GET['r'] == "erro"){
                ?>
                <div class="alert alert-danger" role="alert">
                    Erro ao enviar mensagem
                </div>
                <?php
            }
        }?>
</main>