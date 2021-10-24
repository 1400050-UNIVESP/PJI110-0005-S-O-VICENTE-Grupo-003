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
	 Consultando Livros no Acervo da Biblioteca
	 <font size=5 color="darkblue">
	<?php
	    echo "<table border=5 bgcolor='lightblue'><tr><td><font size=6 color='darkblue'>";
		echo "<form method='post'>";
		echo "Tombo nº <input type='text' name='procurarnome' maxlength=40 placeholder='Procurar...' style='width:260px; height:30px; padding:5px; font-size:17px;'>&nbsp;";
		echo "<input type=submit name='procurar' value='Procurar' style='width:75px; height:30px; font-size:17px;'>";
		echo "<input type=submit name='excluir' value='Excluir' style='width:75px; height:30px; font-size:17px;'>";
		echo "<input type='submit' name='voltar' value='Voltar' style='color:blue; font-size:18px;'>";
		echo "</form>";
		if(isset($_POST['procurar']))
		{
		    include("conectar.php");
			$pesquisa= $_POST['procurarnome'];
			//$sql="SELECT * FROM tblivros WHERE titulo LIKE '$pesquisa%'";
			$sql="SELECT * FROM tblivros WHERE '$pesquisa'=tombo;";
			$result=mysqli_query($con,$sql);
            while($reg=mysqli_fetch_array($result))
			{
				echo "<font color='black'>Nº tombo: ".$reg['tombo'];
				echo "<br>Título: ".$reg['titulo'];
				echo "<br>Autor: ".$reg['autor'];
				echo "<br>Editora: ".$reg['editora'];
				echo "<br>Edição: ".$reg['edicao'];
				echo "<br>Nº de página: ".$reg['pagina'];
				echo "<br>Data de cadastro: ".$reg['datacadastro'];
			}
		}
		echo "</td><tr></table>";
		if(isset($_POST['excluir'])) 
		{
		    include("conectar.php");
			$livro= $_POST['procurarnome'];
		    $sql="DELETE FROM tblivros WHERE tombo = '$livro';";
			$result=mysqli_query($con,$sql);
		    echo "<font size=4 color='green' face='verdana'>Deletado com sucesso</font><br><br><br>";
		}
		if(isset($_POST['voltar']))
		  {
		    header('Location: index.html');
		  }
    ?>
	</body>
</html>		
