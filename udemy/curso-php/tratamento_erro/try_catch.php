<div class="titulo">Try/Catch</div>

<?php
echo '<strong>Exemplo 1: Bloco try/catch </strong><br>';

// echo 7/0;

// echo intdiv(7,0);

// try {
//     echo intdiv(7,0);
// } catch {
//     echo 'Teve um erro aqui !!<br>';
// } 

echo '
<pre>
try {
    echo intdiv(7,0);
    /**
     * Bloco pensado para quando um código pode gerar um tipo de erro
     * Usuário pode causar algum erro
     * O próprio programador pode causar erros
     * PROGRAMAÇÃO DEFENSIVA
     */
} catch (Error $erro) {
    /**
    * Sempre no catch precisamos definir o tipo do erro, é obrigatório
    * Pode ser Error, Throwable 
    */
    echo "Teve um erro aqui 1 !!";
} catch (Exception $exception) {
    echo "Teve um erro aqui 2 !!";
    /**
     * Podemos ter mais de um catch, sem problemas
     * Podemos ter mais de um bloco catch, <br>quando queremos ter tratamentos diferentes para diferentes tipos de erro
     */
}
</pre>';

try {
    echo intdiv(7,0);
    /**
     * Bloco pensado para quando um código pode gerar um tipo de erro
     * Usuário pode causar algum erro
     * O próprio programador pode causar erros
     * PROGRAMAÇÃO DEFENSIVA
     */
} catch (Error $erro) {
    /**
    * Sempre no catch precisamos definir o tipo do erro, é obrigatório
    * Pode ser Error, Throwable 
    */
    echo 'Teve um erro aqui 1 !!<br>';
} catch (Exception $exception) {
    echo 'Teve um erro aqui 2 !!<br>';
    /**
     * Podemos ter mais de um catch, sem problemas
     * Podemos ter mais de um bloco catch, quando queremos ter tratamentos diferentes para diferentes tipos de erro
     */
}

echo 'Após o tratamento do erro, a aplicação continua com o seu funcionamento normal. <br>
Agora, sem o tratamento do erro, ela irá parar<br>';


echo '<hr>';

echo '<strong>Exemplo 2: Uso de Exception </strong><br>';

echo '
<pre>
try {
    throw new Exception("um erro muito estranho aconteceu");
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo "Divisão por zero";
} catch (Throwable $e) {
   /**
    * Qualquer coisa que pode ser lançada
    */
    echo "Erro conhecido: $e->getMessage()"; 
    /**
     * Messagem é passada na chamada da exception, como parâmetro para seu construtor
     */
}
</pre>';

try {
    throw new Exception('um erro muito estranho aconteceu');
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e) {
   /**
    * Qualquer coisa que pode ser lançada
    */
    echo 'Erro conhecido: '. $e->getMessage(). '<br>'; 
    /**
     * Messagem é passada na chamada da exception, como parâmetro para seu construtor
     */
}

echo '<hr>';

echo '<strong>Exemplo 3: Inversão das exceções</strong><br>';

echo '
<p>
Sempre colocar as exceções mais específicas antes, e as mais genéricas depois
</p>';


echo '
<pre>
try {
    new Exception("um erro muito estranho aconteceu");
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     */
     echo "Erro conhecido: $e->getMessage()"; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} catch(DivisionByZeroError $erro) {
    echo "Divisão por zero";
}
</pre>';

try {
    new Exception('um erro muito estranho aconteceu');
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     * POlimorfismo na veia !!!!
     */
     echo 'Erro conhecido: '. $e->getMessage(). '<br>'; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} catch(DivisionByZeroError $erro) {
    echo 'Divisão por zero<br>';
}

echo '<hr>';

echo '<strong>Exemplo 4: Uso do Finally </strong><br>';

echo '<pre>
try {
    throw new Exception("um erro muito estranho aconteceu");
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo "Divisão por zero";
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     * POlimorfismo na veia !!!!
     */
     echo "Erro conhecido: $e->getMessage()"; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} finally {
 /**
 * Sempre será executado, independente do try ou do catch
 * Se o try executou de forma correta, vai cair no finally
 * Mas mesmo que caia no cantnch, vai cair no finally
 */

 echo "Sempre executado !!";
}
</pre>';

try {
    throw new Exception('um erro muito estranho aconteceu');
    //echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     * POlimorfismo na veia !!!!
     */
     echo 'Erro conhecido: '. $e->getMessage(). '<br>'; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} finally {
 /**
 * Sempre será executado, independente do try ou do catch
 * Se o try executou de forma correta, vai cair no finally
 * Mas mesmo que caia no cantnch, vai cair no finally
 */

 echo 'Sempre executado !!<br>';
}

echo '<pre>
try {
    new Exception("um erro muito estranho aconteceu");
    echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo "Divisão por zero";
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     * POlimorfismo na veia !!!!
     */
     echo "Erro conhecido: $e->getMessage()"; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} finally {
 /**
 * Sempre será executado, independente do try ou do catch
 * Se o try executou de forma correta, vai cair no finally
 * Mas mesmo que caia no cantnch, vai cair no finally
 */

 echo "Sempre executado !!";
}
</pre>';

try {
    new Exception('um erro muito estranho aconteceu');
    //echo intdiv(7,0);
    /**
     * Exceptionse referencia uma exceção a regra de tudo funcionar
     * Errtor são para coisas mais graves
     * Exceptions, são mais para violação de regras (de negócio?)
     * Podemsos criar nossas próprias excessões
     */
} catch(DivisionByZeroError $erro) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e) {
    /**
     * Qualquer coisa que pode ser lançada
     * POlimorfismo na veia !!!!
     */
     echo 'Erro conhecido: '. $e->getMessage(). '<br>'; 
     /**
      * Messagem é passada na chamada da exception, como parâmetro para seu construtor
      */
} finally {
 /**
 * Sempre será executado, independente do try ou do catch
 * Se o try executou de forma correta, vai cair no finally
 * Mas mesmo que caia no cantnch, vai cair no finally
 */

 echo 'Sempre executado !!<br>';
}


echo 'Execução continua ...<br>';