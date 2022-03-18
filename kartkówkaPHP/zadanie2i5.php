<form action="" method="POST">>
Podaj liczbe do Fibonaciego
    <input name="Fib">
    <input type="submit" name="Submit">
</form>
<?php
$i =$_POST ['Fib'];
function fib($i)
{
   if($i == 0) return 0;
   else if ($i == 1) return 1;
   else
   {
      return fib($i-1) + fib($i-2);
   }
}
echo (fib($i));
?>