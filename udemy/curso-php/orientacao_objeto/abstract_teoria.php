<div class="titulo">Classe Abstrata - Teoria</div>

<div>
    <section>
        <strong>Linha de % com a implementação de métodos</strong><br>
        <br>Interface _______________Classe Abstrata_____________________ Classe Concreta 
        <ul>
            <li>Interface = (0% dos métodos implementados)</li>
                <ul>
                    <li>Define a assinatira do método</li>
                </ul>
            <li>Classe Concreta = (100% dos métodos implementados)</li>
                <ul>
                    <li>Pode ser instanciável</li>
                    <li>Obrigatoriamente, tem que ter 100% dos métodos implementados</li>
                </ul>
            <li>Classe Abstrata</li>
                <ul>
                    <li>Pode ter todos os métodos sem corpo - <strong>abstratos</strong></li>
                    <li>Pode ter todos os métodos implementados</li>
                    <li>Não pode ser <strong>INSTANCIADA</strong></li>
                    <li>Não deve se usar o new</li>
                    <li>Pode ser utilizada em classes, que não há necessidade de total implementação, visto o grau de generalização da classe em questão </li>
                </ul>
        </ul>

        <div>
            <ul>
                <li>Interface tem as suas vantagens, pois uma classe pode implementar várias interfaces aos mesmo tempo;</li>
                <li>Interface podem extender mais de uma interface também;</li>
            </ul>
        </div>
        <div>
            Classe com 4 métodos concretos, pode ser uma classe abstrata<br>
            Classe pode tern método abstrato e métodos concretos, também podem ser uma classe abstrata
            A únca objeção é que as classes concretas precisam de métodos definidos
        </div>
    </section>    
</div>