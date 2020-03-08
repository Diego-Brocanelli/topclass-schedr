# topclass-schedr

System requirements

There are two classes during a time frame. (Same class all the time... Think Drivers Ed.)
So there is Class A and Class B all the time, each class has 12 students and 2 instructors each.
We need to collect detailed information on the student. Address, license so on. 

We have information on each instructor, (cert number, email). 
Each student has test scores, (Knowledge, Skill, pass or fail, and cert number on pass). 
Because we want to bill the customers online, here is what I came up with.

I have tables for, Class, Customer, Instructor, Address, Scores, Gender, and a relation table for the 
many-to-many Instructor to Class issue.

Here are the relationships as depicted in the attachment :-

Many-to-One Customer - to - Class
Many-to-One Customer - to - Address
Many-to-One Customer - to - Gender
Many-to-One Customer - to - Score
Many-to-One Instructor - to - RelationTableToClass
Many-to-One Class - to - RelationTableToInstructor

I also need to keep track of how many students have filled a class, because this will determine if more 
students of course could come into the class. 

In other words, the students see which classes are available and pick from the classes that are not full.
