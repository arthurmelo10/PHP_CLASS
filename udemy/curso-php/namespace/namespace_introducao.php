<div class="titulo">Namespace Introdução</div>

<div>
    <p>
        Namespace é um recurso bastante importante, para dividir a aplicação em espaços de nomes.
    </p>
    <section>
        <ul>
            <li>Criar áreas de nomes, para evitar <strong>conflitos</strong>.</li>
            <li>Exemplo: Função soma só pode ser criada uma vez, se está sendo trabalhado em contexto global.</li>
            <li>Objetivo é evitar conflitos com a própria API do PHP, como dentro do próprio sistema, <br> caso uma função possua o mesmo nome tanto na aplicação como na API, por exemplo</li>
            <li>Biblioteca de datas</li>
        </ul>
    </section>
    <section>
        <ul>
            <li>Nomes longos podem ser criados nos namespaces</li>
            <li><strong>Possibilidade de criar apelidos, referências => alias (renomear, com um nonme reduzido)</strong></li>
        </ul>
    </section>
    <div>
        <ul>
            Escopo global => gera conflitos e desorganização
                <li>API PHP</li>
                <li>Aplicação</li>
                <li>Bibliotecas</li>
        </ul>
        <p>
            Criar espaços de nomes para organizar o código, de acordo com sua funcionalidade<br>
            Possibilita que possamos ter funções com o mesmo nome, mas que por estarem em namespaces diferentes, não geram conflito
        </p>
    </div>
</div>