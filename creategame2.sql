
DROP DATABASE IF EXISTS Game;
CREATE DATABASE Game;



USE Game;

CREATE TABLE Game.GenreTypes(
    genreTypeId   INT         auto_increment    PRIMARY KEY,
    description   VARCHAR(50) NOT NULL
);


CREATE TABLE Game.Logos(
    logoId    INT             auto_increment    PRIMARY KEY,
    logoBody  VARCHAR(500)    NOT NULL
);


CREATE TABLE Game.Publishers(
    publisherId   INT         auto_increment    PRIMARY KEY,
    publisherName VARCHAR(50) NOT NULL
);


CREATE TABLE Game.Users(
    userId    INT             auto_increment    PRIMARY KEY,
    firstName VARCHAR(50)     NOT NULL,
    lastName  VARCHAR(50)     NOT NULL,
    userName  VARCHAR(50)     NOT NULL,
    password  VARCHAR(50)     NOT NULL,
    email     VARCHAR(50)     NOT NULL
);


CREATE TABLE Game.RequestForms(
    requestFormId     INT             auto_increment    PRIMARY KEY,
    text              VARCHAR(500)    NOT NULL,
    userId            INT             NOT NULL,
  	FOREIGN KEY (userId)       REFERENCES Users(userId)
);


CREATE TABLE Game.Games(
    gameId            INT             auto_increment        PRIMARY KEY,
    gameName          VARCHAR(50)     NOT NULL,
    publisherId       INT             NOT NULL,
    FOREIGN KEY (publisherId)     REFERENCES Publishers(publisherId),
    genreTypeId       INT             NOT NULL,
    FOREIGN KEY (genreTypeId)    REFERENCES GenreTypes(genreTypeId),
    releaseDate       DATE            NOT NULL,
    currentVersion    VARCHAR(10)     NOT NULL,
    websiteLink       VARCHAR(100)    NOT NULL,
    logoId            INT             NOT NULL,
    FOREIGN KEY (logoId)    REFERENCES Logos(logoId)   
);


CREATE TABLE Game.Graphics(
    graphicId     INT             auto_increment    PRIMARY KEY,
    gameId        INT             NOT NULL,
    FOREIGN KEY  (gameId)   REFERENCES Games(gameId),
    graphicBody   VARCHAR(100)    NOT NULL
);


CREATE TABLE Game.Ratings(
    ratingId      INT     auto_increment    PRIMARY KEY,
    gameId        INT     NOT NULL,
    FOREIGN KEY (gameId)    REFERENCES Games(gameId),
    userId       INT     NOT NULL,
    FOREIGN KEY  (userId)   REFERENCES Users(userId),
    ratingScore   INT     NOT NULL
);


CREATE TABLE Game.Reviews(
    reviewId      INT             auto_increment    PRIMARY KEY,
    gameId        INT             NOT NULL,
    FOREIGN KEY  (gameId)   REFERENCES Games(gameId),
    userId        INT             NOT NULL,
    FOREIGN KEY  (userId)   REFERENCES Users(userId),
    text         VARCHAR(500)    NOT NULL
);


CREATE TABLE Game.Comments(
    commentId     INT             auto_increment    PRIMARY KEY,
    reviewId      INT             NOT NULL,
    FOREIGN KEY (reviewId)    REFERENCES Reviews(reviewId),
    userId        INT             NOT NULL,
    FOREIGN KEY (userId)    REFERENCES Users(userId),
    text         VARCHAR(200)    NOT NULL
);

