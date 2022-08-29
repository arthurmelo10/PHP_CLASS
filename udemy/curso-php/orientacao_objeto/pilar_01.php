<div class="titulo">Pilar 01 - Encapsulamento</div>

<div>
    <strong>Pilares da Programação Orientada a Objeto</strong>
    <ol>
        <li>Encapsulamento</li>
        <li>Herança</li>
        <li>Polimorfismo</li>
        <li>Abstração</li>
    </ol>

    <hr>
    <p><b>Encapsulamento</b></p>
    <ul>
        <li>Não precisar entender a implementação interna de um objeto</li>
        <li>Não precisa conhecer os detalhes internos para implementar ela</li>
        <li>Necessário conhecer a interface de implementação</li>
        <li>Simplesmente vai precisar interagir com os métodos e atributos que estão visíveis</li>
        <ul>
            <li>Quais são os parâmetros que este método recebe</li>
            <li>Que tipo de retorno ele devolve (tipo de dado)</li>
            <li>Precisa saber o nome do método</li>
        </ul>
        <li>Mas não precisa entender como que o método foi implementado internamente</li>    
    </ul>

    <section>
        É possível que tenhamos mais coisas dentro do objeto, como por exemplo: 
        <ul>
            <li>Um atributo privado</li>
            <li>Método que não é visíviel (privado)</li>
            <li>Pode ter uma constante</li>
        </ul>
    </section>

    <p>
        Só teremos acesso aos métodos e atributos que estão com a visibilidade pública.<br>
        Parte do objeto é interno e parte pode ser acessado externamente.
        Aquilo que está interno do objeto, está <strong>ENCAPSULADO</strong>, está escondido, não precisa o usuário interagir !
    </p>

    <p>
    Esta capsula é o objeto, que agrupa dois tipos de coisa, os atributos(propriedades) e comportamentos(métodos). Pode esconder parte dos detalhes de implementação.<br>
    <br>A vantagem é você ter uma complexidade no seu programa, mas ela está dividida em pequenas partes. Cada parte é responsável pelo funcionamento da aplicação.
    Cada classe tem uma responsabilidade

    Esconder estes detalhes de implementação e só usar o que foi colocado como público. Coloca-se somente uma funcionalidade simples, sem precisar detalhar a complexidade de um objeto.
    </p>
    <b>Exemplo</b>
    <ul>
        <li>Ecommerce => finalização de compra</li>
        <ul>
            <li>Provavelmente, existe alguma classe, objeto ou método responsável por executar a ação de finalizar a compra</li>
            <li>Classe possui uma complexidade enorme, e dificultaria e muito as demais classes que precisam utilizar as suas funcionalidades</li>
            <li>Devemos passar as informações de entrada (parâmetros) e a classe é responsável por toda a implementação </li>
        </ul>
    </ul>

    <section>
        <p><strong>Forma de Implementação</strong></p>
        Modificadores de acesso implementam o encapsulamento do PHP. Podem ser implementados em atributos e métodos.
        <ol>
            <li>Public</li>
            <ul>
                <li>
                    Visível para todos que possuam acesso a classe;
                </li>
            </ul>
            <li>Protected</li>
            <ul>
                <li>
                    É visível dentro da própria classe e de suas classes filhas, é transmitida por herança;
                </li>
            </ul>
            <li>Private</li>
            <ul>
                <li>
                    Garante que o método ou atributo, será enxergado e utilizado dentro da prórpia classe;
                </li>
            </ul>
        </ol>
        <p>
            A partir destes modificadores, definimos se um código terá acesso ou não a um membro de uma classe.
        </p>
    </section>

</div>