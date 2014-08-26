<!DOCTYPE html>
<html>
    <head>
        <title>Multiplayer - Colunista </title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <fieldset id="frmNovaMateria">
        <form name="formulario" action="inserirMateriaNova.php" id="cadastroForm" method="post" onSubmit="return validar();"> 
             <label class="stringNovaMateria"> Nome: </label>  <input type="text" class="txtsNovaMateria" size='35' name="nomeMateria" placeholder="Nome da Matéria"/> <br/>
              <label class="stringNovaMateria"> Categoria: </label>
             <select name="categoriaMateria">
                    <option selected value="1" id="Ps3"> Ps3 </option>
                    <option value="2" id="Ps4"> Ps4 </option>
                    <option value="3" id="Wii_U"> Wii U </option>
                     <option value="4" id="3ds"> Nintendo 3DS </option>
                      <option value="5" id="360"> Xbox 360 </option>
                       <option value="6" id="x_one"> Xbox One </option>
                        <option value="7" id="pc"> Pc </option>
             </select><br/><br/>
             <label class="stringNovaMateria"> Descrição: </label> <textarea class="txtsNovaMateria"  cols="45" name="descricao" id="descricao" > </textarea> <br/><br/>
             <label class="stringNovaMateria"> Conteúdo:  </label><textarea class="txtsNovaMateria"  cols="100" rows="50" name="conteudo" id="conteudo" > </textarea> <br/>
             <input type="hidden" readonly="readonly" class="txtsNovaMateria" name="dataMateria" value=" <?php print date('d-m-Y'); ?> "/> <br/>
    <input type="hidden"  readonly='readonly' class="txtsNovaMateria" name="horaMateria" value=" <?php echo date('H:i:s'); ?> " /> <br/>
            <label class="stringNovaMateria"> Autor:      </label><input type="text" class="txtsNovaMateria" name="autor"/> <br/>
            <label class="stringNovaMateria"> Url:      </label><input type="text" class="txtsNovaMateria" name="url"/> <br/>
            
             <input type="submit" name="cadastrar" value="Postar Matéria"/>
             <input type="reset" name="limpar" value="Limpar"/>
        </form>
        </fieldset>
   </body>
</html>