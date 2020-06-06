<form action="{{route('questoes.create')}}" method="post">

    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado" id="enunciado" cols="34" rows="10" class="form-control"></textarea></br>
    </div>

    <div class="form-group">
        <label for="respostaA">Resposta A:</label>
         <input type="text" name="respostaA" id="respostaA" class="form-control"><br>
    </div>

    <div class="form-group">
        <label for="respostaB">Resposta B:</label>
         <input type="text" name="respostaB" id="respostaB" class="form-control"><br>
    </div>

    <div class="form-group">
        <label for="respostaC">Resposta C:</label>
         <input type="text" name="respostaC" id="respostaC" class="form-control"><br>
    </div>

    <div class="form-group">
        <label for="respostaD">Resposta D:</label>
         <input type="text" name="respostaD" id="respostaD" class="form-control"><br>
    </div>

    <div class="form-group">
        <label for="respostaE">Resposta E:</label>
         <input type="text" name="respostaE" id="respostaE" class="form-control"><br>
    </div>

    <div class="form-group">
        <label for="valorTotal">Valor Total da Questão:</label>
         <input type="text" name="valorTotal" id="valorTotal" class="form-control"><br>
    </div>

    <button class="btn btn-lg btn-sucess">Criar Questão</button>

</form>