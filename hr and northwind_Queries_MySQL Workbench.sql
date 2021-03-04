use hr;

select sum(salary) from employees;

describe employees;

select MIN(salary) from employees;

SELECT MAX(salary) 
FROM employees 
WHERE job_id = 'IT_PROG';

SELECT AVG(salary),count(*) 
FROM employees 
WHERE department_id = 90;

SELECT ROUND(MAX(salary),0) 'Maximum',
ROUND(MIN(salary),0) 'Minimum',
ROUND(SUM(salary),0) 'Sum',
ROUND(AVG(salary),0) 'Average'
FROM employees;


SELECT MAX(salary) - MIN(salary) DIFFERENCE
FROM employees;

SELECT DATE_FORMAT(NOW(), '%W %M %Y');

SELECT job_id, MAX(salary) 
FROM employees 
GROUP BY job_id 
HAVING MAX(salary) >=4000;

SELECT job_id, COUNT(*)
FROM employees
GROUP BY job_id;



CREATE TABLE People (Name Text, Age INT);

INSERT INTO People VALUES ('Michael', 35);
INSERT INTO People VALUES ('John', 15);
INSERT INTO People VALUES ('Ron', 55);

SELECT * FROM People;

use northwind;

SELECT ProductName, UnitsInStock 
FROM Products 
WHERE UnitsInStock > (SELECT AVG(UnitsInStock) FROM Products); 

select CustomerID, CompanyName
	from Customers
	where CustomerID in 
		(
  			 select CustomerID 
   			 from Orders 
  			 where orderDate > '1998-05-01'
		);


select CustomerID, CompanyName 
from Customers as a
where not exists
(
    select * from Orders as b
    where a.CustomerID = b.CustomerID
    and ShipCountry <> 'UK'
);
