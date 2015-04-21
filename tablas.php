<html>
	<head>
		<title>Pruebas</title>
	</head>
	<body>
		<?php
			class Tablas {
			  public $numInicio;
			  public $numFinal;

			  public function inicial($inicio)
			  {
			    $this->numInicio=$inicio;
			  }

			  public function numFinal($final)
			  {
			    $this->numFinal=$final;
			  }

			  

			  public function imprimirTablas()
			  {
			    echo 'Numero Inicial:',$this->numInicio,'<br>';
			    echo 'Cuantas tablas desea mostrar:',$this->numFinal,'<br><br>';
			    
			 	$limite=$this->numInicio+$this->numFinal;
			 	for($this->numInicio;$this->numInicio<$limite;$this->numInicio++){
			 		for($i=0;$i<12;$i++){
			 			echo $this->numInicio, 'x', $i,'=', $this->numInicio*$i,'<br>';

			 		}
			 	}
			  }
			}

			$tablas=new Tablas();
			$tablas->inicial('1');
			$tablas->numFinal('16');
			$tablas->imprimirTablas();
			
		?>
	</body>
</html>
