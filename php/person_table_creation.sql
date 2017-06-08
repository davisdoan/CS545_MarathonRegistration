use jadrn012;


drop table if exists person;

create table person(
    id int AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    dob varchar(10) NOT NULL,
    address varchar(100) NOT NULL,
    address2 varchar(50) NOT NULL,
    city varchar(30) NOT NULL,
    state varchar(40) NOT NULL,
    zip char(5) NOT NULL,
    phone varchar(12) NOT NULL,
    email varchar(50) NOT NULL,
    gender varchar(6) NOT NULL,
    experience varchar(11) NOT NULL,
    category varchar(6) NOT NULL,
    medical varchar(100) NOT NULL,
    image varchar(100) NOT NULL); 
    
INSERT INTO person VALUES(0,'Jackie','Robinson', '10/23/1933', '123 B Street', '', 'Robek', 'California', '57123', '352-525-8888', 'jrob@gmail.com','male','Novice','Senior', '','jackie.jpg');
INSERT INTO person VALUES(0,'Bobb','Ross', '1/19/1999', '375 Egg Street', '', 'Blue', 'Arizona', '91821', '331-532-8889', 'ross@gmail.com','female','Experienced','Teen', 'None','bobb.jpg');        
INSERT INTO person VALUES(0,'Bob','Thomas', '6/15/1989', '444 C Street', '#43', 'San Jose', 'Texas', '87825', '444-123-4444', 'bThomas@gmail.com','male','Expert','Adult', '','bob.jpg');
INSERT INTO person VALUES(0,'Rudy', 'Stone', '1/19/1998', '3451 Easter Street', '', 'Mint', 'WA', '91821', '451-821-8325', 'jlake@gmail.com','female','Expert','Teen', 'asthma','rudy.jpg');   
INSERT INTO person VALUES(0,'Marshall','Faulk', '4/18/1980', '555 D Street', '', 'San Diego', 'Wisconson', '92129', '619-226-1111', 'faulk@aztecs.com','male','Expert','Adult', 'broke leg last year','marshall.jpg');
INSERT INTO person VALUES(0,'Norv','Turner', '1/19/1922', '382 Thanksgiving Street', '', 'San Diego', 'California', '91821', '123-333-8329', 'norv@gmail.com','male','Novice','Senior', 'none','norv.jpg');   
INSERT INTO person VALUES(0,'Donald','Clinton', '11/08/1979', '2255 L Street', '', 'Rosemary', 'Wyoming', '52523', '521-123-9999', 'dclinton@hotmail.com','male','Novice','Adult', 'Allergic to peanuts','donald.jpg');
INSERT INTO person VALUES(0,'Robby','Tomlinson', '1/19/1940', '382 Chargers Street', '', 'San Diego', 'California', '91821', '523-215-8779', 'lt@gmail.com','male','Expert','Senior', 'none','robby.jpg');    
INSERT INTO person VALUES(0,'Sally','Rosen', '8/3/1988', '421 Alton Street', '#C', 'Rocky', 'Colorado', '88321', '973-823-5623', 'sally@aol.com','female','Experienced','Adult', '','sally.jpg'); 
INSERT INTO person VALUES(0,'Jenny','Lake', '1/19/1982', '3451 Easter Street', '', 'Mint', 'Washington', '91821', '451-821-8325', 'jlake@gmail.com','female','Novice','Adult', 'asthma','jenny.jpg');
INSERT INTO person VALUES(0,'Hilary','Tom', '1/19/1999', '3723 Garden Street', '', 'San Diego', 'California', '91821', '619-724-8388', 'rudy@gmail.com','female','Novice','Teen', 'Broken Leg','hilary.jpg'); 
INSERT INTO person VALUES(0,'Becky','White', '1/19/1998', '458 Olm Street', '', 'San Diego', 'California', '91821', '858-521-8833', 'Jackie@gmail.com','female','Experienced','Teen', 'Peanut Allergy','becky.jpg');         



