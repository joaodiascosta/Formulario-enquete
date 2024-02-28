<?php
    include_once('config.php');

    if(isset($_POST['submit'])) {
        $resposta_1 = $_POST['pergunta1'];
        $resposta_2 = $_POST['pergunta2'];
        $resposta_3 = $_POST['pergunta3'];
        $resposta_4 = $_POST['pergunta4'];
        $resposta_5 = $_POST['pergunta5'];
        $resposta_6 = $_POST['pergunta6'];
        $resposta_7 = $_POST['pergunta7'];
        $resposta_8 = $_POST['pergunta8'];
        $resposta_9 = $_POST['pergunta9'];
        $resposta_10 = $_POST['pergunta10'];
        $participante_nome = $_POST['nome'];
        $participante_email = $_POST['email'];
        $participante_distrito = $_POST['distrito'];

        $result =  mysqli_query($conexao, "INSERT INTO respostas_participante(id_resposta, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, participante_nome, participante_email, $participante_distrito) VALUES ('$resposta_1', '$resposta_2', '$resposta_3', '$resposta_4', '$resposta_5', '$resposta_6', '$resposta_7', '$resposta_8', '$resposta_9', '$resposta_10', '$participante_nome', '$participante_email', '$participante_distrito')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete | Plano Diretor SP</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <div class="container">
        <header class="box_title">
            <h2 class="title">Enquete sobre o Plano Diretor Estratégico <br> da Cidade de São Paulo</h2>
        </header>
        <form action="index.php" method="POST" class="form" id="form">
            <div class="box_form">
                <div class="pergunta primeira">
                    <p>Você sabe o que é o Plano Diretor Estratégico?</p>
                        <div class="perg-group">
                            <input class="radio" type="radio" name="pergunta1" id="radio1" required>
                            <label for="radio1">Sim</label>
                        </div>
                        <div class="perg-group">
                            <input  class="radio" type="radio" name="pergunta1" id="radio2" required>
                            <label for="radio2">Não</label>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Você participou do processo participativo do Plano Diretor em 2014?</p>
                        <div class="perg-group">
                            <input class="radio" type="radio" name="pergunta2" id="radio3" required>
                            <label for="radio3">Sim</label>
                        </div>
                        <div class="perg-group">
                            <input  class="radio" type="radio" name="pergunta2" id="radio4" required>
                            <label for="radio4">Não</label>
                        </div>
                </div>
                <br>
                <div class="pergunta" id="scroll">
                    <p>Você acompanha e se interessa sobre as discussões de desenvolvimento urbano da cidade?</p>
                        <div class="perg-group">
                            <input class="radio" type="radio" name="pergunta3" id="radio5" required>
                            <label for="radio5">Sim</label>
                        </div>
                        <div class="perg-group">
                            <input  class="radio" type="radio" name="pergunta3" id="radio6" required>
                            <label for="radio6">Não</label>
                        </div>
                </div>
                <br>
                <div class="pergunta" >
                    <p>Se puder escolher, você moraria perto de:</p>
                        <div class="checkbox-group-moraria">
                            <div class="group-moraria">
                                <div class="perg-group-moraria -alt">
                                    <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox1" value="Emprego">
                                    <label for="checkbox1">Emprego</label>
                                </div>
                                <div class="perg-group-moraria -alt">
                                    <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox2" value="Escola">
                                    <label for="checkbox2">Escola</label>
                                </div>
                                <div class="perg-group-moraria -alt">
                                    <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox3" value="Parque ou praça">
                                    <label for="checkbox3">Parque ou praça</label>
                                </div>
                            </div>
                            <div class="group-moraria2">
                                <div class="perg-group-moraria -alt">
                                    <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox4" value="Transporte (metrô, trem e terminal de ônibus)">
                                    <label for="checkbox4">Transporte (metrô, trem e terminal de ônibus)</label>
                                </div>
                                <div class="perg-group-moraria -alt">
                                    <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox5" value="Unidade de saúde">
                                    <label for="checkbox5">Unidade de saúde</label>
                                </div>
                            </div>
                        </div>
                        <div class="perg-group -alt">
                            <input class="checkbox" type="checkbox" name="pergunta4" id="checkbox6" value="outro">
                            <label for="checkbox6">Outro</label>
                            <input  type="text" name="checkbox7" id="checkbox7" >
                        </div>
                        <div id="erro">
                            <p>Marque no mínimo UMA alternativa para continuar</p>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Quanto tempo de deslocamento você gasta, em média, da sua moradia até o trabalho diariamente?</p>
                        <div class="checkbox-group-tempo" required>
                            <div class="group-tempo">
                                <div class="perg-group-tempo -alt">
                                    <input  class="radio" type="radio" name="pergunta5" id="radio7"  required>
                                    <label for="radio7">Menos de 15 minutos</label>
                                </div>
                                <div class="perg-group-tempo -alt">
                                    <input  class="radio" type="radio" name="pergunta5" id="radio8"  required>
                                    <label for="radio8">Entre 30 minutos e 1 hora</label>
                                </div>
                                <div class="perg-group-tempo -alt">
                                    <input  class="radio" type="radio" name="pergunta5" id="radio9"  required>
                                    <label for="radio9">Mais de 2 horas</label>
                                </div>
                            </div>
                            <div class="group-tempo">
                                <div class="perg-group-tempo -alt">
                                    <input  class="radio" type="radio" name="pergunta5" id="radio10"  required>
                                    <label for="radio10">Entre 15 e 30 minutos</label>
                                </div>
                                <div class="perg-group-tempo -alt">
                                    <input  class="radio" type="radio" name="pergunta5" id="radio11"  required>
                                    <label for="radio11">Entre 1 e 2 horas</label>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Se pudesse escolher, qual das alternativas abaixo mais se aproxima dos seus planos?</p>
                        <div class="checkbox-group-planos">
                            <div class="group-planos">
                                <div class="perg-group-planos -alt">
                                    <input  class="radio" type="radio" name="pergunta6" id="radio12"  required>
                                    <label for="radio12">Não pensa em hipótese alguma deixar o bairro onde moro</label>
                                </div>
                                <div class="perg-group-planos -alt">
                                    <input  class="radio" type="radio" name="pergunta6" id="radio13"  required>
                                    <label for="radio13">Mudaria de bairro porque ficar mais perto da região central da cidade</label>
                                </div>
                                <div class="perg-group-planos -alt">
                                    <input  class="radio" type="radio" name="pergunta6" id="radio14"  required>
                                    <label for="radio14">Mudaria para regiões próximas à rede de transporte público, independentemente do <br> bairro</label>
                                </div>
                            </div>
                            <div class="group-planos">
                                <div class="perg-group-planos -alt">
                                    <input  class="radio" type="radio" name="pergunta6" id="radio15"  required>
                                    <label for="radio15">Permaneceria no bairro onde moro se ele recebesse melhorias</label>
                                </div>
                                <div class="perg-group-planos -alt">
                                    <input  class="radio" type="radio" name="pergunta6" id="radio16"  required>
                                    <label for="radio16">Mudaria de bairro, pois está muito caro o custo de vida no atual</label>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Na sua opinião, do que seu bairro mais precisa?</p>
                        <div class="checkbox-group-bairro">
                            <div class="group-bairro">
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio17"  required>
                                    <label for="radio17">Transporte público</label>
                                </div>
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio18"  required>
                                    <label for="radio18">Emprego</label>
                                </div>
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio19" required>
                                    <label for="radio19">Iluminação pública</label>
                                </div>
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio20" required>
                                    <label for="radio20">Equipamento público</label>
                                </div>
                            </div>
                            <div class="group">
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio21" required>
                                    <label for="radio21">Segurança</label>
                                </div>
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio22" required>
                                    <label for="radio22">Moradia</label>
                                </div>
                                <div class="perg-group-bairro -alt">
                                    <input  class="radio" type="radio" name="pergunta7" id="radio23" required>
                                    <label for="radio23">Parque e áreas verdes</label>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Você gostaria de morar no centro da cidade?</p>
                        <div class="perg-group">
                            <input class="radio" type="radio" name="pergunta8" id="radio24" required>
                            <label for="radio24">Sim</label>
                        </div>
                        <div class="perg-group">
                            <input  class="radio" type="radio" name="pergunta8" id="radio25" required>
                            <label for="radio25">Não</label>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Qual desses espaços públicos ao ar livre você mais valoriza?</p>
                        <div class="checkbox-group-espacos">
                            <div class="group-espacos">
                                <div class="perg-group-espacos -alt">
                                    <input  class="radio" type="radio" name="pergunta9" id="radio26" required>
                                    <label for="radio26">Parque</label>
                                </div>
                                <div class="perg-group-espacos -alt">
                                    <input  class="radio" type="radio" name="pergunta9" id="radio27" required>
                                    <label for="radio27">Quadra de esporte</label>
                                </div>
                            </div>
                            <div class="group-espacos">
                                <div class="perg-group-espacos -alt">
                                    <input  class="radio" type="radio" name="pergunta9" id="radio28" required>
                                    <label for="radio28">Praça</label>
                                </div>
                                <div class="perg-group-espacos -alt">
                                    <input  class="radio" type="radio" name="pergunta9" id="radio29" required>
                                    <label for="radio29">Ciclovia</label>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>O que é mais importante que tenha na São Paulo do futuro ?</p>
                        <div class="checkbox-group-sp">
                            <div class="group-sp">
                                <div class="perg-group-sp -alt">
                                    <input  class="radio" type="radio" name="pergunta10" id="radio30" required>
                                    <label for="radio30">Moradia para todos</label>
                                </div>
                                <div class="perg-group-sp -alt">
                                    <input  class="radio" type="radio" name="pergunta10" id="radio31" required>
                                    <label for="radio31">Soluções para enfrentar novas pandemias</label>
                                </div>
                                <div class="perg-group-sp -alt">
                                    <input  class="radio" type="radio" name="pergunta10" id="radio32" required>
                                    <label for="radio32">Centro da cidade requalificado</label>
                                </div>
                            </div>
                            <div class="group-sp">
                                <div class="perg-group-sp -alt">
                                    <input  class="radio" type="radio" name="pergunta10" id="radio33" required>
                                    <label for="radio33">Transporte público perto de casa</label>
                                </div>
                                <div class="perg-group-sp -alt">
                                    <input  class="radio" type="radio" name="pergunta10" id="radio34" required>
                                    <label for="radio34">Áreas verdes preservadas</label>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="ultima-pergunta">
                    <p>Para concluir o envio da sua participação preencha os dados abaixo:</p>
                        <div class="input-group">
                            <div class="input">
                                <label for="text1">Nome completo:</label>
                                <input class="input-select" type="text" name="text1" id="nome" placeholder="Preencha aqui" required>
                            </div>
                            <div class="input">
                                <label for="text2">E-mail:</label>
                                <input  class="input-select"  type="email" name="text1" id="email" placeholder="exemplo@exemplo.com.br" required>
                            </div>
                            <div class="input -select-distrito">
                                <label for="text2">Distrito:</label>
                                <select class="input-select" name="distrito" id="distrito"  required>
                                    <option value disabled="disabled" hidden="hidden" selected>Selecione a região</option>
                                    <option value="centro">CENTRO</option>
                                    <option value="leste">ZONA LESTE</option>
                                    <option value="norte">ZONA NORTE</option>
                                    <option value="oeste">ZONA OESTE</option>
                                    <option value="sul">ZONA SUL</option>
                                </select>
                                <div>
                                    <select class="input-select distrito" name="centro" id="centro"  required>
                                        <option value disabled="disabled" hidden="hidden" selected>Selecione o distrito</option>
                                        <option value="bela-vista">Bela Vista</option>
                                        <option value="bom-retiro">Bom Retiro</option>
                                        <option value="cambuci">Cambuci</option>
                                        <option value="consolacao">Consolação</option>
                                        <option value="liberdade">Liberdade</option>
                                        <option value="republica">República</option>
                                        <option value="santa-cecilia">Santa Cecília</option>
                                        <option value="se">Sé</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select distrito" name="zleste" id="leste"  required >
                                        <option value disabled="disabled" hidden="hidden" selected>Selecione o distrito</option>
                                        <optgroup label="Leste 1">
                                            <option value="agua-rasa">Água Rasa</option>
                                            <option value="aricanduva">Aricanduva</option>
                                            <option value="artur-alvim">Artur Alvim</option>
                                            <option value="belem">Belém</option>
                                            <option value="bras">Brás</option>
                                            <option value="cangaiba">Cangaíba</option>
                                            <option value="carrao">Carrão</option>
                                            <option value="mooca">Moóca</option>
                                            <option value="pari">Pari</option>
                                            <option value="penha">Penha</option>
                                            <option value="sao-lucas">São Lucas</option>
                                            <option value="sapopemba">Sapopemba</option>
                                            <option value="tatuape">Tatuapé</option>
                                            <option value="vila-formosa">Vila Formosa</option>
                                            <option value="vila-matilde">Vila Matilde</option>
                                            <option value="vila-prudente">Vila Prudente</option>
                                        </optgroup>
                                        <optgroup label="Leste 2">
                                            <option value="cidade-lider">Cidade Líder</option>
                                            <option value="cidade-tiradentes">Cidade Tiradentes</option>
                                            <option value="ermelino-matarazzo">Ermelino Matarazzo</option>
                                            <option value="guaianases">Guaianases</option>
                                            <option value="iguatemi">Iguatemi</option>
                                            <option value="itaim-paulista">Itaim Paulista</option>
                                            <option value="itaquera">Itaquera</option>
                                            <option value="jardim-helena">Jardim Helena</option>
                                            <option value="jose-bonifacio">José Bonifácio</option>
                                            <option value="lajeado">Lajeado</option>
                                            <option value="parque-do-carmo">Parque do Carmo</option>
                                            <option value="ponte-rasa">Ponte Rasa</option>
                                            <option value="sao-mateus">São Mateus</option>
                                            <option value="sao-miguel">São Miguel</option>
                                            <option value="sao-rafael">São Rafael</option>
                                            <option value="vila-curuca">Vila Curuçá</option>
                                            <option value="vila-jacui">Vila Jacuí</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select distrito" name="znorte" id="norte"  required>
                                        <option value disabled="disabled" hidden="hidden" selected>Selecione o distrito</option>
                                        <optgroup label="Norte 1">
                                            <option value="jacana">Jaçanã</option>
                                            <option value="mandaqui">Mandaqui</option>
                                            <option value="santana">Santana</option>
                                            <option value="tremembe">Tremembé</option>
                                            <option value="tucuruvi">Tucuruvi</option>
                                            <option value="vila-guilherme">Vila Guilherme</option>
                                            <option value="vila-maria">Vila Maria</option>
                                            <option value="vila-medeiros">Vila Medeiros</option>
                                        </optgroup>
                                        <optgroup label="Norte 2">
                                            <option value="anhanguera">Anhanguera</option>
                                            <option value="brasilandia">Brasilândia</option>
                                            <option value="cachoeirinha">Cachoeirinha</option>
                                            <option value="casa-verde">Casa Verde</option>
                                            <option value="freguesia-do-o">Freguesia do Ó</option>
                                            <option value="jaragua">Jaraguá</option>
                                            <option value="limao">Limão</option>
                                            <option value="perus">Perus</option>
                                            <option value="pirituba">Pirituba</option>
                                            <option value="sao-domingos">São Domingos</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select distrito" name="zoeste" id="oeste" required>
                                        <option value disabled="disabled" hidden="hidden" selected>Selecione o distrito</option>
                                            <option value="alto-de-pinheiros">Alto de Pinheiros</option>
                                            <option value="barra-funda">Barra Funda</option>
                                            <option value="butanta">Butantã</option>
                                            <option value="itaim-bibi">Itaim bibi</option>
                                            <option value="jaguara">Jaguara</option>
                                            <option value="jaguare">Jaguaré</option>
                                            <option value="jardim-paulista">Jardim Paulista</option>
                                            <option value="lapa">Lapa</option>
                                            <option value="morumbi">Morumbi</option>
                                            <option value="perdizes">Perdizes</option>
                                            <option value="pinheiros">Pinheiros</option>
                                            <option value="raposo-tavares">Raposo Tavares</option>
                                            <option value="rio-pequeno">Rio Pequeno</option>
                                            <option value="vila-leopoldina">Vila Leopoldina</option>
                                            <option value="vila-sonia">Vila Sônia</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select distrito" name="zsul" id="sul" required>
                                        <option value disabled="disabled" hidden="hidden" selected>Selecione o distrito</option>
                                        <optgroup label="Sul 1">
                                            <option value="cursino">Cursino</option>
                                            <option value="ipiranga">Ipiranga</option>
                                            <option value="jabaquara">Jabaquara</option>
                                            <option value="moema">Moema</option>
                                            <option value="sacoma">Sacomã</option>
                                            <option value="saude">Saude</option>
                                            <option value="vila-mariana">Vila Mariana</option>
                                        </optgroup>
                                        <optgroup label="Sul 2">
                                            <option value="campo-belo">Campo Belo</option>
                                            <option value="campo-grande">Campo Grande</option>
                                            <option value="campo-limpo">Campo Limpo</option>
                                            <option value="capao-redondo">Capão Redondo</option>
                                            <option value="cidade-ademar">Cidade Ademar</option>
                                            <option value="cidade-dutra">Cidade Dutra</option>
                                            <option value="grajau">Grajaú</option>
                                            <option value="jardim-angela">Jardim Ângela</option>
                                            <option value="jardim-sao-luis">Jardim São Luís</option>
                                            <option value="marsilac">Marsilac</option>
                                            <option value="parelheiros">Parelheiros</option>
                                            <option value="pedreira">Pedreira</option>
                                            <option value="santo-amaro">Santo Amaro</option>
                                            <option value="socorro">Socorro</option>
                                            <option value="vila-andrade">Vila Andrade</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="box-button">
                    <input type="button" class="button" value="ENVIAR" id="button" onClick="verificar()">
            </div>
        </form>
    </div>
    <script src="./assets/js/script.js"></script>

    <div id="fade" class="hide"></div>
    <div id="modal" class="hide">
        <h3>Enviando questionário, aguarde...</h3>
    </div>
</body>
</html>