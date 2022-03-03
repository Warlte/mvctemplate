<?php

/**
 *
 */
class model_startpage
{

  function __construct()
  {

  }

  public function getVolvo($dbcon){
  		//vi ansluted till databasen
  		$dbpdo= __construct();
  		//$cidc = filter_input(INPUT_GET, 'countyid', FILTER_SANITIZE_STRING);

  		//vi hämtar informationen vi behöver ifrån databasen och lagrar den
  		$sql="SELECT  komentarer.text, komentarer.in_pk, komentarer.in_fk, komentarer.rubrik  FROM  komentarer";


  		$stmt=$dbpdo->prepare($sql);
  		$stmt->execute();

  		//vi skriver ut vårat svar som Json kod så att det kan användas lättare
  		$dbarray=$stmt->fetchAll(PDO::FETCH_ASSOC);
  		echo json_encode( $dbarray,JSON_PRETTY_PRINT );


}}
?>
