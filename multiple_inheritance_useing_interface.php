<?php

interface my_print
{
	public function printdata();
}
interface select
{
	public function getdata();
}

interface myinterface extends my_print,select
{
	public function adddata();
}



class Myclass implements myinterface
{
	public function printdata()
	{
		echo "This Function will print Information"."<br>";
	}
	public function getdata()
	{
		echo "This Function will read Information"."<br>";
	}

	public function adddata()
	{
		echo "This Function will add Information"."<br>";
	}
}
class Myclass2 extends Myclass
{

}

$obj=new Myclass2();
$obj->printdata();
$obj->adddata();

?>