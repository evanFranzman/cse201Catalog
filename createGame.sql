USE master 
GO

IF DB_ID('Game') IS NOT NULL 
        DROP DATABASE Game
GO

CREATE DATABASE Game
GO

USE Game
GO

CREATE TABLE GenreTypes(
    [genreTypeId]   INT         IDENTITY    PRIMARY KEY,
    [description]   VARCHAR(50) NOT NULL
);
GO

CREATE TABLE Logos(
    [logoId]    INT             IDENTITY    PRIMARY KEY,
    [logoBody]  VARCHAR(500)    NOT NULL
);
GO

CREATE TABLE Publishers(
    [publisherId]   INT         IDENTITY    PRIMARY KEY,
    [publisherName] VARCHAR(50) NOT NULL
);
GO

CREATE TABLE Users(
    [userId]    INT             IDENTITY    PRIMARY KEY,
    [firstName] VARCHAR(50)     NOT NULL,
    [lastName]  VARCHAR(50)     NOT NULL,
    [userName]  VARCHAR(50)     NOT NULL,
    [password]  VARCHAR(50)     NOT NULL,
    [email]     VARCHAR(50)     NOT NULL
);
GO

CREATE TABLE RequestForms(
    [requestFormId]     INT             IDENTITY    PRIMARY KEY,
    [userId]            INT             NOT NULL    FOREIGN KEY     REFERENCES Users(userId),
    [text]              VARCHAR(500)    NOT NULL
);
GO

CREATE TABLE Games(
    [gameId]            INT             IDENTITY        PRIMARY KEY,
    [gameName]          VARCHAR(50)     NOT NULL,
    [publisherId]       INT             NOT NULL        FOREIGN KEY     REFERENCES Publishers(publisherId),
    [genreTypeId]       INT             NOT NULL        FOREIGN KEY     REFERENCES GenreTypes(genreTypeId),
    [releaseDate]       DATE            NOT NULL,
    [currentVersion]    VARCHAR(10)     NOT NULL,
    [websiteLink]       VARCHAR(100)    NOT NULL,
    [logoId]            INT             DEFAULT(NULL)   FOREIGN KEY     REFERENCES Logos(logoId)   
);
GO

CREATE TABLE Graphics(
    [graphicId]     INT             IDENTITY    PRIMARY KEY,
    [gameId]        INT             NOT NULL    FOREIGN KEY     REFERENCES Games(gameId),
    [graphicBody]   VARCHAR(100)    NOT NULL
);
GO

CREATE TABLE Ratings(
    [ratingId]      INT     IDENTITY    PRIMARY KEY,
    [gameId]        INT     NOT NULL    FOREIGN KEY     REFERENCES Games(gameId),
    [userId]        INT     NOT NULL    FOREIGN KEY     REFERENCES Users(userId),
    [ratingScore]   INT     NOT NULL
);
GO

CREATE TABLE Reviews(
    [reviewId]      INT             IDENTITY    PRIMARY KEY,
    [gameId]        INT             NOT NULL    FOREIGN KEY     REFERENCES Games(gameId),
    [userId]        INT             NOT NULL    FOREIGN KEY     REFERENCES Users(userId),
    [text]          VARCHAR(500)    NOT NULL
);
GO

CREATE TABLE Comments(
    [commentId]     INT             IDENTITY    PRIMARY KEY,
    [reviewId]      INT             NOT NULL    FOREIGN KEY     REFERENCES Reviews(reviewId),
    [userId]        INT             NOT NULL    FOREIGN KEY     REFERENCES Users(userId),
    [text]          VARCHAR(200)    NOT NULL
);
GO
