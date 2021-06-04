CREATE TABLE Post(
PostID int identity(1,1) not null,
Name varchar(10),
Title varchar(100),
Message varchar(1000),
Time datetime,
primary key(PostID))