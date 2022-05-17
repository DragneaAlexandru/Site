<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
<html>

<head>
<title> Proiect Tehnologii Web </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://codepen.io/sean_codes/pen/e6f1ea02b2c69845a796acd688299990.css?v=13">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="functii.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
alert(" Proiect Tehnologii Web \n\n Dragnea Niculae Alexandru \n Facultatea de Informatica UTM \n Anul 2 Grupa 202 IF")
</script>
<script> 
$(document).ready(function(){ // codul jQuery se scrie aici
$("p").click(function(){
$(this).hide();//show();
}); 
});
</script>

</head>

<body>

<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>

<p>©Dragnea Niculae Alexandru</p>

<marquee behavior=scrolling direction=right  width="1000″  bgcolor="#00CC00">👻</marquee>
<ul id="nav">

<li><a href="https://to-wyvern.netlify.app/">Acasa</a></li>

<li><a href="https://edition.cnn.com/">Stiri</a></li>

<li><a href="#">Laborator</a>
<ul>
<li><a href="#">Lab 1</a>
<ul>
<li><a href="/curs1/WEB1/WEB1.html">Ex 1</a>
<li><a href="/curs1/WEB2/WEB2.html">Ex 2</a>
</ul>
</li>

<li><a href="#">Lab 2</a>
<ul>
<li><a href="/curs2/Exemplu1.html">Exemplu1</a>
<li><a href="/curs2/Exemplu2.html">Exemplu2</a>
<li><a href="/curs2/Exemplu3.html">Exemplu3</a>
<li><a href="/curs2/CSS APP/aplicatie.html">CSS App</a>
<li><a href="/curs2/CanvasLinie.html">CanvasLinie</a>
<li><a href="/curs2/SVG_Cerc.html">SVG_Cerc</a>
<li><a href="/curs2/SVG_Ellipse.html">SVG_Ellipse</a>
<li><a href="/curs2/SVG_Linie.html">SVG_Linie</a>
<li><a href="/curs2/SVG_Polygon.html">SVG_Polygon</a>
</ul>
</li>

<li><a href="#">Lab 3</a>
<ul>
<li><a href="/curs3/aplicatie1_TRANSLATION.html">TRANSLATION</a>
<li><a href="/curs3/aplicatie2_ROTATE.html">ROTATE</a>
<li><a href="/curs3/aplicatie3_SCALING.html">SCALING</a>
<li><a href="/curs3/aplicatie4_TRANSFORM.html">TRANSFORM</a>
<li><a href="/curs3/aplicatie5_BORDER.html">BORDER</a>
</ul>
</li>

<li><a href="#">Lab 4</a>
<ul>
<li><a href="/curs4/CSS APP/aplicatie.html">APP</a>
<li><a href="/curs4/CSS APP/contact.html">Contact</a>
</ul>
</li>

<li><a href="#">Lab 5</a>
<ul>
<li><a href="/curs5/APP/Aplicatie _background.html">Background</a>
<li><a href="/curs5/APP/Aplicatie_change_photo.html">Change Photo</a>
<li><a href="/curs5/APP2/Aplicatie_functii.html">Functii</a>
<li><a href="/curs5/testl.html">Testl</a>
</ul>
</li>

<li><a href="#">Lab 6</a>
<ul>
<li><a href="/curs6/App1-TVA/Aplicatie_curs6.html">TVA</a>
<li><a href="/curs6/App2-Radio/Radio_ex.html">Radio Button</a>
<li><a href="/curs6/App3-FINAL/Aplicatie_functii.html">FINAL</a>
</ul>
</li>

<li><a href="#">Lab 7</a>
<ul>
<li><a href="/curs7/Aplicatii/Aplicatie - Copy.html">Copy</a>
<li><a href="/curs7/Aplicatii/Aplicatie _DeleteClick.html">Delete Click</a>
<li><a href="/curs7/Aplicatii/Aplicatie -Accordion.html">Accordion</a>
<li><a href="/curs7/Aplicatii/Aplicatie -Div.html">Div</a>
<li><a href="/curs7/Aplicatii/Aplicatie -Draggable.html">Draggable</a>
<li><a href="/curs7/Aplicatii/Aplicatie -Fade.html">Fade</a>
<li><a href="/curs7/Aplicatii/Aplicatie.html">Aplicatie</a>
</ul>
</li>

<li><a href="#">Lab 8</a>
<ul>
<li><a href="/curs8/loghin.html">Login</a>
<li><a href="/curs8/ex3.html">Alege culoare</a>
<li><a href="/curs8/ex4.html">Chestionar</a>
</ul>
</li>

</ul>
</li>

<li><a href="#">Cursuri</a>
<ul>
<li><a href="/Cursuri/curs 1_Tehnologii Web 2022.docx">Curs 1</a>
</li>

<li><a href="/Cursuri/Curs 2.pdf">Curs 2</a>
</li>

<li><a href="/Cursuri/Curs 3_Stiluri CSS3_2021_2022.pdf">Curs 3 CSS</a>
</li>

<li><a href="/Cursuri/Curs 4 WEB.pptx">Curs 4 CSS</a>
</li>

<li><a href="/Cursuri/curs_5_JS.pptx">Curs 5 JS</a>
</li>

<li><a href="/Cursuri/Curs 6_Functii si aplicatii JS.docx">Curs 6 Functii</a>
</li>

<li><a href="/Cursuri/Curs 7 JQUERY.pdf">Curs 7 JQUERY</a>
</li>

<li><a href="/Cursuri/Curs_aplicatii_9_PHP.docx">Curs 9 PHP</a>
</li>

<li><a href="/Cursuri/Curs_Aplicatii_10.docx">Curs 10 PHP</a>
</li>

<li><a href="/Cursuri/Curs_Laborator12.docx">Curs 12 XML</a>
</li>

</ul>
</li>

<li><a href="#">Lectura</a>
<ul>
<li><a href="/Lectura/The Art of SEO (2nd Edition).pdf">The Art of SEO (2nd Edition).pdf</a></li>

<li><a href="#">HTML</a>
<ul>
<li><a href="/Lectura/html5_tutorial.pdf">HTML Tutorial</a>
<li><a href="/Lectura/HTML5 Canvas.pdf">HTML Canvas</a>
</ul>
</li>

<li><a href="#">CSS</a>
<ul>
<li><a href="/Lectura/Exemple CSS3 - curs 3.docx">CSS Exemple</a>
<li><a href="/Lectura/css3_the_missing_manual_3rd_edition.pdf">CSS Manual</a>
</ul>
</li>

<li><a href="#">JS/JQUERY</a>
<ul>
<li><a href="/Lectura/javascript_the_definitive_guide_6th_edition.pdf">JS Guide</a>
<li><a href="/Lectura/JavaScript & jQuery- The Missing Manual, 3rd Edition.pdf">JS/JQUERY Manual</a>
</ul>
</li>

</ul>
</li>

</ul>
  


</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>