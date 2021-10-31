     <font size=8 color="darkblue"><center>
	 Cadastro extintores
	 <font size=6 color="darkblue"><center>
	 <br><br>
     <table border=6>
        <tr>
        <td>		
	    <form method="post">
		   <font size=5>Numeração do extintor <input type="text" name="txtnumero" size=11 maxlength=11 style="color:red; font-size:18px;"><br>
		   <font size=5>Localização <input type="text" name="txtlocal" size=40 maxlength=40 style="color:red; font-size:18px;"><br>
		   <font size=5>Tipo (A, B, C, ABC) <input type="text" name="txttipo" size=40 maxlength=40 style="color:red; font-size:18px;"><br>
		   <font size=5>Capacidade <input type="text" name="txtcapacidade" size=40 maxlength=40 style="color:red; font-size:18px;"><br>
		   <br><center>
		   <input type="submit" name="gravar" value="Gravar" style="color:blue; font-size:18px;">
	    </form>
        </td>		
		</tr>
	 </table><hr>	
        <?php 
		  
	      if(!empty($_TEXT['txtnumero']))
		  {
		    $tombo=$_POST['txtnumero']; 
			$titulo=$_POST['txtlocal'];
			$autor=$_POST['txttipo'];
			$editora=$_POST['txtcapacidade'];
			include("conectar.php");
            $sql = "insert into tbequipamentos VALUES('$ext_ID','$local','$tipo','$capacidade')";
			echo "<script>alert('Dados gravados com sucesso')</script>";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
		  }	
		?>
 	