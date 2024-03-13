<?php 
    session_start();

    $token = rand();

    $_SESSION['token_sessao'] = $token;
    
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
        <form action="comprovante.php" method="POST" class="form" id="form" onsubmit="verificar(this); return false;">
        <input type="hidden" name="token" value="<?php echo $token; ?>">   
        <div class="box_form">
                <div class="pergunta primeira">
                    <p>Você sabe o que é o Plano Diretor Estratégico?</p>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta1" id="radio1" value="Sim" required>
                        <label for="radio1">Sim</label>
                    </div>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta1" id="radio2" value="Não" required>
                        <label for="radio2">Não</label>
                    </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Você participou do processo participativo do Plano Diretor em 2014?</p>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta2" id="radio3" value="Sim" required>
                        <label for="radio3">Sim</label>
                    </div>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta2" id="radio4" value="Não" required>
                        <label for="radio4">Não</label>
                    </div>
                </div>
                <br>
                <div class="pergunta" id="scroll">
                    <p>Você acompanha e se interessa sobre as discussões de desenvolvimento urbano da cidade?</p>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta3" id="radio5" value="Sim" required >
                        <label for="radio5">Sim</label>
                    </div>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta3" id="radio6" valor="Não" required>
                        <label for="radio6">Não</label>
                    </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Se puder escolher, você moraria perto de:</p>
                    <div class="checkbox-group-moraria">
                        <div class="group-moraria">
                            <div class="perg-group-moraria -alt">
                                <input class="checkbox campos" type="checkbox" name="pergunta4[0]" id="checkbox1" value="Emprego">
                                <label for="checkbox1">Emprego</label>
                            </div>
                            <div class="perg-group-moraria -alt">
                                <input class="checkbox campos" type="checkbox" name="pergunta4[1]" id="checkbox2" value="Escola">
                                <label for="checkbox2">Escola</label>
                            </div>
                            <div class="perg-group-moraria -alt">
                                <input class="checkbox campos" type="checkbox" name="pergunta4[2]" id="checkbox3" value="Parque ou praça">
                                <label for="checkbox3">Parque ou praça</label>
                            </div>
                        </div>
                        <div class="group-moraria2">
                            <div class="perg-group-moraria -alt">
                                <input class="checkbox campos" type="checkbox" name="pergunta4[3]" id="checkbox4" value="Transporte (metrô, trem e terminal de ônibus)">
                                <label for="checkbox4">Transporte (metrô, trem e terminal de ônibus)</label>
                            </div>
                            <div class="perg-group-moraria -alt">
                                <input class="checkbox campos" type="checkbox" name="pergunta4[4]" id="checkbox5" value="Unidade de saúde" >
                                <label for="checkbox5">Unidade de saúde</label>
                            </div>
                        </div>
                    </div>
                    <div class="perg-group -alt">
                        <input class="checkbox outro campos" type="checkbox" name="pergunta4[]" id="checkbox6" value="Outro">
                        <label for="checkbox6">Outro</label>
                        <input type="text" name="pergunta4[5]" id="checkbox7" class="outro-text">
                    </div>
                    <div id="erro">
                        <p>Marque no mínimo UMA alternativa para continuar</p>
                    </div>
                    <div id="erro-vazio">
                        <p>Campo outro não pode ficar vazio</p>
                    </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Quanto tempo de deslocamento você gasta, em média, da sua moradia até o trabalho diariamente?</p>
                    <div class="checkbox-group-tempo" required>
                        <div class="group-tempo">
                            <div class="perg-group-tempo -alt">
                                <input class="radio campos" type="radio" name="pergunta5" id="radio7" value="Menos de 15 minutos" required>
                                <label for="radio7">Menos de 15 minutos</label>
                            </div>
                            <div class="perg-group-tempo -alt">
                                <input class="radio campos" type="radio" name="pergunta5" id="radio8" value="Entre 30 minutos e 1 hora" required>
                                <label for="radio8">Entre 30 minutos e 1 hora</label>
                            </div>
                            <div class="perg-group-tempo -alt">
                                <input class="radio campos" type="radio" name="pergunta5" id="radio9" value="Mais de 2 horas" required>
                                <label for="radio9">Mais de 2 horas</label>
                            </div>
                        </div>
                        <div class="group-tempo">
                            <div class="perg-group-tempo -alt">
                                <input class="radio campos" type="radio" name="pergunta5" id="radio10" value="Entre 15 e 30 minutos" required>
                                <label for="radio10">Entre 15 e 30 minutos</label>
                            </div>
                            <div class="perg-group-tempo -alt">
                                <input class="radio campos" type="radio" name="pergunta5" id="radio11" value="Entre 1 e 2 horas" required>
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
                                <input class="radio campos" type="radio" name="pergunta6" id="radio12" value="Não pensa em hipótese alguma deixar o bairro onde moro" required >
                                <label for="radio12">Não penso em hipótese alguma deixar o bairro onde moro</label>
                            </div>
                            <div class="perg-group-planos -alt">
                                <input class="radio campos" type="radio" name="pergunta6" id="radio13" value="Mudaria de bairro porque prefiro ficar mais perto da região central da cidade" required>
                                <label for="radio13">Mudaria de bairro porque prefiro ficar mais perto da região central da cidade</label>
                            </div>
                            <div class="perg-group-planos -alt">
                                <input class="radio campos" type="radio" name="pergunta6" id="radio14" value="Mudaria para regiões próximas à rede de transporte público, independentemente do bairro " required>
                                <label for="radio14">Mudaria para regiões próximas à rede de transporte público, independentemente do bairro</label>
                            </div>
                        </div>
                        <div class="group-planos">
                            <div class="perg-group-planos -alt">
                                <input class="radio campos" type="radio" name="pergunta6" id="radio15" value="Permaneceria no bairro onde moro se ele recebesse melhorias" required>
                                <label for="radio15">Permaneceria no bairro onde moro se ele recebesse melhorias</label>
                            </div>
                            <div class="perg-group-planos -alt">
                                <input class="radio campos" type="radio" name="pergunta6" id="radio16" value="Mudaria de bairro, pois está muito caro o custo de vida no atual " required>
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
                                <input class="radio campos" type="radio" name="pergunta7" id="radio17" value="Transporte público" required>
                                <label for="radio17">Transporte público</label>
                            </div>
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio18" value="Emprego" required>
                                <label for="radio18">Emprego</label>
                            </div>
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio19" value="Iluminação pública" required>
                                <label for="radio19">Iluminação pública</label>
                            </div>
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio20" value="Equipamento público" required>
                                <label for="radio20">Equipamento público</label>
                            </div>
                        </div>
                        <div class="group">
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio21" value="Segurança" required>
                                <label for="radio21">Segurança</label>
                            </div>
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio22" value="Moradia" required>
                                <label for="radio22">Moradia</label>
                            </div>
                            <div class="perg-group-bairro -alt">
                                <input class="radio campos" type="radio" name="pergunta7" id="radio23" value="Parque e áreas verdes" required>
                                <label for="radio23">Parque e áreas verdes</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Você gostaria de morar no centro da cidade?</p>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta8" id="radio24" value="Sim" required>
                        <label for="radio24">Sim</label>
                    </div>
                    <div class="perg-group">
                        <input class="radio campos" type="radio" name="pergunta8" id="radio25" value="Não" required>
                        <label for="radio25">Não</label>
                    </div>
                </div>
                <br>
                <div class="pergunta">
                    <p>Qual desses espaços públicos ao ar livre você mais valoriza?</p>
                    <div class="checkbox-group-espacos">
                        <div class="group-espacos">
                            <div class="perg-group-espacos -alt">
                                <input class="radio campos" type="radio" name="pergunta9" id="radio26" value="Parque" required>
                                <label for="radio26">Parque</label>
                            </div>
                            <div class="perg-group-espacos -alt">
                                <input class="radio campos" type="radio" name="pergunta9" id="radio27" value="Quadra de esporte" required>
                                <label for="radio27">Quadra de esporte</label>
                            </div>
                        </div>
                        <div class="group-espacos">
                            <div class="perg-group-espacos -alt">
                                <input class="radio campos" type="radio" name="pergunta9" id="radio28" value="Praça" required>
                                <label for="radio28">Praça</label>
                            </div>
                            <div class="perg-group-espacos -alt">
                                <input class="radio campos" type="radio" name="pergunta9" id="radio29" value="Ciclovia" required>
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
                                <input class="radio campos" type="radio" name="pergunta10" id="radio30" value="Moradia para todos" required>
                                <label for="radio30">Moradia para todos</label>
                            </div>
                            <div class="perg-group-sp -alt">
                                <input class="radio campos" type="radio" name="pergunta10" id="radio31" value="Soluções para enfrentar novas pandemias" required>
                                <label for="radio31">Soluções para enfrentar novas pandemias</label>
                            </div>
                            <div class="perg-group-sp -alt">
                                <input class="radio campos" type="radio" name="pergunta10" id="radio32" value="Centro da cidade requalificado" required>
                                <label for="radio32">Centro da cidade requalificado</label>
                            </div>
                        </div>
                        <div class="group-sp">
                            <div class="perg-group-sp -alt">
                                <input class="radio campos" type="radio" name="pergunta10" id="radio33" value="Transporte público perto da casa" required>
                                <label for="radio33">Transporte público perto de casa</label>
                            </div>
                            <div class="perg-group-sp -alt">
                                <input class="radio campos" type="radio" name="pergunta10" id="radio34" value="Áreas verdes preservadas" required>
                                <label for="radio34">Áreas verdes preservadas</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="ultima-pergunta">
                    <p>Para concluir o envio da sua participação preencha os dados abaixo:</p>
                    <div class="input-group">
                        <div class="input-nome" id="nomeCompleto">
                            <div>
                                <label for="text1">Nome completo:</label>
                                <input class="input-select campos" minlength="3" type="text" name="nome" id="name" placeholder="Preencha aqui" required>
                            </div>
                            <div id="erro-nome">
                                <p>Nome deve conter no mínimo 3 letras</p>
                            </div>
                        </div>
                        <div class="input">
                            <label for="text2">E-mail:</label>
                            <input class="input-select campos" type="email" name="email" id="email" placeholder="exemplo@exemplo.com.br" required>
                        </div>
                        <div class="input-regioes">
                            <div class="regioes-bairros">
                                <label for="text2">Distrito:</label>
                                <select class="input-select campos" name="distrito" id="distrito" selected >
                                    <option value="" hidden="hidden">Selecione a região</option>
                                    <option value="Centro">CENTRO</option>
                                    <option value="Zona Leste">ZONA LESTE</option>
                                    <option value="Zona Norte">ZONA NORTE</option>
                                    <option value="Zona Oeste">ZONA OESTE</option>
                                    <option value="Zona Sul">ZONA SUL</option>
                                </select>
                                <div>
                                    <select class="input-select bairro campos" name="bairro" id="centro">
                                        <option value="" disabled="disabled" hidden="hidden" selected>Selecione o bairro</option>
                                        <option value="Bela Vista">Bela Vista</option>
                                        <option value="Bom Retiro">Bom Retiro</option>
                                        <option value="Cambuci">Cambuci</option>
                                        <option value="Consolação">Consolação</option>
                                        <option value="Liberdade">Liberdade</option>
                                        <option value="República">República</option>
                                        <option value="Santa Cecília">Santa Cecília</option>
                                        <option value="Sé">Sé</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select bairro campos" name="bairro" id="leste">
                                        <option value="" disabled="disabled" hidden="hidden" selected>Selecione o bairro</option>
                                        <optgroup label="Leste 1">
                                            <option value="Água Rasa">Água Rasa</option>
                                            <option value="Aricanduva">Aricanduva</option>
                                            <option value="Artur Alvim">Artur Alvim</option>
                                            <option value="Belém">Belém</option>
                                            <option value="Brás">Brás</option>
                                            <option value="Cangaíba">Cangaíba</option>
                                            <option value="Carrão">Carrão</option>
                                            <option value="Moóca">Moóca</option>
                                            <option value="Pari">Pari</option>
                                            <option value="Penha">Penha</option>
                                            <option value="São Lucas">São Lucas</option>
                                            <option value="Sapopemba">Sapopemba</option>
                                            <option value="Tatuapé">Tatuapé</option>
                                            <option value="Vila Formosa">Vila Formosa</option>
                                            <option value="Vila Matilde">Vila Matilde</option>
                                            <option value="Vila Prudente">Vila Prudente</option>
                                        </optgroup>
                                        <optgroup label="Leste 2">
                                            <option value="Cidade Líder">Cidade Líder</option>
                                            <option value="Cidade Tiradentes">Cidade Tiradentes</option>
                                            <option value="Ermelino Matarazzo">Ermelino Matarazzo</option>
                                            <option value="Guaianases">Guaianases</option>
                                            <option value="Iguatemi">Iguatemi</option>
                                            <option value="Itaim Paulista">Itaim Paulista</option>
                                            <option value="Itaquera">Itaquera</option>
                                            <option value="Jardim Helena">Jardim Helena</option>
                                            <option value="José Bonifácio">José Bonifácio</option>
                                            <option value="Lajeado">Lajeado</option>
                                            <option value="Parque do Carmo">Parque do Carmo</option>
                                            <option value="Ponte Rasa">Ponte Rasa</option>
                                            <option value="São Mateus">São Mateus</option>
                                            <option value="São Miguel">São Miguel</option>
                                            <option value="São Rafael">São Rafael</option>
                                            <option value="Vila Curuçá">Vila Curuçá</option>
                                            <option value="Vila Jacuí">Vila Jacuí</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select bairro campos" name="bairro" id="norte">
                                        <option value="" disabled="disabled" hidden="hidden" selected>Selecione o bairro</option>
                                        <optgroup label="Norte 1">
                                            <option value="Jaçanã">Jaçanã</option>
                                            <option value="Mandaqui">Mandaqui</option>
                                            <option value="Santana">Santana</option>
                                            <option value="Tremembé">Tremembé</option>
                                            <option value="Tucuruvi">Tucuruvi</option>
                                            <option value="Vila Guilherme">Vila Guilherme</option>
                                            <option value="Vila Maria">Vila Maria</option>
                                            <option value="Vila Medeiros">Vila Medeiros</option>
                                        </optgroup>
                                        <optgroup label="Norte 2">
                                            <option value="Anhanguera">Anhanguera</option>
                                            <option value="Brasilândia">Brasilândia</option>
                                            <option value="Cachoeirinha">Cachoeirinha</option>
                                            <option value="Casa Verde">Casa Verde</option>
                                            <option value="Freguesia do Ó">Freguesia do Ó</option>
                                            <option value="Jaraguá">Jaraguá</option>
                                            <option value="Limão">Limão</option>
                                            <option value="Perus">Perus</option>
                                            <option value="Pirituba">Pirituba</option>
                                            <option value="São Domingos">São Domingos</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select bairro campos" name="bairro" id="oeste">
                                        <option value="" disabled="disabled" hidden="hidden" selected>Selecione o bairro</option>
                                        <option value="Alto de Pinheiros">Alto de Pinheiros</option>
                                        <option value="Barra Funda">Barra Funda</option>
                                        <option value="Butantã">Butantã</option>
                                        <option value="Itaim bibi">Itaim bibi</option>
                                        <option value="Jaguara">Jaguara</option>
                                        <option value="Jaguaré">Jaguaré</option>
                                        <option value="Jardim Paulista">Jardim Paulista</option>
                                        <option value="Lapa">Lapa</option>
                                        <option value="Morumbi">Morumbi</option>
                                        <option value="Perdizes">Perdizes</option>
                                        <option value="Pinheiros">Pinheiros</option>
                                        <option value="Raposo Tavares">Raposo Tavares</option>
                                        <option value="Rio Pequeno">Rio Pequeno</option>
                                        <option value="Vila Leopoldina">Vila Leopoldina</option>
                                        <option value="Vila Sônia">Vila Sônia</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="input-select bairro campos" name="bairro" id="sul">
                                        <option value="" disabled="disabled" hidden="hidden" selected>Selecione o bairro</option>
                                        <optgroup label="Sul 1">
                                            <option value="Cursino">Cursino</option>
                                            <option value="Ipiranga">Ipiranga</option>
                                            <option value="Jabaquara">Jabaquara</option>
                                            <option value="Moema">Moema</option>
                                            <option value="Sacomã">Sacomã</option>
                                            <option value="Saúde">Saúde</option>
                                            <option value="Vila Mariana">Vila Mariana</option>
                                        </optgroup>
                                        <optgroup label="Sul 2">
                                            <option value="Campo Belo">Campo Belo</option>
                                            <option value="Campo Grande">Campo Grande</option>
                                            <option value="Campo Limpo">Campo Limpo</option>
                                            <option value="Capão Redondo">Capão Redondo</option>
                                            <option value="Cidade Ademar">Cidade Ademar</option>
                                            <option value="Cidade Dutra">Cidade Dutra</option>
                                            <option value="Grajaú">Grajaú</option>
                                            <option value="Jardim Ângela">Jardim Ângela</option>
                                            <option value="Jardim São Luís">Jardim São Luís</option>
                                            <option value="Marsilac">Marsilac</option>
                                            <option value="Parelheiros">Parelheiros</option>
                                            <option value="Pedreira">Pedreira</option>
                                            <option value="Santo Amaro">Santo Amaro</option>
                                            <option value="Socorro">Socorro</option>
                                            <option value="Vila Andrade">Vila Andrade</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div id="erro-regiao">
                                <p>Selecione uma das Regiões</p>
                            </div>
                            <div id="erro-bairro">
                                <p>Selecione um dos Bairros</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="box-button">
                    <input type="submit" name="submit" class="button block-envio" value="ENVIAR" id="button" disabled>
                </div>
            </div>
            <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
                <h3>Enviando questionário, aguarde...</h3>
            </div>
        </form>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>