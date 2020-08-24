<?php
function foo(&$bar)
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";


echo "</br>";

function destroy_foo()
{
    global $foo ;
    unset($foo);
}

$foo = 'bar';
$foo = 'texto';
echo $foo;

/*
 
 	8 tipos de dados PHP;


	unset exemplos
		Porque usar 
			- Destruir variaveis , liberando espaço na memória;
		e como usar 
			- unset(Var, var2, var3)
		e exemplos logicos; 
			- Destruir variavel de sessao se logado;

	isset exemplos
		Porque usar e como usar e exemplos logicos; 

*/

?>