@extends('layout')
@section('content')
<div class="containe">

   <div class="formulario">
   <form action="processar.php" method="post" class="escreve">
    <h1 class="h1" >CADASTRO </h1>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
         <input type="submit" value="Entrar" class="botao"/>

         <br><br>
         <a href="{{ route('index')}}">Voltar</a>
    </form>
   </div>

    <div class="direito">
        <h1 class="titulo">Sistema que permite ter controle das suas tarefas escolares de forma prática ;)</h1>
        <p class="text">Acesso às suas atividades diárias, cronogramas semanais/mensais, entre outros...</p>
    </div>
</div>

@endsection