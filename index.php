<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div>
            <form action="" method="POST" class="formLogin">
                <div class="formElement">
                    <p>E-mail ou telefone:</p>
                    <input type="email" name="" id="">
                </div>
                <div class="formElement">
                    <p>Senha:</p>
                    <input type="password" name="" id="">
                </div>
                <div class="formElement">
                    <input type="submit" name="acao" id="" value="Enviar">
                </div>
            </form>
            <div class="clear"></div>
        </div>

    </header>

    <section class="main">
        <div class="center">
            <div class="imgPessoas">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="img1.png" alt="">
            </div>
            <div class="abrirConta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>
                <form action="" class="criarConta">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div>
                    <div class="w100">
                        <input type="email" placeholder="Celular ou Email">
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Nova senha">
                    </div>

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" id="" class="nascimento">
                            <?php
                            
                                for ($i=1;$i<=31;$i++){

                            ?>
                            <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" id="" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-dia" id="" class="nascimento">
                        <?php
                            
                            for ($i=2021;$i>=1960;$i--){

                        ?>
                        <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                        <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="inputRadio">
                            <input type="radio" name="genero" id="" value="masculino">
                            <h2>Masculino</h2>
                        </div>
                        <div class="inputRadio">
                            <input type="radio" name="genero" id="" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                        <div class="inputRadio">
                            <input type="radio" name="genero" id="" value="feminino">
                            <h2>Outro</h2>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" value="Cadastrar" name="acao">
                    </div>

                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selectedLingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
        </div>
        <div style="border:0; padding-top:10px" class="center">
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
        </div>
    </section>

</body>

</html>