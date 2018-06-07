
INSERT INTO role(name)
VALUES ('user')

INSERT INTO users(name,email,id_role,password,birthdate,phone,address)
VALUES ('Nguyen Van Teo','teo@gmail.com',1,'abcabcabc','2000-09-30','234585453','Quan 1');


UPDATE users 
SET birthdate = "2001-2-10"
WHERE id=3;


UPDATE users 
SET phone='876543245',address = "Quan 12"
WHERE id=3

DELETE FROM users WHERE id=3;


INSERT INTO users(name,email,id_role,password)
SELECT name,email,id_role,password 
FROM users_backup WHERE id=3

