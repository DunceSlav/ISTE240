<?php
/*

$myVal=new xmlrpcval();

$myVal=new xmlrpcval($stringVal);

$myVal=new xmlrpcval($scalarVal, "int" | "boolean" | "string" | "double" | 
	"dateTime.iso8601" | "base64");

$myVal=new xmlrpcval($arrayVal, "array" | "struct");

The first constructor creates an empty value, which 
must be altered using the methods addScalar, addArray or addStruct 
	before it can be used.

The second constructor creates a simple string value.

The third constructor is used to create a scalar value. 
The second parameter must be a name of an XML-RPC type. Examples:

		  $myInt=new xmlrpcvalue(1267, "int");
		  $myString=new xmlrpcvalue("Hello, World!", "string");
		  $myBool=new xmlrpcvalue(1, "boolean");
		

The fourth constructor form can be used to compose complex XML-RPC 
values. The first argument is either a simple array in the case of an 
XML-RPC array or an associative array in the case of a struct. The 
elements of the array must be xmlrpcval objects themselves. 
Examples:

		  $myArray=new xmlrpcval(array(
		      new xmlrpcval("Tom"), new xmlrpcval("Dick"),
		      new xmlrpcval("Harry")), "array");

		  $myStruct=new xmlrpcval(array(
		      "name" => new xmlrpcval("Tom"),
		      "age" => new xmlrpcval(34, "int"),
		      "geek" => new xmlrpcval(1, "boolean")), "struct");

*/

?>