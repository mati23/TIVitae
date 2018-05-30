<!DOCTYPE html>

<html>
 <head>
 <title> TIVitae </title>
 <meta name="description" content="TIVitae">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>

 <body>
  <h1> Bem vindo TIvitae</h1>
  <h2> Ajudando desenpregados a conseguir emprego</h2><br />

<form action="Script_do_Formulario.php" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" id="nome">
   </td>
 </tr>
   <tr>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome" id="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" value="dd" id="dia">
   <input type="text" name="mes" size="2" maxlength="2" value="mm" id="mes">
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa" id="ano">
   </td>
  </tr>
  <tr>
    <td height="24">Telefone:</td>
    <td><input type="text" name="Telefone" maxlength="12" OnKeyPress="formatar('##-####-####', this)" id="telefone" ></td>
  </tr>
  <tr>
  <td>
   <label for="Formação">Formação: </label>
  </td>
  <td align="left">
   <input type="text" name="Formação" id="formacao">
  </td>
 </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Cidade do candidato</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade" id="cidade">
   </td>
  </tr>
   </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email" id="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" id="imagem" >

   </td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login" id="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit" id="enviar">
<input type="reset" value="Limpar" id="limpar">
</form>

 </body>
</html>
