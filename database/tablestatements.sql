DROP TABLE IF EXISTS followers;
DROP TABLE IF EXISTS counters;
DROP TABLE IF EXISTS memes;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS smackdown;

CREATE TABLE `users` (
    `username` VARCHAR(255) PRIMARY KEY,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255),
    `creationTime` DATETIME,
    `status` TEXT,
    `profilePic` BLOB,
    `aboutMe` TEXT
);

CREATE TABLE `followers` (
    `username` VARCHAR(255),
    `follower` VARCHAR(255),
    `followedTime` DATETIME,
    FOREIGN KEY fk_username(username) REFERENCES users(username),
    FOREIGN KEY fk_follower(follower) REFERENCES users(username)
);

CREATE TABLE `smackdown` (
    `smackdownID` INT PRIMARY KEY AUTO_INCREMENT,
    `grayContender` VARCHAR(64) NOT NULL,
    `orangeContender` VARCHAR(64) NOT NULL,
    `grayPicture` BLOB NOT NULL,
    `orangePicture` BLOB NOT NULL,
    `mainPicutre` BLOB,
    `grayVote` INT,
    `orangeVote` INT,
    `category` VARCHAR(255),
    `tags` VARCHAR(255),
    `timestamp` DATETIME,
    `visitCounter` INT,
    `author` VARCHAR(255),
    `flagged` BOOL DEFAULT FALSE,
    FOREIGN KEY fk_author(author) REFERENCES users(username)
);

CREATE TABLE `memes` (
    `memeID` INT PRIMARY KEY AUTO_INCREMENT,
    `picture` BLOB NOT NULL,
    `author` VARCHAR(255),
    `smackdownID` INT,
    `upvotes` INT,
    `downvotes` INT,
    `timestamp` DATETIME,
    `flagged` BOOL DEFAULT FALSE,
    FOREIGN KEY fk_author(author) REFERENCES users(username),
    FOREIGN KEY fk_smackdowdID(smackdownID) REFERENCES smackdown(smackdownID)
);

CREATE TABLE `counters` (
    `counterID` INT PRIMARY KEY AUTO_INCREMENT,
    `smackdownID` INT,
    `memeID` INT,
    `parentID` INT NULL,
    `author` VARCHAR(255),
    FOREIGN KEY fk_parentID(parentID) REFERENCES counters(counterID),
    FOREIGN KEY fk_author(author) REFERENCES users(username),
    FOREIGN KEY fk_memeID(memeID) REFERENCES memes(memeID),
    FOREIGN KEY fk_smackdowdID(smackdownID) REFERENCES smackdown(smackdownID)
);
