<?php
/* Create multiple tables and perform queries using:
 o SELECT,UPDATE,DELETE,INSERT
 o WHERE,LIKE,GROUP BY,HAVING
 o LIMIT,OFFSET,Sub queries,AND,OR,NOT,IN */


 Create Table Name :
CREATE TABLE student 
(RollNo int PRIMARY KEY,Name varchar(20),Branch varchar(30));

INSERT INTO student VALUES
(1,"Jay","Computer Science"),
(2,"Suhani","Electronic and Com"),
(3,"Kriti","Electronic and Com");


create Student and Exam :
CREATE TABLE exam
 (RollNo int,S_code varchar(20),Marks int, P_code varchar(10) , FOREIGN KEY (RollNo) REFERENCES student(RollNo));

INSERT INTO exam VALUES
(1,"CS11",50,"CS"),
(1,"CS12",60,"CS"),
(2,"EC101",66,"EC"),
(2,"EC102",70,"EC"),
(3,"EC101",45,"EC"),
(3,"EC102",50,"EC");

SELECT :
SELECT * FROM student;
SELECT * FROM exam;

UPDATE :
UPDATE student
SET Branch = 'Information Technology'
WHERE RollNo = 1;

DELETE :
DELETE FROM exam
WHERE Marks < 50;

INSERT :
INSERT INTO student (RollNo, Name, Branch)
VALUES (4, 'Ankit', 'Mechanical Engineering');


WHERE :
SELECT * FROM student
WHERE Branch = 'Electronic and Com';

LIKE :
SELECT * FROM student
WHERE Name LIKE 'K%';

GROUP BY :
SELECT Branch, COUNT(*) AS NumberOfStudents
FROM student
GROUP BY Branch;


HAVING :
SELECT S_code, AVG(Marks) AS AvgMarks
FROM exam
GROUP BY S_code
HAVING AVG(Marks) > 60;


LIMIT :
SELECT * FROM student
LIMIT 2;


OFFSET :
SELECT * FROM student
LIMIT 3 OFFSET 2;


Sub queries :
SELECT Name
FROM student
WHERE RollNo IN (
    SELECT RollNo
    FROM exam
    WHERE Marks > (SELECT AVG(Marks) FROM exam WHERE S_code LIKE 'EC%')
);


AND  :
SELECT * FROM exam
WHERE RollNo IN (SELECT RollNo FROM student WHERE Branch = 'Electronic and Com')
AND Marks > 60;


OR  :
SELECT * FROM exam
WHERE Marks > 60
OR S_code = 'CS12';


NOT :
SELECT * FROM student
WHERE NOT Branch = 'Electronic and Com';


IN :
SELECT * FROM exam
WHERE S_code IN ('CS11', 'EC101');



?>

