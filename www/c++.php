<!Doctype HTML>
	<html>
		<head>
			<?php include "mainhead.php";?>
			<title>
				James Oswald Quarter 3 Visual C++ NoteBook
			</title>
		</head>
		<body>
			<?php include "main.php";?>
			<style>
				body
				{
					background:url("http://i.imgur.com/G64kVmx.gif");
					text-align:center;
					font-size:14pt;
					font-family:arial;
				}
				
				a
				{
					text-decoration:none;
					color:black;
				}

				.custom_button:hover
				{
					text-decoration:none;
					background:yellow;
				}
				
				.custom_button
				{
					border-radius:25px;
					width:100px;
					background:cyan;
					display:inline-block;
					padding:5px;
					margin:10px;
				}

				#header
				{
					margin:0px;
					padding:7px;
					position:fixed;
					border-radius:25px;
					background: rgb(130,70,40);
					border: 2px solid gray;
					height:30px;
					width:80px;
					text-align:center;
				}
				#table
				{
					border-radius:25px;
					background: rgb(130,70,40);
				}

				#header:hover
				{
					width:97%;
					height:100px;
				}

				#header:hover #hid
				{
					visibility:visible;
				}

				#body
				{
					padding:20px;
					margin-left:15%;
					margin-right:15%;
					margin-top:3%;
					border:2px solid orange;
					border-radius:25px;
					background: rgb(242,225,100);
				}
				
				p
				{
					text-align:left;
				}

				#hid
				{
					visibility:hidden;	
				}

				hr
				{
					border-width:1px;
					border-color:black;
				}
				
				pre:not(#spec)
				{
					text-align:left;
					margin-left:10%;
					margin-right:10%;
					background-color:LightGray;
					border:1px solid gray;
				}
				
				code 
				{
					font-family:monospace;
					font-size:10pt;
				}

				ul , ol
				{
					text-align:left;
				}

				table
				{
					margin-left:50px;
					margin-right:50px;
					border:0px;
					font-size:10pt;
					font-style:normal;
				}

				img 
				{
					max-width: 80%; 
					max-height: 400px;
				}

			</style>
			<div id = "header">
				<h2 style="margin:5px;">
					Index
				</h2>
				<span id="hid">
					<a href = "#top">
						<div class = "custom_button">
							Top
						</div>
					</a>
					<a href = "#chapter2">
						<div class = "custom_button">
							Chapter 2
						</div>
					</a>
					<a href = "#chapter3">
						<div class = "custom_button">
							Chapter 3
						</div>
					</a>
					<a href = "#chapter4">
						<div class = "custom_button">
							Chapter 4
						</div>
					</a>
					<a href = "#chapter5">
						<div class = "custom_button">
							Chapter 5
						</div>
					</a>
					<a href = "#chapter8">
						<div class = "custom_button">
							Chapter 8
						</div>
					</a>
					<a href = "#realindex">
						<div class = "custom_button">
							Real Index
						</div>
					</a>
				</span>
			</div>
			<div id = "body">
				<a name = "top"></a>
				<h1>
					C++ HTML Notebook
				</h1>
				<h5>
					Quarter 3
				</h5>
				<h3>
					James Oswald
				</h3>
				<img src="http://i.imgur.com/A2ZBB4Y.gif"/>
				<hr>
				<a name = "chapter2"></a>
				<h1>
					Chapter 2
				<h1>
				<h2>
					Intrduction to C++
				</h2>
				<img src="http://i.imgur.com/4JAnHw9.jpg"/>
				<hr>
				<a name = "basics"></a>
				<h2>
					The Basics of a C++ Program
				</h2>
				<p>
					A C++ program is composed of statements that instruct the computer what to do.
					Here's a template of what a basic C++ Program might look like:
				</p>
				<pre>
<code>/*
Multi
Line
Comment
*/

#include&lt;libary&gt;

function()
{
	Statements;
}

//single line comment</code>
				</pre>
				<p>
					By filling this template in you can get a basic program:
				</p>
				<pre>
<code>/*
James Oswald
Period 7
*/

#include&lt;iostream.h&gt;

void main()
{
	cout&lt;&lt;"Hello world!"&lt;&lt;endl;
}

//Works Great!</code>
				</pre>
				<p>
					The console output of this program would be "Hello World!". This program can be split up into some basic parts:
					<ul>
						<li>
							#include&lt;iostream.h&gt;
							<br>
							This statement is a preprocessor directive that instructs the program to include
							the code within the "iostream.h" header file as if it was included the program. 	
						</li>
						<br>
						<li>
							iostream.h
							<br>
							The iostream header or input output stream header is a header file/library that contains the code
							for basic console input and output
						</li>
						<br>
						<li>
							void main()<br>
							{<br>
							<br>
							}<br>
							The main() function is the container for the code run at the start of the program.
							The keyword "void" specifies that the function doesn't return a value, 
							more on this in <a href="#chapter5">Chaper 5</a>.
							The statements are always surrouded by { } to signify they belong to the main function.
						</li>
						<br>
						<li>
							cout&lt;&lt;"Hello world!"&lt;&lt;endl;
							<br>
							The actual statement is composed of multiple parts:
							<br>
							<br>
							cout&lt;&lt;x&lt;&lt;...
							<br>
							cout is a device included in the iostream.h header and is short for console output,
							and it does just that, outputs the value after the overloaded bitshift operator(&lt;&lt;) to the console. 
							In this program cout outputs a constant string "hello world!", however cout can be used to output 
							almost any kind of value(strings, doubles, integers, etc.) to the console. 
							The overloaded bitshift operator(&lt;&lt;) and cout can be strung to output a string of diffrent types.
							EX:
							<pre>
<code>cout&lt;&lt;"Lol"&lt;&lt;5&lt;&lt;" Dogs";</code>
							</pre>
							The console would read "Lol 5 Dogs" even though "Lol" and  " Dogs" are both constant strings while 5 is
							a constant integer.
							<br>
							<br>
							endl
							<br>
							endl is another device in the iostream.h header and is short for end line. When put into the stream it
							ends the current line of output and moves all following output onto the next line.
							<br>
							<br>
							;
							<br>
							ALL statements in C++ end with a semicolon(;).
						</li>
						<br>
						<li>
							Comments(/* */ and //)
							<br>
							Comments are parts of a program that are not read by the compiler. This means that they 
							allow the programmer to type whatever they want in them. This usually consists of
							information about the program or a section of the program. Multiline comments are designated using /* to start
							and */ to end. These comments can be spread over many lines. Single line comments are designated using
							//. They end at the end of the line of code.
						</li>
					</ul>
				</p>
				<br>
				<hr>
				<a name = "ces"></a>
				<h2>	
				Character Escape Sequences
				</h2>
				<p>		
					When in a string the need sometimes arises to use special characters such as " or '. But Wait! if you do
					that the compiler will mistake the " you want to display as the end of the string! To get around this we have
					Character Escape Sequences. A character escape sequence is a way to implement special functions and characters into
					strings, they begin with a back slash (\) and are concluded automatically with the character that follows. Here
					are the 5 you need to know:
				</p>
				<ol>
					<li>\a : make a beep noise when encountering this.</li>
					<li>\n : make a new line when encountering this.</li>
					<li>\' : make a " in the string when encountering this.</li>
					<li>\t : make a tab in the string when encountering this.</li>
					<li>\' : make a ' in the string when encountering this</li>
					<li>\\ : make a \ in the string when encountering this</li>
				</ol>
				<p>
					An example of Character Escape Sequences:
				</p>
				<pre>
<code>cout&lt;&lt;"wow\tI \'Love\' all\nmy\\ \"Dogs\"";</code>
				</pre>
				<p>
					This would outputput the phrase
					<br>
					<br>
					wow		I 'Love' all<br>my\ "Dogs"
					<br>
					<br>
				</p>
				<hr>
				<a name = "chapter3"></a>
				<h1>
					Chapter 3
				<h1>
				<h2>
					Variables and Console Input
				</h2>
				<img src="http://i.imgur.com/mchQXTw.png"/>
				<hr>
				<a name = "variables"></a>
				<h2>
					Variables
				</h2>
				<p>
					Variables are: named memory locations that store a value. Variables are dimentioned by giving them a type and
					an identifier (fancy word for name). Variables are dimentioned with an assignment statement. 
					<br>
					Here are some types:
				</p>
				<ol>
					<li>int		: a value meant for storing integer values.</li>
					<li>char	: a value meant for storing letters (characters).</li>
					<li>string	: a value meant for storing an array of characters.</li>
					<li>bool	: a value meant for storing boolean(true or false) values.</li>
					<li>long	: a value meant for storing extremely large integer values.</li>
					<li>double	: a value meant for storing decimal values.</li>
				</ol>
				<p>
					Here is a template of 2 of many ways that values can be assigned.
				</p>
				<pre>
<code>type identifier = value;

type identifier;
identifier = value;</code>
				</pre>
				<p>
					Examples of some assignment statements using different ways to assign values:
				</p>
				<pre>
<code>int number; //dimentions an integer called number
number = 5; //assigns the value of 5 to the previously dimentioned integer.
char let = 'a'; //dimentions a character called let and assigns it a value of 'a'
double dec, dec2; // dimentions 2 doubles called dec and dec2
string name = "James"; //dimentions string name and assigns it "James"
double dec = 12.4 * 43; //assigns dec the value of 12.4 * 43
dec2 = dec; //assigns dec2 the value stored in dec</code>
				</pre>
				<p>
					These a just a few of the ways you can assign values to variables.
					<br>
					Puting the keyword "const" infront of a variable declaration and assingning it a value on the same line creates a
					constant variable. This means that the value of the constant variable can not be changed
				</p>
				<br>
				<hr>
				<a name = "cin"></a>
				<h2>
					Getting Console Input
				</h2>
				<p>
					Console input is obtained using the "cin" statement included in the iostream.h library
					followed by the overloaded shift bits right operator(&gt;&gt;) and a variable to assign the
					inputed value. Here is an example of a program that returns your input:
				</p>
				<pre>
<code>#include&lt;iostream.h&gt;
#include&lt;lvp\string.h&gt;

void main()
{
	String input; //creates a string named "input"
	cin&gt;&gt;input; //prompts console for user input to put in "input"
	cout&lt;&lt;input&lt;&lt;endl; //outputs the value in "input" to console and ends the line
}</code>
				</pre>
				<p>
				<hr>
				<a name = "chapter4"></a>
				<h1>
					Chapter 4
				<h1>
				<h2>
					Controlling Program Flow
				</h2>
				<img src="http://i.imgur.com/39tkThP.jpg"/>
				<hr>
				<a name = "cond"></a>
				<h2>
					Conditionals
				</h2>
				<p>
					The "if" statement allows a program to use logic to make desisions. The if statement can be used in conjunction with
					the "else" and "else if" statements to allow for multiple control paths. Here are some syntax examples:
				</p>
				<pre>
<code>//a regular stand alone if statement
if(condition)
{
	statements;
}

//an if statement in coujunction with an else statement
if(condition)
{
	statements;
}
else
{
	statements;
}

//an if statement in conjunction with an else if and else statement
if(condition)
{
	statements;
}
else if(condition)
{
	statements;
}
else
{
	statements;
}</code>
				</pre>
				<p>
					The if statement declares a block of code only run in the event that its condition evaluates to true. A condition is a
					special piece of code that uses logical operators to evaluate to true or false. Some logical operators are:
				</p>
				<ul>
					<li>a == b	: if a equals b, condition evalutes to true</li>
					<li>a != b	: if a does not equal b, condition evalutes to true</li>
					<li>a < b	: if a is less than b, condition evalutes to true</li>
					<li>a > b	: if a is greater than b, condition evalutes to true</li>
					<li>a <= b	: if a is less than or is equal to b, condition evalutes to true</li>
					<li>a <= b	: if a is greater than or is equal to b, condition evalutes to true</li>
					<li>(contition a) && (condition b) : if a and b evalute to true, condition evalates to true </li>
					<li>(contition a) || (condition b) : if a or b evalute to true, condition evalates to true </li>
					<li>!(contition a) : if a evaluates to false, condition evaluates to true</li>
				</ul>
				<p>
					In the event that an if statement evaluates to false and an else statement is attached, the code in the else statement
					will be run rather than the code within the if statement. In the event that an if else ladder used the program will read
					them from top to bottom and run the block of code after the first condition that evaluates to true. In the event that none
					are true, it will run the code included in the else statement.
					<br>
					<br>
					Here is an example of various if statements:
				</p>
				<pre>
<code>
#include&lt;iostream.h&gt;

void main()
{
	int age;
	cout&lt;&lt;"Enter your age: ";
	cin&gt;&gt;age;

	//example of a stand alone if
	if (age > 1 && age < 120)
	{
		cout&lt;&lt;"You are a valid Age"&lt;&lt;endl;
	}

	//example of an if in conjunction with an else
	if (age % 5 == 0)
	{
		cout&lt;&lt;"Your age is divisible by 5"&lt;&lt;endl;
	}
	else
	{
		cout&lt;&lt;"Your age is not divisible by 5"&lt;&lt;endl;
	}

	//example of an else if ladder
	if (age > 100)
	{
		cout&lt;&lt;"You are old!"&lt;&lt;endl;
	}
	else if (age > 90)
	{
		cout&lt;&lt;"You are kinda old."&lt;&lt;endl;
	}
	else if (age > 50)
	{
		cout&lt;&lt;"You are over 50."&lt;&lt;endl;
	}
	else if (age > 30)
	{
		cout&lt;&lt;"you are middle aged."&lt;&lt;endl;
	}
	else
	{
		cout&lt;&lt;"you are young!"&lt;&lt;endl;
	}
}</code>
				</pre>
				<p>
					The above program will output up to 3 different messages depending on the user's age allowing many control paths.
				<hr>
				<a name = "useful"></a>
				<h2>
					Useful Libraries
				</h2>
				<p>
					C++ includes many useful libraries that provide the programmer with many different functions.
					Remember to note that a library can be included using an #include&lt;name&gt; statement.
					Here are some helpful libraries.
					<br>
					<br>
					#include&lt;lvp\random.h&gt;
					<br>
					The Random Library contains 2 very useful functions for generating random
					integers. They are:
				</p>
				<ul>
					<li>
						randomize()
						<br>
						Instructs the program to output a different random number each time,
						without this included in main, the program will generate the same random numbers every time.
					</li>
					<li>
						random(int)
						<br>
						The random function returns a value between the integer parameter and zero.
					</li>
				</ul>
				<p>
					<br>
					#include&lt;lvp\bool.h&gt;
					<br>
					The Bool Library allows the creation of bool variables.
					To create a bool variable you must only declare:
					<br>
					<br>
					bool name = booleanvalue;
					<br>
					<br>
					A boolean value is one that evaluates to either true or false. These values are not
					enclosed in quotes and are recognised as keywords by the compiler.
				</p>
				<p>
					#include&lt;lvp\string&gt;
					<br>
					The String Library allows the creation of a more user friendly version of the built in
					basic_string class. To declare a string one uses the following assignment:
					<br>
					<br>
					String name = "Text";
					<br>
					<br>
					The above string has the value of name and a value of Text.
				</p>
				<br>
				<hr>
				<a name = "loops"></a>
				<h2>
					Loops
				</h2>
				<p>
					The C++ language includes 3 different kinds of loops all with different properties.
					<br>
					<br>
					The first loop is the "do loop", here is its syntax:
				</p>
				<pre>
<code>do
{
	statements;
}
while(condition);</code>
				</pre>
				<p>
					The "do" statement is placed at the top of the loop, the body is placed in {} brackets.
					Statements that you want to be executed during the loop are placed inside the {} brackets.
					At the end is a "while" statement with a condition after it. In the event that the conditional
					statement within the () is true, the loop will proceed back to the first line in the do loop and
					execute them all over again. This process will repeat until the condition is false, in the event
					that the condition never becomes false, an "Infinite loop" occurs. Unless you for some reason intended to 
					create an infinite loop, these are bad and will most likely break your program. A property of a do loop is
					that the body of loop is always entered at least once.
				</p>
				<p>
					The next kind of loop is a while loop. Here is the Syntax:
				</p>
				<pre>
<code>while(condition)
{
	statements;
}</code>
				</pre>
				<p>
					 A while loop is like a do loop but has the ability not to be entered at all
					due to the while being on top. In the event that the while evaluates to false,
					 the loop will not be entered.
					<br>
					<br>
					Example of a do loop and a while loop in action:
				</p>
				<pre>
<code>
#include&lt;iostream.h&gt;

void main()
{
	int age;

	do
	{
		cout&lt;&lt;"Enter your age: "&lt;&lt;endl;
		cin&gt;&gt;age
	}
	while(age <= 0);

	while(age >= 100)
	{
		cout&lt;&lt;"WOW YOU'RE OLD!"&lt;&lt;endl;
	}
}</code>
				</pre>
				<p>
					The above example asks for a users age. In the event that the age is negative or 0, they are asked again and again
					until a valid age is input. In the event that you input a valid age less than 100 the program ends there. However
					if you are 100 or over, the while loop is triggered and will create an infinite loop to tell you how old you are.
					<br>
					<br>
					Next is the for loop. The syntax is:
				</p>
				<pre>
<code>for(int i; condition; step)
{
	statements;
}</code>
				</pre>
				<p>
					If the do loop is used when you are unsure how many times you want statements executed, then the for loop
					is used when you know the number of times you want statements executed. To begin the "for" keyword declares the loop
					after that is a set of (). These () contain 3 things. First the looping variable declaration. This is an integer value
					that is increased by the step each time the loop finishes. The looping variable (if declared in the loop statement) can
					only be used inside the loop. Next is the condition that the loop runs under. This usually
					includes the looping variable. While the condition is true, the loop will run. Finally, the step is the statement run
					at the end of every loop cycle. The step is typically performed on the looping variable. Here's an example of the above
					attempt of me trying to explain what a for loop is:
				</p>
				<pre>
				<code>
#include&lt;iostream.h&gt;

void main()
{
	for(int i = 1; i <= 10; i++)
	{
		cout&lt;&lt;i&lt;&lt;endl;
	}
}</code>
				</pre>
				<p>
					The above code counts up to 10 from 1. It starts by declaring the looping variable named "i" as an integer = to 1.
					The condition is that as long as "i" is less than or = to 10 the loop will repeat. The step statement, i++,
					states that 1 will be added to i every time the loop is completed because i++ is equivilent to i = i + 1;
				</p>
				<br>
				<hr>
				<a name = "chapter5"></a>
				<h1>
					Chapter 5
				</h1>
				<h2>
					Functions
				</h2>
				<img src="http://i.imgur.com/huIQlLo.jpg"/>
				<br>
				<hr>
				<a name = "functions"></a>
				<h2>
					Functions
				</h2>
				<p>
					Functions are blocks of code that perform a task. The syntax is:
				</p>
				<pre>
				<code>
//how this would be declared
returntype name(type parameter,type parameter,...)
{
	statements;
	return value_of_retruntype; //in the event that function isnt type "void"
}

//how this would be called
variable = name(parameter,parameter,...);
name(parameter,parameter,...); //in the event the function is type "void"</code>
				</pre>
				<p>
					A function is declared by first stating the return type. A return type is the kind of value that the function
					will return (double, int, String, bool, etc.), functions have a special kind of type known as "void" declaring
					a function as type void means that it does not need a return value and can be called without returning a value.
					Next is the name of the function. The name is what the function is called with. Following the name are the 
					function parameters that the function is expected to receive from its call in (). Each parameter must be declared
					by its type followed by its name. The parameter and the value that is called do not need the same name, however they
					MUST be the same type. The function body is then enclosed in {}. In addition to regular parameters you have the ability
					to set default and reference parameters. Default parameters are optional parameters that do not need to be in the
					call statement because they are assigned a default value after their declaration. Reference parameters are parameters
					which have the ability to have their variables passed to the function changed permanently as a result of activity
					inside the function. Reference parameters are declared by placing a & infront of the parameter name. Inside
					the body statements can be made using the parameters as well as any other variables you wish to declare in
					the function. The function is concluded on a return statement that returns a value of the return type,
					unless the function is type void. Having multiple functions of the same name with different parameters is called
					function overloading.
					<br>
					<br>
					The following are examples of functions:
				</p>
				<pre>
				<code>
#include&lt;iostream.h&gt;
#include&lt;lvp\bool.h&gt;

int add(int a, int b) //addition function of return type int
{
	return a + b;
}

void display(int val) //overloaded void "display" function
{
	cout&lt;&lt;val&lt;&lt;endl;
}

void display(string val) //overloaded void "display" function
{
	cout&lt;&lt;val&lt;&lt;endl;
}

String congrats(string name, int age, string occ = "Birthday") //function using default parameter
{
	return "Happy " + occ + " " + name + ", you\'re " + age + " years old now!";
}

void reff(int a, int &b) //function using a reference perameter
{
	a = 2;
	b = 2;
}

void main() //even main is a function!
{
	int number1,number2;
	number1 = add(5,6); //add returns an integer stored in number 1
	number2 = 11;
	reff(number1,number2);
	display(number1); //displays the parameter not changed by reff
	display(number2); //displays the reference parameter changed by reff
	display(congrats("Jeff",add(50,10))); //A function in a function in a function
}</code>
				</pre>
				<p>
					In the above example, the console output woud read:
					<br>
					<br>
					11
					<br>
					2
					<br>
					Happy Birthday Jeff, you're 60 years old now!
				</p>
				<hr>
				<a name = "chapter8"></a>
				<h1>
					Chapter 8
				</h1>
				<h2>
					String Methods
				</h2>
				<img src="http://i.imgur.com/EboBAwr.png"/>
				<br>
				<hr>
				<a name = "strmeth"></a>
				<h2>
					String Methods
				</h2>
				<p>
					The String class provided by lvp\string.h isn't a type but rather a class. An object has the ability to call methods
					(Functions defined within the class) of the class to perform actions. A method is called using the synatax:
					objectname.method(parameters);. The String class inludes multiple methods they are:
				</p>
				<ul>
					<li>
						<b>name.find(String key);</b>
						<br>
						returns an integer value representing the position in the string at which the String "key" was found within String
						"name".
					</li>
					<li>
						<b>name.substr(int pos,int len);</b>
						<br>
						returns a new String value that is a sub-string of String "name" starting at the position (first character in
						the string is at pos 0) int "pos" going to the lenghth of characters to be extracted, int "len".
					</li>
					<li>
						<b>name.length()<b>
						<br>  
						returns an integer value representing the number of characters in String "name".
					</li>
					<li>
						<b>name.operator[](int pos);</b>
						<br>
						returns a character at the position of int pos in String "name".
					</li>
				</ul>
				<hr>
				<a name = "realindex"></a>
				<h1>
					Real Index
				</h1>
				<div id="table">
				<table>
					<tr>
						<td>
							<a href = "#top">
								<div class = "custom_button">
									Top
								</div>
							</a>
						</td>
						<td>
							<a href = "#chapter2">
								<div class = "custom_button">
									Chapter 2
								</div>
							</a>
						</td>
						<td>
							<a href = "#chapter3">
								<div class = "custom_button">
									Chapter 3
								</div>
							</a>
						</td>
						<td>
							<a href = "#chapter4">
								<div class = "custom_button">
									Chapter 4
								</div>
							</a>
						</td>
						<td>
							<a href = "#chapter5">
								<div class = "custom_button">
									Chapter 5
								</div>
							</a>
						</td>
						<td>
							<a href = "#chapter8">
								<div class = "custom_button">
									Chapter 8
								</div>
							</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href = "#basics">
								<div class = "custom_button">
									The Basics
								</div>
							</a>
						</td>
						<td>
							<a href = "#variables">
								<div class = "custom_button">
									Variables
								</div>
							</a>
						</td>
						<td>
							<a href = "#useful">
								<div class = "custom_button">
									Useful Libraries
								</div>
							</a>
						</td>
						<td>
							<a href = "#functions">
								<div class = "custom_button">
									Functions
								</div>
							</a>
						</td>
						<td>
							<a href = "#strmeth">
								<div class = "custom_button">
									String Methods
								</div>
							</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href = "#ces">
								<div class = "custom_button">
									Escape Sequences
								</div>
							</a>
						</td>
						<td>
							<a href = "#cin">
								<div class = "custom_button">
									Console Input
								</div>
							</a>
						</td>
						<td>
							<a href = "#loops">
								<div class = "custom_button">
									Loops
								</div>
							</a>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<a href = "#cond">
								<div class = "custom_button">
									Conditionals
								</div>
							</a>
						</td>
						<td></td>
					</tr>		
				</table>
				</div>
				<p style="text-align:center;">
					Jozwald 2016
				</p>
			</div>
		</body>
	</html>