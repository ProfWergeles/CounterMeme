create table users 
(
	ID int not null auto_increment,
	creationTime DATETIME,
	rank enum('Newbie','Mediocre','Pro','MemeMaster','Legend') default 'Newbie',
	fName varchar(255),
	lName varchar(255),
	email varchar(255),
	username varchar(255),
	password varchar(255),
	isAdmin boolean default 0,
	isPrivate boolean default 0,
	profilePic varchar(255),
	/*profilePic BLOB,*/
	aboutMe varchar(255),
	age int unsigned, 
	gender varchar(15),

	primary key (ID)
);

/*Each time a user registers*/
create table $username_Followers
(
  ID int not null auto_increment,
  followerID int,
  followTime DATETIME,
  
  foreign key followerID references users(ID)
);

create table $username_Following
(
  ID int not null auto_increment,
  followingID int,
  followTime DATETIME,
  
  foreign key followingID references users(ID)
);

create table $username_Memes
(
  ID int not null auto_increment,
  creationTime DATETIME,
  pic BLOB,
  topText TINYTEXT,
  botText TINYTEXT,
	tags varchar(255),
);

create table $username_Weblog
(
  ID int auto_increment,
  description varchar(255),
  dateTime DATETIME
);
