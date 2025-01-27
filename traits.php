<?php 
/* tarits use on simple*/
trait Stu
{
public function demo(){
	echo "hello ravi new";
}
}
class base
{
	use Stu;
}
$base =new base;
echo $base->demo();
/* close tarits use on simple*/
trait Stu
{
public function demo(){
	echo "hello yugal";
}
}
trait Mang
{
public function demo(){
	echo "welcome yugal";
}
}
class base
{
	use Stu;
}
$base =new base;
echo $base->demo();

?>