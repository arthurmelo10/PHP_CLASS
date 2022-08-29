<div class="titulo">Pilar 03 - Polimorfismo</div>

<div>
    <p><strong>Polimorfismo</strong></p>
    <section>
        Pode ser definido como múltiplas formas.
        <br>Pode ser feito de duas formas, em termos de programação:
            <ul>
                <li>Estático (sobrecarga)</li>
                <ul>
                    <li>Sobrecarga de Métodos - criação de dois métodos com o mesmo nome;</li>
                    <li><strong style="color: red;">ISSO NÃO EXISTE EM PHP !! NÃO É POSSÍVEL TER DOIS MÉTODOS COM O MESMO NOME DENTRO DO MESMO CONTEXTO (CLASSE)</strong></li>
                    <li>Em objetos, classes, contextos diferentes, pode haver métodos com o mesmo nonme, mas non mesmo contexto, NÃO</li>
                    <li>Para chamar métodos com parâmetros diferentes, podemos utilizar a técnica de parâmetros padrões</li>
                    <li><b>Exemplo:</b> não posso ter dois métodos construtores</li>
                </ul>
                <li>Dinâmico</li>
                <ul>
                    <li>Para ter polimorfismo dinâmico, é necessário ter <strong>herança</strong></li>
                    <li>
                        <div>
                            Linguagem com tipos definidos => Vai estar presente mais em linguagens fortemente tipadas.<br>
                            PHP não possui uma tipagem forte, mais voltada para tipagem dinâmica.<br>
                            Quando temos uma herança, <b>por exemplo:</b><br>
                            <uL>
                                <li>Class Carro</li>
                                <ul>
                                    <li>Class Civic</li>
                                    <li>Class Ferrari</li>
                                </ul> 
                                Civic $c = new Civic => tipo de objeto Civic é na verdade uma instanciação da classe Civic
                                Carro $c = new Civic => É possível criar um objeto referenciado a uma classe mais geral, mas instanciar a uma classe mais específica
                                $c = new Ferrari() => em cima da mesma variável, é possívelç ir trocando os subtipos, os tipos mais específicos, mesmo trabalhando com o tipo da variável mais genérico
                            </uL>
                        </div>
                    </li>
                    <li>
                        No PHP, podemos ver polimorfismo quando definimos o tipo de uma variável:
                        <ul>
                            <li>function estacionar (Carro $c) {...}</li>
                            <ul>
                                <li>A variável c é do tipo carro, então, pode receber tantno um objeto da classe Civic, como também receber um objeto da classe Ferrari</li>
                                <li>A função vai receber qualquer objeto de uma classe que herde da função Carro, que seja estendida de carro</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
            </ul>
    </section>
</div>