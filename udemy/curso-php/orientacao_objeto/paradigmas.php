<div class="titulo">Paradigmas Programação</div>

<p>Paradigma de Orientação Obejto</p>

<div>
    A partir dos paradigmas, vai ser mais fácil entender mais fácil as diretrizes do paradigma.

    Paradigma é uma forma de organização de idiéias, e isso será refletido na organização do software;

    <section>
        <h3>Códigos não estruturados</h3>
        <br>Antigamente, haviam mais linguagens de baixo nível, linguagens de máquina, necessidade de conhecer a arquitetura de computador
         
        <ul>
            <strong>'Go To'</strong>
            <li>Faz um desvio para um outro trecho de código</li>
            <li>Sempre desviando o fluxo de aplicação para determinados pontos de código, e torna um códiugo muito difícil de ser mantido</li>
            <br><b>Código macarronico</b>
        </ul>
    </section>
    
    <hr>

    <section>
        <h3>Paradigmas Procedural</h3>
        Baseado em procedimento, funções (rotinas). Conceito de função trabalhado nos capítulos anteriores
        Laços de repetição, procedimentos (funções)
        Não é a mesma coisa de paradigma funcional
        Trata os dados de uma forma mais global, que gera impactos em outras partes do sistema

        
    </section>
    
    <hr>

    <section>
        <h3>Paradigmas Funcional</h3>
        Possui outros principios

        Enquanto no paradigma procedural, Recebendo dados, alterando dados de forma global, recebendo e alterando informações durante a execução de Programação

        Trabalha com estado imutável e evolução dos dados, mais voltado para a definição de função matemática, composição de função, função como variável

        No PHP podemosusar técnicas de programação Funcional

    </section>
    
    <hr>

    <section>
        <h3>Paradigmas Orientação a Objetos</h3>
        <div>
            Existe uma frase => "Paradigma procedural o ator princiapl é a função e na POO é o dado"

            Função serve para receber os dados, alterar os dados e retornar os dados

            <ul>
            <b>Exemplo</b>
                <li>formatarData(nnascimento);
                    possibilidade de alterar valoes por referência e causa mudanças em outros pontos do código</li>

                <li>nascimento -> formatarData();</li>
                A classe cria um objeto e o objeto é o dado, uma vez que o dado foi criado, o objeto tem as funções e este método vai mexer nos atributos internos
                <strong>o dado que era passado como argumento, ele passa a ser o ator principal</strong>

                Objeto é um cara que agrupa as duas coisas, atributo e comportamento
            </ul>
        </div>
    </section>

</div>

<?php
