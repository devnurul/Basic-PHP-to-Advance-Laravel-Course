Create a Database name  information.



	Create two table  User and User_details and join both of them with inner join,

	Left join , right join use sql query


Now create a text file and submit 



========= Database created done name information. ============

=========user Table create by sql query=======

CREATE TABLE user(
     id		    INT AUTO_INCREMENT,
     username   VARTCHAR(30),
     joining    TIMESTAPM,
  )

========= data insert of user table by query============

INSERT INTO user (username) VALUES 
('Nurul')
('Nahid')
('Biplob')
('Paval')
('Nasim')



=========User_details Table create by sql query=======

CREATE TABLE User_details(
    id		        INT AUTO_INCREMENT,
    user_id         INT, 
    user_details    TEXT 
  )

========= data insert of User_details table by query============

INSERT INTO User_details (user_details, user_id) VALUES 
('asadfasdfasdafasdfasdf-nurul', 1 ),
('asdfasdfsdfaasdf-nasim', 5),
('asdfasdfasdfasdf-nahid', 2)

========== inner join by sql query===========

SELECT user.id, user.username, User_details.user_details FROM user INNER JOIN User_details on user.id = User_details.user_id ORDER BY user.id;


========== left join by sql query===========

SELECT user.id, user.username, User_details.user_details FROM user LEFT JOIN User_details on user.id = User_details.user_id ORDER BY user.id;


========== right join by sql query===========

SELECT user.id, user.username, User_details.user_details FROM user RIGHT JOIN User_details on user.id = User_details.user_id ORDER BY user.id;