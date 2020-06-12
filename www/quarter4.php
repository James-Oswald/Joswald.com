<!DOCTYPE html>
<html>
	<head>
		<?php include "mainhead.php";?>
		<title> Digital Notebook Q4 </title>
		<script type="text/javascript">
			
		</script>
		<style type="text/css">
		
			body
			{
				background:url("/Images/quarter4.jpg");
				background-size:100% 100%;
				text-align:center;
				background-attachment:fixed;
				font-size:14pt;
				font-family:arial;
			}
			
			#content
			{
				margin-top:3%;
				margin-left:15%;
				margin-right:15%;
				color:white;
				background-color:#0066FF;
				border-radius:50px;
				border:1px solid cyan;
				padding:5%;
			}
			
			p
			{
				text-align:left;
			}
			
			xmp
			{
				text-align:left;
				background-color:#707070;
				border:2px solid #888888;
				font-family:monospace;
			}
		</style>
	</head>
	<body>
		<?php include "main.php";?>
		<div id="content">
			<h1> Digital Notebook Quarter 4 </h1>
			<h2> By James Oswald </h2>
			<br/>
			<img src="http://6.asset.soup.io/asset/3165/1382_cf5c.jpeg"/>
			<hr/>
			<h1> Chapter 8 </h1>
			<h2> Vectors, Matrices, and Structs</h2>
			<hr/>
			<img src=""> 
			<hr/>
			<h2> Vectors </h2>
			<p>
				In order to understand how to use a vector, we need to ask some important questions:
			</p>
			<ol>
				<li> What is a vector? </li>
				<p>
					In C++, a vector is an array of a single type of varible. The varibles can all be accessed from the
					vector using an identifier number placed in [] brackets.
				</p>
				<br/>
				<li> How do you create a vector? </li>
				<p>
					<b> 
						Important Note!, when using vectors always to remember to use #include&lt;lvp\vector.h&gt; at the top of your
						cpp file! (Or if your cool like me, use the built in vectors with #include&lt;vector&gt;)
					</b><br/><br/>
					A vector is an object, this means that like all objects it must be created by something called a
					constructor method (more on constructors later). The constructor method is kind of like a varible 
					declaration for objects such as vectors. To start off a vector declaration, type "vector" to specify 
					the object that you want to create is indeed a vector. Follow up "vector" with the data type in &lt;&gt; tags.
					The data type can be any default type or object that you want, such as String, int, or even vector. Next add
					the desired name for the vector, this is what will be used to identify it when calling its methods and accessing
					its varibles. Following the name is a set of parenthesis with the object construction parameters, objects can
					have somthing called an overloaded constructor, making it possible for multiple ways to construct and object by
					sending it diffrent construction parameters.
					<br/><br/>
					Vectors have 4 construction methods:
				</p>
				<ol>
					<li> Vector::Vector() </li>
					<p>
						The default constuctor. It creates a vector of size 0/empty vector.
					</p>
					<br/>
					<li> Vector::Vector(int size) </li>
					<p>
						Creates a vector of the given size.
					</p>
					<br/>
					<li> Vector::Vector(int size, type default_fill_value) </li>
					<p>
						Creates a vector of a given size and fills every spot in the vector with the given fill value
						of the type that the vector is.
					</p>
					<br/>
					<li> Vector(const vector &lt;type&gt; &amp;vector_name)
					<p>
						Creates a duplicate coppy of the vector passed by the single vector parameter. 
					</p>
				</ol>
				<p>
					Here are some exemples of how to construct vectors in your real code.
				</p>
<xmp>
#include<vector>
#include<string>
	
using namespace std;

void main()
{
	vector <int> numbers(); 
	//creates an empty vector named "numbers"
	
	vector <string> names(5,"Bob"); 
	//creates a vector with 5 slots, all store the name "Bob"
	
	vector <int> numbers_copy(numbers);
	//creates an exact duplicate of the "numbers" vector
}	
</xmp>
				<br/>
				<li> How do you access values stored in a vector? </li>
				<p>
					Accessing values stored at a certain location in a vector is easy! Just use the vectors name and the location
					of the value in [] brackets at the end of the name. It is important to note that vector locations start at
					0! this means that declearing a vector of size 5 will have locations at 0,1,2,3,4 but not 5, attempting to access
					a fith location will result in an error!
					<br/><br/>
					Here are some examples of accessing vectors in real code:
				</p>
<xmp>
#include<iostream>
#include<vector>
#include<string>
	
using namespace std;

void main()
{
	vector <string> names(5);
	//creates a vector of 5 strings called "names"
	
	names[0] = "Jeff";
	names[1] = "Jim";
	names[2] = "Jill";
	names[3] = "Jack";
	names[4] = "Julian";
	//gives each of the 5 names in the vector is a value.
	
	for (int i = 0; i < names.size(); i++)
	{
		cout<<names[i]<<endl;
	}
	//outputs each name in the vector on a seprate line
}	
</xmp>				
				<li> What are Vector Methods? </li>
				<p>
					Vectors are objects. As you probably alredy know, all objects can access special functions called methods
					by doing .function_name() at the end of the name of the object. Vectors have 2 key methods that can be used
					with them.
				</p>
				<ol>
					<li> void vector::resize(int new_size) </li>
					<p>
						The resize method is used to resize a vector to the new size passed to it by the parameter.
						It should be noted that resizing a vector to a smaller size will distroy all data in the values that
						were after the location cut off. 
					</p>
					<br/>
					<li> void vector::size() (for #include&lt;vector&gt;) OR void Vector::length() 
					(for #include&lt;lvp\vector.h&gt;) </li>
					<p>
						The size() method returns the number of items in the vector. I an example can be found in the last
						exeample in which i uses the .size() method in a for loop to limit the number of times it looped to the
						size of the vector.
					</p>
				</ol>
			</ol>
			<hr/>
			<h2> Matrices </h2>
			<p>
				Matrices (singlular: Matrix) is, in simple terms, a vector of vectors, somewhat like a table. 
				This may sound complacted, but thankfully ive provided a visualzation.
			</p>
			<img src="/Images/vis.png"/>
			<p>
				As you can see here, matrices are a simple 2 dimentional array of values. They can be thought of as tables, this
				train of visualzation is particulary useful because many matrix methods are named after parts of a table. Lets look at
				some of the key features of matrices.
			</p>
			<ol>
				<li> Matrix Constuctors </li>
				<p>
					Matrices are constructed just like vectors, in that you need the type in &lt;&gt; folowing the object name.
					If you want an in depth overveiw of each part of a constructor, go back and look at the vector construtors section.
					<br/><br/>
					Matrices have 3 constuctors:
				</p>
				<ol>
					<li> Matrix::Matrix() </li>
					<p>
						The default constructor, creates an empty matrix with 0 rows and 0 columns.
					</p>
					<li> Matrix::Matrix(int rows, int cols) </li>
					<p>
						Creates a matrix with the given number of rows and columns.
					</p>
					<li> Matrix::Matrix(int rows, int cols, type fill_value) </li>
					<p>
						Creates a matrix with the given number of rows and columns, and fills every location in
						the matrix with the given fill value.
					</p>
				</ol>
				<li> Accessing matrix values </li>
				<p>
					Much like vectors, matrices can be accesed with [] brackets, however insted of just one set of brackets,
					you use 2 sets to signify its value as if it were on a table. i.e matrix_name[row#][col#].
				</p>
				<li> Matrix Methods </li>
				<p>
					Like vectors, matrices are objects and have special functions called methods that can modify them. Matrices have
					3 methods that can be used on them.
				</p>
				<ol>
					<li> int Matrix::numrows() </li>
					<p>
						This method retruns the number of rows in the matrix.
					</p>
					</br>
					<li> int Matrix::numcols() </li>
					<p>
						This method retruns the number of columns in the matrix.
					</p>
					</br>
					<li> void Matrix::resize(int new_rows, int new_cols) </li>
					<p>
						This method resizes the matrix to the new size provied in by the rows and columns parameters.
						Just like vector's resize method, any data in locations beyond the new size will be distroyed.
					</p>
				</ol>
			</ol>
			<p> 
				<b> Important Note!, remember to #include<lvp\matrix.h> </b><br/><br/> 
				Heres a giant exemple of matrix class in pratacle use in real code:
			</p>
<xmp>
#include<iostream.h>
#include<lvp\matrix.h>

void addnewemp(Matrix <int> &emp, int id, int salary)
{
	emp.resize(emp.numrows() + 1, emp.numcols());
	emp[emp.numrows()][0] = id;
	emp[emp.numrows()][1] = salary;
}

void main()
{
	Matrix <int> emp(0, 2);
	addnewemp(2023, 60000);
	addnewemp(2035, 50000);
	addnewemp(2098, 90000);
	for (int i = 0; i < emp.numrows(); i++)
	{
		cout<<"Employee "<<emp[0][i];
		cout<<" makes $"<<emp[1][i]<<" a year."<<endl; 
	}
}
</xmp>
		<hr/>
		</div>
	</body>
</html>
	
	