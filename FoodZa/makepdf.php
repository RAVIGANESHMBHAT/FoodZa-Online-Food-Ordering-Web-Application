<?php session_start();
require_once __DIR__ . '/vendor/autoload.php';

//grab variables
$name=$_SESSION['use'];
$dat=$_SESSION['dat'];
$history=$_SESSION['history'];
$total=$_SESSION['total'];


//create new pdf instance
$mpdf=new \Mpdf\Mpdf();

$data='';
$data.='<h1 style="color:blue;font-size:30px;">FoodZa...The comfortable food court.</h1>';
$data.='<h1 style="color:blue;font-size:15px;">Sahyadri Zone. Mangalore 575007</h1>';
$data.='<h1 style="color:blue;font-size:15px;">Contact: +91 9182736450</h1>';
$data.='<h1 style="color:blue;font-size:15px;">foodcorner@gmail.com</h1>';
$data.='<h1 style="color:blue;font-size:15px;">-------------------------------------------------------------------------------------------------------------------------</h1>';
$data.='<h1 style="color:blue;font-size:20px;">'.$dat.'</h1>';
$data.='<h1 style="color:blue;font-size:20px;">Customer Name: '.$name.'</h1>';
$data.='<h1 style="color:blue;font-size:15px;">-------------------------------------------------------------------------------------------------------------------------</h1><br/>';
$data.='<h1 style="color:blue;font-size:20px;">Order Details: </h1>';
$data.='<h1 style="color:blue;font-size:15px;">'.$history.'</h1>'.'<br/>';
$data.='<h1 style="color:blue;font-size:20px;">Total: ₹ '.$total.' /-</h1>';
$data.='<h1 style="color:blue;font-size:10px;">(Inclusive of all taxes.)</h1>';
$data.='<p style="text-align:center"><img src="images/sheff.jpg" alt="Sheff" height="200" width="200" align="center"></p>';
$data.='<br/>'.'<h1 style="color:blue;font-size:25px;">'.' '.' '.' '.' '.'Thank You...</h1>';
$data.='<h1 style="color:blue;font-size:25px;">'.' '.' '.' '.' '.'Visit Again..!</h1>';
$data.='<h1 style="color:blue;font-size:15px;">(Electrically generated receipt.)</h1>';
$data.='<br/>'.'<p style="text-align:right"><img src="images/admin_sign1.jpg" alt="Sheff" height="50" width="50" align="center"></p>';	
$mpdf->WriteHTML($data);

//output to browser
$name_of_file=$_SESSION['use'].'_'.'receipt.pdf';
$mpdf->Output($name_of_file,'D');
?>