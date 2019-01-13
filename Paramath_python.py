
print  "\n=Assignment2 Python Program="

def test1(x=26,y=49):
    return  (x*4)+(y%7)

#	1. Variable Number of Actual Parameters 
	
print  "\n1. variable number of actual parameters"
	
print  "result : ", test1(3,5)	# numbers as parameters

#	2. Parameter Correspondence

#		2.a Positional

print  "\n2. parameter correspondency"

print  "\n2.a positional"

print  "result : ", test1(5,3)	# values of x and y are swapped

#		2.b Keyword

print  "\n2.b keyword"
	
print  "result : ", test1(3)	# only x input is given, y uses default value

#		2.c Combination

print  "\n2.c combination"
	
print  "result : ", test1(3+5,5-3)	# expressions as inputs

#	3. Formal Parameter Default Values 

print  "\n3. formal parameter default values"
	
print  "result : ", test1()	# empty inputs to use default x and y

#	4. Parameter Passing Methods 

def test2(x, y):
    return  x , y	# returns copy values of inputs

def test3(x, y):
    return  x[0] , y[0]	# returns values are passed by reference in the addresses

print  "\n4. parameter passing methods "

#		4.1 Pass by value

print  "\n4.1 pass by value "

p = 15
q = 25
	
print  "result (x , y): ", test2(p,q)	# value inputs

#		4.2 Pass by reference	

print  "\n4.2 pass by reference "

a = [15]
b = [25]

print  "result (x , y): ", test3(a,b) # values that are contained in array addresses