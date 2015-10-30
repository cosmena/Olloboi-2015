<?php include("head.php"); // HEAD: sesión, meta, css, script, title ?> 


<?php 
// Conecta coa BD
include("_BD_conecta.php");


echo "<div STYLE='margin:auto; width:900px; text-align:center'>";
//echo "<div STYLE='position:relative'><img src='imaxes/logo.png' width='160' height='160'></div>";









// Gañadores
// ===================================================
echo "<a name='Gañadores'></a>";
echo "<h2>Gañadores OlloBoi 2015 <img title='' src='imaxes/visto.png' width='50' height='50'></h2>";
echo "<ul>";
echo "<li>Pulsa nos Ollobois para ver o vídeo gañador en cada categoría.</li>";
echo "</ul>";

// Sentencia SQL: Selecciona as categorías 
$sql_cat = "SELECT * FROM categoria ORDER BY IDCategoria";
$res_cat = mysql_query($sql_cat, $Nomeen);

echo "\n\n<div STYLE='margin:auto;'>";
echo "<table border='0' align='center'>";
while($fcat = mysql_fetch_assoc($res_cat)) {
	if ($fcat['IDCategoria']==1 || $fcat['IDCategoria']==6) echo "<tr  valign='middle'>";
	$imaxeIcono="imaxes/emoticon/".$fcat['IconoCategoria']."30.png";
	echo "\n<td title='$fcat[NomeCategoria]: $fcat[Descrición]' align='center'>
			<a href='ganadores.php#$fcat[NomeCategoria]'>
			
			<img src='$imaxeIcono' ></a></td>";
			
	if ($fcat['IDCategoria']==5 || $fcat['IDCategoria']==10) echo "</tr>";
} // while
echo "</table>";
echo "</div>";


/*
// ENTREGA DE PREMIOS
//===================
echo "<h2>Festival OlloBoi <img title='' src='imaxes/logo.png' width='50' height='50'></h2>";
echo "<div STYLE='margin:auto; width:300px'>";
echo "<iframe width='300' height='210' src='https://www.youtube.com/embed/4-K42WyowHY?rel=0' frameborder='0' allowfullscreen></iframe>";
echo "</div>";

//echo "<br>";
echo "<h3>Sábado 30 de maio. Boiro.</h3>";

echo "<p>Consulta o <a href='programa.php'>programa</a> e <a href='https://docs.google.com/forms/d/1PvGMO28Jl9tmpafLkjrkyz2o5RkDyJucvTgQO-cHkMY/viewform' target='_blank'>confirma a túa asistencia!!</a></p>";
*/

// FASE DE VOTACIÓN
//===================
echo "\n\n<h2>Candidatos <img title='' src='imaxes/visto.png' width='50' height='50'></h2>";
echo "<p>Pulsa nos Ollobois para ver os <a STYLE='color:red' href='candidatos.php'>candidatos</a> en cada categoría de premios.</p>";

// Sentencia SQL: Selecciona as categorías 
$sql_cat = "SELECT * FROM categoria ORDER BY IDCategoria";
$res_cat = mysql_query($sql_cat, $Nomeen);

echo "\n\n<div STYLE='margin:auto;'>";
echo "<table border='0' align='center'>";
while($fcat = mysql_fetch_assoc($res_cat)) {
	if ($fcat['IDCategoria']==1 || $fcat['IDCategoria']==6) echo "<tr  valign='middle'>";
	$imaxeIcono="imaxes/emoticon/".$fcat['IconoCategoria']."30.png";
	echo "\n<td title='$fcat[NomeCategoria]: $fcat[Descrición]' align='center'>
			<a href='candidatos.php#$fcat[NomeCategoria]'>
			
			<img src='$imaxeIcono' ></a></td>";
			
	if ($fcat['IDCategoria']==5 || $fcat['IDCategoria']==10) echo "</tr>";
} // while
echo "</table>";
echo "</div>";





/*
echo "<p><a href='https://docs.google.com/forms/d/1VLbaAGjMo-H0i61BVitqcoZnx6t6Uxt6qd9Tb9Ua6aQ/closedform' target='_blank'>Vota polo premio do público!!</a></p>";
echo "<p>(ata o venres 22 de maio)</p>";
echo "<p>Proximamente: publicación de xurado e finalistas.</p>";


// UN CÓMPLICE Ó CHOU
// =====================================================
echo "<div STYLE='margin:auto; width:300px'>";

echo "<iframe width='300' height='210' src='https://www.youtube.com/embed/";
switch (rand(1,15)) {
	case 1: echo "2ArhTDq7Axs"; break;
	case 2: echo "88rJnYe4-ZA"; break;
	case 3: echo "5SFGAOUcLqQ"; break;
	case 4: echo "SnNObo8Ou70"; break;
	case 5: echo "G_ZOaf1jBRA"; break;
	case 6: echo "KWUg6AenM6o"; break;
	case 7: echo "l0zJ79e-2tU"; break;
	case 8: echo "WQOgwGmZIqg"; break;
	case 9: echo "IL7rhCyAiak"; break;
	case 10: echo "WCnpENeF2ok"; break;
	case 11: echo "qMvzjlKGeDM"; break;
	case 12: echo "kIIDzOBX4fw"; break;
	case 13: echo "26HpuiYQYgI"; break;
	case 14: echo "eWPbfNo4rqo"; break;
	case 15: echo "xTeKXD02jSc"; break;
};
echo "?rel=0' frameborder='0' allowfullscreen></iframe>";
//echo "<p STYLE='text-align:center'><b>Un cómplice ó chou!!</b></p>";

echo "</div>";

*/









  
 // ESTATÍSTICAS
//===================
echo "\n\n<h2>Algunhas Estatísticas <img title='' src='imaxes/visto.png' width='50' height='50'></h2>";
//echo "<h4 STYLE='text-decoration:line-through;'>Formulario de inscrición</h4>";


// DATOS ESTATÍSTICOS
//*******************
echo "<div>";
//echo "<h2>Algunhas estatísticas:</h2>";
$sql = "SELECT * FROM video";
$result = mysql_query($sql);

$_SESSION['NumVideos'] = mysql_num_rows($result); // Almacenamos o número de vídeos nunha variable de sesión
echo "<p><a href='listado_videos.php'>Total de Vídeos</a>: $_SESSION[NumVideos]</p>";

$sql = "SELECT distinct Codigo FROM centro_educativo, video WHERE video.Cod_Centro_Educativo=centro_educativo.Codigo";
$result = mysql_query($sql);
$NumCentros = mysql_num_rows($result); // obtemos o número de filas
echo "<p><a href='listado_centros.php'>Total de Centros</a>: $NumCentros</p>";
echo "</div>";
//echo "<p>&nbsp;</p>";


// UN CÓMPLICE Ó CHOU
// =====================================================
echo "<div STYLE='margin:auto; width:300px'>";

echo "<iframe width='300' height='210' src='https://www.youtube.com/embed/";
switch (rand(1,15)) {
	case 1: echo "2ArhTDq7Axs"; break;
	case 2: echo "88rJnYe4-ZA"; break;
	case 3: echo "5SFGAOUcLqQ"; break;
	case 4: echo "SnNObo8Ou70"; break;
	case 5: echo "G_ZOaf1jBRA"; break;
	case 6: echo "KWUg6AenM6o"; break;
	case 7: echo "l0zJ79e-2tU"; break;
	case 8: echo "WQOgwGmZIqg"; break;
	case 9: echo "IL7rhCyAiak"; break;
	case 10: echo "WCnpENeF2ok"; break;
	case 11: echo "qMvzjlKGeDM"; break;
	case 12: echo "kIIDzOBX4fw"; break;
	case 13: echo "26HpuiYQYgI"; break;
	case 14: echo "eWPbfNo4rqo"; break;
	case 15: echo "xTeKXD02jSc"; break;
};
echo "?rel=0' frameborder='0' allowfullscreen></iframe>";
//echo "<p STYLE='text-align:center'><b>Un cómplice ó chou!!</b></p>";

echo "</div>";







/*
// UN PARTICIPANTE Ó CHOU
// =====================================================
// Sentencia SQL: selecciona 1 video aleatorio
$sentencia = "SELECT * FROM video WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM video) ORDER BY RAND() LIMIT 1";
$resultado = mysql_query($sentencia, $Nomeen); 

echo "<div STYLE='margin:auto; width:300px'>";

$fila = mysql_fetch_assoc($resultado);
if (stripos($fila['URL'], "youtu")) // Se é un vídeo de Youtube
	$imarco="<iframe width='300' height='210' src='https://www.youtube.com/embed".strrchr($fila['URL'], '/')."?rel=0' frameborder='0' allowfullscreen></iframe>";
elseif (stripos($fila['URL'], "vimeo"))  // Se é un vídeo de Vimeo
	$imarco="<iframe src='https://player.vimeo.com/video".strrchr($fila['URL'], '/')."?byline=0&portrait=0 width='400' height='210' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
echo $imarco;

//echo "<p STYLE='text-align:center'><b>Un participante ó chou!!</b></p>";

echo "</div>";
*/
 
  
  
  
  
  
  
  
  
  
  
  echo "</div>";
  
  
  // Libera la memoria del resultado
  mysql_free_result($result);
  
  // Cierra la conexión con la base de datos 
  mysql_close($Nomeen); 
?> 

<?php include("pe.php"); // Pé de páxina ?>
</body> 
</html> 
