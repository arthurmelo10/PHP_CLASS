<div class="titulo">Pilar 02</div>

<div>
    <p><strong>Herança</strong></p>
    <section>
        Herança surgiu devido a necessidade de reuso de código. Temos duas formas de reuso de código:
            <ul>
                <li>Composição</li>
                <ul>
                    <li>Existe uma relação de "tem um(a)"</li>
                    <li>Objetos mais complexos é composto por objetos mais simples</li>
                    <li>Além de objetos, o objeto pode ter dados mais básicos, como constantes</li>
                    <ul>
                        Exemplos:
                        <li>Carro tem um motor => reuso da classe motor por parte da classe carro</li>
                        <li>Carro tem portas => reuso da classe porta por parte da classe carro</li>
                        <li>CAsa tem uma cozinha => classe casa faz reuso da classe cozinha</li>
                    </ul>
                </ul>
                <li>Herança</li>
                <ul>
                    <li>Existe uma relação "é um(a)"</li>
                    <li>As características podem ser reusadas a partir deste mecanismo de herança</li>
                    <li>O objeto recebe características de uma classe pai</li>
                    <ul>
                        <li>Civic é um carro => tudo que a classe carro tem, o objeto civic tem</li>
                        <li>Gato é um mamífero</li>
                        <li>Maçã é uma fruta</li>
                    </ul>
                </ul>
            </ul>

        Preferencialmente, é melhor utilizar composição do que herança. No mundo real e em aplicações, é mais comum ver composição do que heranças.
    
    </section>

    <hr>

    <section>
        <p><strong>Exemplo de Herança</strong></p>
        <ul>
            Animal
            <ul>
                <li>Mamífero</li>
                <ul>
                    <li>Aquático</li>
                    <li>Terrestre</li>
                </ul>
            </ul>
            <ul>
                <li>Anfíbio</li>
                <ul>
                    <li>Sapo</li>
                </ul>
            </ul>
        </ul>
        Cada vez mais, vai aumentando a especificidade, e poucos objetos irão se encaixar nas descrições. 
        Quando saímos do nível mais baixo para o nível mais alto, a expressão "é um" se torna verdadeira.

        <p>
            A partir do momento que vai subindo nesta hierarquia, menos métodos e atributos são colocados nas classes mais genéricas. Será colocadono nível de animal, somente comportamentos 
            e características que todos os animais possuem, como por exemplo Respiração . <br>
            A paritr do momento que vai descendo na árvore, a classe filha reebe por herança os comportamentos da classe pai.  
        </p>
    </section>

    <hr>

    <section>
        <p><strong>Nomenclatura</strong></p>
        <ul>
            <li>Super Classe => GENÉRICA</li>
                <ul>
                    <li>Classe pai</li>
                </ul>
            <li>Sub Classe =>ESPECÍFICA</li>
            <ul>
                <li>Classe filha</li>
            </ul>
        </ul>

        Uma super classe, pode ser sub classe de uma outra super classe. <strong>Sempre a relação é entre duas classes</strong>.
    </section>
</div>