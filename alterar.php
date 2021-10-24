<html>
<style>
	    body { 
              background-image: url('fundo.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 100% 100%; 
              }
</style>
    <font size=8 color="darkblue"><center>
	<img src="livros.png" width=140 height=140 align="center">
	Cadastrando Livros no Acervo da Biblioteca
	<font size=6 color="darkblue"><center>
	<form method="post">
		Tombo<br>
		<input type="text" name="txttombo" size=11 maxlength=11 style="color:red; font-size:18px;"><br><br>
		<input type="submit" name="conectar" value="Conectar" style="color:blue; font-size:18px;">
		<input type="submit" name="voltar" value="Voltar" style="color:blue; font-size:18px;">
	</form>
	<?php
		include("conectar.php");
		if(isset($_POST['conectar']))
		{
		    $tombo= $_POST['txttombo'];
		    $sql="select * from tblivros where tombo = '$tombo'";
		    $result=mysqli_query($con,$sql);
            while($reg=mysqli_fetch_array($result))
		    {
			    echo "<form method='post'>";
				echo "Tombo ";
			    echo "<input value='$reg[tombo]' type='text' name='txttombo' maxlength=40 style='color:red; font-size:18px;'><br>";
				echo "Título ";
			    echo "<input value='$reg[titulo]' type='text' name='txttitulo' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "Autor ";
			    echo "<input value='$reg[autor]' type='text' name='txtautor' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "Editora ";
			    echo "<input value='$reg[editora]' type='text' name='txteditora' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "Nº de edição ";
			    echo "<input value='$reg[edicao]' type='text' name='txtedicao' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "Nº de páginas ";
			    echo "<input value='$reg[pagina]' type='text' name='txtpagina' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "Data Cadastro ";
			    echo "<input value='$reg[datacadastro]' type='text' name='txtdatacadastro' maxlength=40 style='color:red; font-size:18px;'><br>";
			    echo "<input type=submit name='alterar' value='Alterar' style='color:red; font-size:18px;'>";
			    echo "</form><br><br>";
		    }
		}
		?>
		<?php
			include("conectar.php");
			if(isset($_POST['alterar']))
			{
			    $tombo= $_POST['txttombo'];
				$titulo = $_POST['txttitulo'];
				$autor = $_POST['txtautor'];
				$editora = $_POST['txteditora'];
				$edicao = $_POST['txtedicao'];
				$pagina = $_POST['txtpagina'];
				$datacadastro = $_POST['txtdatacadastro'];
				$sql="update tblivros set titulo = '$titulo', autor='$autor', editora='$editora', edicao='$edicao', pagina='$pagina', datacadastro='$datacadastro' where tombo = '$tombo'";
				$result=mysqli_query($con,$sql);
                echo "<font size=4 color='green' face='verdana'>Editado com sucesso</font><br><br>";
			}
			if(isset($_POST['voltar']))
		    {
		        header('Location: index.html');
		    }
		?>
	</body>
</html>