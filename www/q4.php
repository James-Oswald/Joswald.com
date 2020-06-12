<!DOCTYPE html>.............
 <html>
 	<head>
 		<?php include "mainhead.php";?>
 		<title> Digital Notebook Quarter 4 </title>
 		<script type="text/javascript">
 			
			var indexopen = false; 	
			
 			function index()
 			{
				var index = document.getElementById("index");
 				if (!(indexopen))
 				{
					index.removeChild(index.firstChild);
					table = document.getElementById("index_table").cloneNode(true);
					table.style = "display:table;";
					var close = document.createElement("button");
					var line = document.createElement("hr");
					close.innerHTML = "Close Index";
					close.setAttribute("onclick", "closeindex()");
					close.setAttribute("class", "cusbut");
					index.appendChild(table);
					index.appendChild(line);
					index.appendChild(close);
					indexopen = true;
 				}
			}
			
			function delay()
			{
				indexopen = false;
			}
			
			function closeindex()
			{
				var index = document.getElementById("index");
				var closed = document.createElement("p");
				while (index.firstChild) 
				{
					index.removeChild(index.firstChild);
				}
				closed.innerHTML = "Index";
				closed.setAttribute("class", "cusbut");
				index.appendChild(closed);
				setTimeout(function()
				{
					delay();
				}, 500); //500 milliseconds
			}
 		</script>
 		<style type="text/css">
 			body
 			{
				background:url("http://jozwald.com/Images/quarter4.jpg");
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

 			p, h1, h2, h3, h4, h5, h6, li
 			{
 				text-align:left;
 			}
			
			button
			{
				border:0px;
			}
 			
 			xmp
 			{
 				text-align:left;
 				background-color:#707070;
 				border:2px solid #888888;
 				font-family:monospace;
 			}
			
			#index
			{
				margin:0px;
				padding:7px;
				position:fixed;
				border-radius:25px;
				background: rgb(130,70,40);
				border: 2px solid gray;
				text-align:center;
			}
			
			a
			{
				text-decoration:none;
			}
			
			.cusbut
			{
				color:black;
				border-radius:25px;
				background:cyan;
				padding:5px;
				margin:10px;
			}
			
			.cusbut:hover
			{
				background:yellow;
			}
 		</style>
 	</head>
 	<body>
 		<?php include "main.php";?>
 		<div id="index" onclick="index()">
 			<p class="cusbut"> Index </p>
 		</div>
 		<div id="content">
 			<h1> Digital Notebook Quarter 4 </h1>
 			<h2> By James Oswald </h2>
 			<br/>
 			<img src="https://67.media.tumblr.com/74f5100f2299bc55f01d788c13ed7c4b/tumblr_nqtnre7Fj51uum06fo1_500.gif"/>
 			<hr/>
			<h1 id="ch8"> Chapter 8 </h1>
			<a id="top"></a>
 			<h2> Vectors, Matrices, and Structs</h2>
			<img src="http://jozwald.com/Images/matrix.png"/>
 			<hr/>
 			<h2 id="vec"> Vectors </h2>
 			<p>
 				In order to understand how to use a vector, we need to ask some important questions:
 			</p>
 			<ol>
 				<li> What is a vector? </li>
 				<p>
 					In C++, a vector is an array of a single type of variable. The variables can all be accessed from the
 					vector using an identifier number placed in [] brackets.
 				</p>
 				<br/>
 				<li> How do you create a vector? </li>
 				<p>
 					<b> 
 						Important Note!, when using vectors always to remember to use #include&lt;lvp\vector.h&gt; at the top of your
 						cpp file! (Or if you're cool like me, use the built in vectors with #include&lt;vector&gt;)
 					</b><br/><br/>
 					A vector is an object, this means that like all objects it must be created by something called a
 					constructor method (more on constructors later). The constructor method is kind of like a variable 
 					declaration for objects such as vectors. To start off a vector declaration, type "vector" to specify 
 					the object that you want to create is indeed a vector. Follow up "vector" with the data type in &lt;&gt; tags.
 					The data type can be any default type or object that you want, such as String, int, or even vector. Next add
					the desired name for the vector, this is what will be used to identify it when calling its methods and accessing
 					its variables. Following the name is a set of parenthesis with the object construction parameters, objects can
 					have something called an overloaded constructor, making it possible for multiple ways to construct and object by
 					sending it different construction parameters.
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
 						Creates a duplicate copy of the vector passed by the single vector parameter. 
 					</p>
 				</ol>
 				<p>
 					Here are some examples of how to construct vectors in your real code.
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
 					Accessing values stored at a certain location in a vector is easy! Just use the vector's name and the location
 					of the value in [] brackets at the end of the name. It is important to note that vector locations start at
 					0! this means that declaring a vector of size 5 will have locations at 0,1,2,3,4 but not 5, attempting to access
					a fifth location will result in an error!
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
 						It should be noted that resizing a vector to a smaller size will destroy all data in the values that
 						were after the location cut off. 
 					</p>
 					<br/>
 					<li> void vector::size() (for #include&lt;vector&gt;) OR void Vector::length() 
 					(for #include&lt;lvp\vector.h&gt;) </li>
 					<p>
 						The size() method returns the number of items in the vector. An example of this can be found in the previous
 						example in which I use the .size() method in a for loop to limit the number of times it looped to the
 						size of the vector.
 					</p>
 				</ol>
 			</ol>
 			<hr/>
 			<h2 id="matrix"> Matrices </h2>
 			<p>
 				Matrices (singlular: Matrix) is, in simple terms, a vector of vectors, somewhat like a table. 
 				This may sound complicated, but thankfully I've provided a visualzation.
 			</p>
 			<img src="http://jozwald.com/Images/vis.png"/>
 			<p>
 				As you can see here, matrices are a simple 2 dimentional array of values. They can be thought of as tables, this
 				train of visualzation is particularly useful because many matrix methods are named after parts of a table. Let's look at
 				some of the key features of matrices.
 			</p>
 			<ol>
 				<li> Matrix Constuctors </li>
 				<p>
 					Matrices are constructed just like vectors, in that you need the type in &lt;&gt; folowing the object name.
 					If you want an in depth overview of each part of a constructor, go back and look at the vector construtors section.
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
 						This method returns the number of rows in the matrix.
 					</p>
 					</br>
 					<li> int Matrix::numcols() </li>
 					<p>
 						This method returns the number of columns in the matrix.
 					</p>
 					</br>
 					<li> void Matrix::resize(int new_rows, int new_cols) </li>
 					<p>
 						This method resizes the matrix to the new size provided by the rows and columns parameters.
 						Just like vector's resize method, any data in locations beyond the new size will be destroyed.
 					</p>
 				</ol>
 			</ol>
 			<p> 
 				<b> Important Note!, remember to #include&lt;lvp\matrix.h&gt; </b><br/><br/> 
 				Here's a giant exemple of matrix class in pratical use in real code:
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
 		<h2 id="struct"> Structs </h2>
 		<p>
 			A struct is a simplified object blueprint, the diffrence between a struct and a class is that objects that use
 			a struct blueprint can not access methods, but just member variables that can be accesed with a "." dot.
 		<p>
		<p>
			A struct is started off with the "struct" keyword followed by the name of the struct. It is followed up with the body
			enclosed in {} brackets, but unlike other things that use {} brackets, the final } bracket is followed by a semi-colon(;).
			inside the {}; are the various varibles that each object of the type of struct will contain. Also inside the {}; is
			the object constructor method (or methods if you're overloading the constructor like you should), this method is
			used to create objects of that struct type in your code. The constructor is declared simply by stating the struct name
			followed by parenthesis containing the construction parameters. Once your constructor is declared in the struct body, you
			still need to declare what the constructor does with those parameters, this is done under the struct declaration by 
			declaring the constructor as a method, here's an outline:
		</p>
<xmp>		

struct struct_name
{
	struct_name();  
	//A default constructor (one with no parameters)
	
	struct_name(int an_integer_variable, vector <string> a_vector_object);
	//A non-default constructor with construction parameters
	
	int an_integer_variable;
	vector <string> a_vector_object;
	//variables and objects in the struct
};

struct_name::struct_name()
:an_integer_variable(0), a_vector_object(0)
{
}

struct_name::struct_name(int an_int, vector <string> a_vector)
:an_integer_variable(an_int), a_vector_object(a_vector)
{
}
</xmp>	
		<p>
			Structs can be declared in main using their constructor and have their member values accessed with "." dot.
			Here is a real example of a struct in use:
		</p>
<xmp>
#include<iostream>
#include<vector>
#include<string>

using namespace std;

struct Human
{
	Human();
	Human(string name, int age, vector <string> &friends)
	string name;
	int age;
	vector <string> friends;
};

Human::Human()
:name(""), age(-1), friends(0)
{
}

Human::Human(string name_, int age_, vector <string> &friends_)
:name(name_), age(age_), friends(friends_)
{
}

void main()
{
	vector <Human> people(2);
	vector <string> friends(2);
	friends[0] = "pepe";
	friends[1] = "Jack";
	people[0] = Human john("John", 13, friends);
	friends[0] = "John";
	friends[1] = "Rick";
	people[1] = Human james("James", 15, friends);
	for (int i = 0; i < people.size(); i++)
	{
		cout<<"Name: "<<people[i].name<<endl;
		cout<<"Friends: ";
		for (int j = 0; j < people[i].friends.size(); j++)
		{
			cout<<people[i].friends[j]<<",";
		}
		cout<<endl<<endl;
	}
}
</xmp>
			<hr/>
			<h1 id="ch10"> Chapter 10 </h1>
			<h2> Classes and Methods </h2>
			<img src="http://6.asset.soup.io/asset/3165/1382_cf5c.jpeg"/>
			<hr/>
			<h2 id="class"> Classes </h2>
			<p>
				A class is a true blueprint for an object, it is like a struct but is able to contain methods, which are
				member functions as well as the member objects and variables that could be included in structs. 
			</p>
			<p> 
				A class is created very simalrly to a struct. It is started by stating the "class" keyword, followed by the
				name of the class and its body in {};. The key difference between structs and classes is the concept of public
				and private members. A public member can be called in methods and outside the class, while a private member
				can only be accessed in the class's methods.
			</p>
<xmp>

#inclue<string>

using namespace std;

class game //declare class
{
	private: //begin private declarations
		int age;
	
	public: //begin public declarations
		game(string name, int age); 
		//the constructors should always be public!
		
		string name;
};

game::game(string name_, int age_)
:name(name_), age(age_) 
/*age can be accesed because game::game() 
is a constructor method of game*/
{
}

void main()
{
	game terraria("Terraira", 8);
	terraria.name = "Terraria Otherworld"; 
	//leagal because .name is public
	
	terraria.age = "10"; 
	//illegal because .age is a private memeber
}
</xmp>
			<hr/>
			<h2 id="meth"> Methods (Classes Continued) </h2>
			<p>
				A method is a member function of a class. They are declared in a way that is like a combination between a constructor
				and a function. Note that a constructor is just a special type of method. Methods are typically declared in the
				public section of a class while the member variables are left in the private section and are gotten to by methods
				called the accessor and mutator methods.
			</p>
			<ul>
				<li> Accessor Methods </li>
				<p>
					Accessor methods return a private member for the rest of the program to use.
				</p>
				<li> Mutator Methods </li>
				<p>
					Mutator methods allow you to change a private member variable in the program.
				</p>
			</ul>
			<p>
				Constructors are declared in a way that is like a combination between a constructor
				and a function. In the actual class they are declared by putting their return type followed
				by their name and their parameter types and names in parentheses. To actually declare them after the class body 
				you begin with the return type followed by the name of the class the method belongs to, followed by :: followed by
				the method name their parameter types and names in parentheses. Here's an example of some accessor and mutator methods.
			</p>
<xmp>

class adder
{
	private:
		int a, b;
	public:
		adder(); //default constructor
		adder(a,b); //non-default constructor
		int geta(); //accessor for a
		int getb(); //accessor for b
		void newa(int a); //mutator for a
		void newb(int b); //mutator for b
		int sum();
};

adder::adder()
:a(0),b(0)
{
}

adder::adder(int a_, int b_)
:a(a_), b(b_)
{
}

int adder::geta()
{
	return a;
}

int adder::getb()
{
	return b;
}

void adder::newa(int a_)
{
	a = a_;
}

void adder::newb(int b_)
{
	b = b_;
}

int adder::sum()
{
	return a + b;
}
</xmp>
			<p>
				Accessing methods can be done with .method_name(parameters) after the object you wish to modify, let's pretend that
				adder class from the above example was a .h file that we included in the following program.
			</p>
<xmp>
#include<iostream>
#include"adder.h"

void main()
{
	int r1, r2;
	adder a(); //using the default constructor
	a.newa(5); //accesing a mutator
	a.newb(6);
	r1 = a.geta() + a.getb(); //accessing the accessors
	r2 = a.sum() //using the sum method 
	cout<<r1<<" "<<r2<<endl;
}
</xmp>
			<hr/>
			<h1 id="ch11"> Chapter 11 <h1>
			<h2> GUI programing </h2>
			<img src="http://s2.quickmeme.com/img/bf/bf70e32f90bbc9beea7669c99bd0eadf31af17e5f69668bb3583e8945b361b4c.jpg"/>
			<hr/>
			<h2 id="gui"> GUI Class </h2>
			<p>
				A GUI, short for Graphical User Interface is a visual way of interating with a program that
				makes the experice of useing a program easier and more fulfilling then just typing on a DOS prompt
				as one does with #include<iostream>. Making a GUI is easy if you follow these steps. 
			</p>
			<ol>
				<li> Open Microsoft Visual C++ </li>
				<li> Follow This click path </li>
				<ol>
					<li> File </li>
					<li> New </li>
					<li> Win32 Application </li>
					<li> Ok <li>
				</ol>
				<li> Create a new text document</li>
				<li> Copy and paste the following code </li>
<xmp>
#include <lvp\gui_top.h>

class GuiClass
{
	public:
		GuiClass();
		void GuiMouseClick(int x, int y); // Action if mouse click
		void GuiPaint(); // Repaint the entire window
		String Title(); // Return the title for the Window
	private:
};

GuiClass::GuiClass()
{
	
}

String GuiClass::Title()
{
	return &quot;Title of OutPut Screen&quot;;
}

void GuiClass::GuiMouseClick(int x, int y)
{

}

void GuiClass::GuiPaint()
{

}

#include <lvp\gui_bot.h>
</xmp>
			</ol>
			<p>
				A breif explination of what this does is in order
			<p>
			<ul>
				<li> #include &lt;lvp\gui_top.h&gt; </li>
				<p>
					Includes the top header file for the class and its methods  
				</p>
				<li> class GuiClass {...};</li>
				<p>
					Leave the predefined members alone but feel free to add your own memebers in order to give functinalty
					to the GUI.
				</p>
				<li> GuiClass::GuiClass() </li>
				<p>
					Used to instantiate objects and memebers of GUI class.
				<p>
				<li> String GuiClass::Title() </li>
				<p>
					Place your own window name as the return value in order to name the window that your program appears in.
				</p>
				<li> void GuiClass::GuiMouseClick(int x, int y) </li>
				<p>
					passes x and y cordanates of a mouse click to the method, they should be stored as private members
					in GUI class so they can be used in GuiClass::GuiPaint().
				</p>
				<li> void GuiClass::GuiPaint() </li>
				<p>
					The most important method, uses painting methods to paint what ever you want. It is re-executed ever mouse
					click to allow for dynamic placing of objects.
				</p>
				<li> #include &lt;lvp\gui_bot.h&gt; </li>
				<p>
					Includes the bottem header file for the class and its methods.
				</p>
			</ul>
			</hr>
			<h2 id="paint"> Painting Methods </h2>
			<p>
				Painting methods are used in the body of the GuiClass::GuiPaint() method. There are alot of them with many diffrent uses
				heres the list:
			</p>
			<ul>
				<li>void Circle(int xc, int yc, int r);</li>
				<li>void FilledCircle(int xc, int yc, int r);</li>
				<li>void Line(int x1, int y1, int x2, int y2);</li>
				<li>void Rectangle(int x1, int y1, int x2, int y2);</li>
				<li>void FilledRectangle(int x1, int y1, int x2, int y2);</li>
				<li>void SetPixel(int x, int y);</li>
				<li>SetFillColor(COLORREF Color);</li>
				<li>SetColor(COLORREF Color);</li>
				<li>void FloodFill(int x, int y);</li>
				<li>void DrawText(String &amp;S);</li>
				<li>void DrawText(int N);</li>
				<li>void DrawText(long N);</li>
				<li>void DrawText(double N);</li>
				<li>void DrawCenteredText(String &amp;S);</li>
				<li>void DrawCenteredText(int N);</li>
				<li>void DrawCenteredText(long N);</li>
				<li>void DrawCenteredText(double N);</li>
				<li>void gotoxy(int x, int y); </li>
				<li>int wherex();</li>
				<li>int wherey();</li>
				<li>void SetTextFont( String FontName);</li>
				<li>void SetTextColor(COLORREF NewColor);</li>
				<li>void SetTextSize(int NewFontSize);</li>
				<li>GetMaxX();</li>
				<li>GetMaxY();</li>
				<li>int MessageBox(String Text, String Title);</li>
				<li>int MessageBoxYN(String Text, String Title);</li>
				<li>PostQuitMessage(0);</li>
			</ul>
			<p><b> Note: COLORREF is a data type that represents the name of a color in all capital letters! NOT A STRING </b></p>
			<hr/>
			<h2 id="butt"> Button Class </h2>
			<p> 
				Button class is a class that includes methods that allow for a more interactive GUI. It is
				created by coppying the below code under the #include "&lt;lvp\gui_top.h&gt;" but above the "class GuiClass {...};" 
			</p>
<xmp>
class ButtonClass 
{
    public:
		ButtonClass(String Text, int X1,int Y1, int X2, int Y2);
		/* Creates a button with upper left corner at X1,Y1 and lower
		right corner at X2,Y2 with Text centered in box */
		ButtonClass();
		void SetButton(String Text, int X1,int Y1, int X2, int Y2);
		void Paint();
		bool IsHit(int x, int y);
		/* Returns true if and only if (x,y) is on the button */
    private:
		int MyX1, MyY1, MyX2, MyY2;
		String MyText;
 };

ButtonClass::ButtonClass()
{
	
}

ButtonClass::ButtonClass(String Text, int X1,int Y1, int X2, int Y2)
:MyText(Text), MyX1(X1), MyY1(Y1), MyX2(X2), MyY2(Y2)
/* Creates a button with upper left corner at X1,Y1 and lower
right corner at X2,Y2 with Text centered in box */
{
	
}

void ButtonClass::SetButton(String Text, int X1,int Y1, int X2, int Y2)
/* Sets button with upper left corner at X1,Y1 and lower
right corner at X2,Y2 with Text centered in box */
{
    MyText = Text;
    MyX1 = X1;
    MyY1 = Y1;
    MyX2 = X2;
    MyY2 = Y2;
}

void ButtonClass::Paint()
{
	SetColor(BLACK);
	SetThickness(2);
	Rectangle(MyX1,MyY1,MyX2,MyY2);
	gotoxy((MyX1+MyX2)/2, 5+(MyY1+MyY2)/2);
	DrawCenteredText(MyText);
}

bool ButtonClass::IsHit(int x, int y)
/* Returns true if and only if point (x,y) is on the button */
{
	return (x >= MyX1 && x <= MyX2 && y >= MyY1 && y <= MyY2);
}
</xmp>
			<p> 
				Button class is declared in class GuiClass {...};'s private member section and is instantiated in
				GuiClass::GuiClass(). It has multiple methods that you should know.
			</p>
			<ul>
				<li> ButtonClass::ButtonClass() </li>
				<p>
					Default constructor, not much to see here.
				</p>
				<li> ButtonClass::ButtonClass(String Text, int X1,int Y1, int X2, int Y2) </li>
				<p>
					Constructor, cretes a new button with the text value centered between the start piont cordanates and
					end point cordanates.
				</p>
				<li> void ButtonClass::SetButton(String Text, int X1,int Y1, int X2, int Y2) </li>
				<p>
					Same thing as the non-default constructor.
				</p>
				<li> void ButtonClass::Paint() </li>
				<p>
					Used in GuiClass::GuiPaint() to actually display the button on the screen.
				</p>
				<li> bool ButtonClass::IsHit(int x, int y) </li>
				<p>
					Used to detcet if the button is hit at the given cordanates when a mouse click event
					is triggerd.
				</p>
			</ul>
			<hr/>
			<h1 id="hw"> Homeworks </h1>
			<hr/>
			<h2 id="hw8"> Chapter 8 </h2>
			<a href="http://jozwald.com/hw/8r3.html"><div class="cusbut"> Review 3 </div></a><br/>
			<a href="http://jozwald.com/hw/8r9.html"><div class="cusbut"> Review 9 </div></a><br/>
			<a href="http://jozwald.com/hw/8r18.html"><div class="cusbut"> Review 18 </div></a><br/>
			<a href="http://jozwald.com/hw/8r21.html"><div class="cusbut"> Review 21 </div></a><br/>
			<a href="http://jozwald.com/hw/8e10.html"><div class="cusbut"> Exercise 10 </div></a><br/>
			<a href="http://jozwald.com/hw/8e11.html"><div class="cusbut"> Exercise 11 </div></a><br/>
			<hr/>
			<h2 id="hw10"> Chapter 10 </h2>
			<a href="http://jozwald.com/hw/10r3.html"><div class="cusbut"> Review 3 </div></a><br/>
			<a href="http://jozwald.com/hw/gla.html"><div class="cusbut"> Grocery List Assignment </div></a><br/>
			<hr/>
			<h2 id="hw11"> Chapter 8 </h2>
			<a href="http://jozwald.com/hw/11r10.html"><div class="cusbut"> Review 10 </div></a><br/>
			<a href="http://jozwald.com/hw/yft.html"><div class="cusbut"> Your Face Task </div></a><br/>
 		</div>
 		<table id="index_table" style="display:none;">
 			<tr>
 				<th><a href="#ch8"><div class="cusbut">Chapter 8</div></a></th>
 				<th><a href="#ch10"><div class="cusbut"> Chapter 10 </div></a></th>
 				<th><a href="#ch11"><div class="cusbut"> Chapter 11 </div></a></th>
 				<th><a href="#hw"><div class="cusbut"> Homeworks </div></a></th>
 			</tr>
 			<tr>
 				<td><a href="#vec"><div class="cusbut"> Vectors </div></a></td>
				<td><a href="#class"><div class="cusbut"> Classes </div></a></td>
				<td><a href="#gui"><div class="cusbut"> GUI class</div></a></td>
				<td><a href="#hw8"><div class="cusbut"> Chapter 8 Hws</div></a></td>
 			</tr>
 			<tr>
 				<td><a href="#matrix"><div class="cusbut">Matrices</div></a></td>
				<td><a href="#meth"><div class="cusbut">Methods</div></a></td>
				<td><a href="#paint"><div class="cusbut">Painting Methods</div></a></td>
				<td><a href="#hw10"><div class="cusbut"> Chapter 10 Hws </div></a></td>
 			</tr>
			<tr>
 				<td></td>
				<td></td>
				<td><a href="#butt"><div class="cusbut"> Button Class</div></a></td>
				<td><a href="#hw11"><div class="cusbut"> Chapter 11 Hws </div></a></td>
 			</tr>
 		</table>
 	</body>
 </html>

 	

 	