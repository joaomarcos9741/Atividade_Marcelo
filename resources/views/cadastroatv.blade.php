@extends('layout')
@section('content')
<div class="containe">
    <div class="formulario">
   <form action="processar.php" method="post" class="escreve">
    <h1 class="h1" >CADASTRO ATIVIDADE </h1>
        <label for="nome">Tarefa: </label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="disciplina">Disciplina:</label>
        <input type="text" id="disciplina" name="disciplina" required>
        <br><br>
        <label for="descrição">Descrição: </label>
        <input type="text" id="descrição" name="descrição" required>
         <input type="submit" value="Salvar" class="botao">

    </form> 
   </div>


</div>

@endsection