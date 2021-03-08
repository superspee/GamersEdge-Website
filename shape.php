<?php
class Shape
{
	public function __construct($length,$breadth,$radius)
	{
		$this->length=$length;
		$this->breadth=$breadth;
		$this->radius=$radius;
	}
}
class Rectangle extends Shape
{
	public function area_rect()
	{	
		$res=$this->length * $this->breadth;
		echo "Area of Rectangle=$res";
		echo "</br>";
	}
}
class Square extends Shape
{
	public function area_suqare()
	{
		$res=$this->length * $this->length;
		echo "Area of Square=$res";
		echo "</br>";
	}
}
class Circle extends Shape
{
	public function area_circle()
	{
		$res=3.14 * $this->radius * $this->radius;
		echo "Area of Circle=$res";
		echo "</br>";
	}
}

$re=new Rectangle(10,20,5);
$re->area_rect();
$sq=new Square(10,20,5);
$sq->area_suqare();
$ci=new Circle(10,20,5);
$ci->area_circle();
?>