/*/*drop table if exists users,logs;*/*/
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

create table logs 
(
	ipAdress varchar(255),
	action varchar(255),
	userID int,
	timestamp time
);

create table (ID)followers
(
	accountID int,
	followerID int,
	followedTime DATETIME,
	FOREIGN KEY fk_accountID(accountID) REFERENCES users(ID),
	FOREIGN KEY fk_accountID(followerID) REFERENCES users(ID)
);

create table (ID)smackdowns 
(
	ID int auto_increment,

	mainImg varchar(255),
	orangeImg varchar(255),
	greyImg varchar(255),
	greyVotes int,
	orangeVotes int, 
	orangeTitle varchar(255),
	greyTitle varchar(255),
	category varchar(255),
	viewCount int,
	tags varchar(255),
	caption varchar(255),
	memeCount int,
	tags varchar(255),

	foreign key creatorID references user(ID)
	
);
create table memes 
(
	ID int auto_increment,
	parentMemeID int,
	smackdownID int,
	parentID int default null,
	creatorID int,
	tags varchar(255),

	img varchar(255),
	uVotes int,
	dVotes int,
	creationDate date,

	primary key (ID),
	foreign key (parentMemeID) references memes(ID),
	foreign key (smackdownID) references smackdown(ID),
	foreign key (creatorID) references users(ID)
);
