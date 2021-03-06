
 Answer.1. CREATE A DATABASE  done
CREATE A DATABASE "user_information"
CREATE DATABASE user_information;


   Answer.2. CREATE A TABLE  done
CREATE A TABLE "user_info" 5 column:  id  , username , age , phone, address, salary , country  ,created_at, updated_at

CREATE TABLE user_info (

    id          INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(20) NOT NULL,
    age         INT NOT NULL, 
    phone       VARCHAR(13) NOT NULL,
    address     VARCHAR(55) NOT NULL,
    salary      INT NOT NULL,
    country     VARCHAR(20) NOT NULL,
    created_at  CURRENT_TIMESTAMP ,
    updated_at  DATETIME

                     )


   Answer.3.Find users who live in same country   
SELECT * FROM `user_info` WHERE country = 'bangladesh'


   Answer.4.Show data  by high to low salary  
 SELECT * FROM `user_info` ORDER BY salary DESC


   Answer.5.Show data who get the highest salary  
 SELECT MAX(salary) FROM `user_info` 


   Answer.6.Show data who get the lowest salary  
 SELECT MIN(salary) FROM `user_info` 


   Answer.7.Show how many table you have   
SELECT  COUNT(id) FROM `user_info`


 Answer.8.Show me how many users get a salary range of ( 5000 -15000)
SELECT * FROM `user_info` WHERE salary BETWEEN 5000 AND 15000


  