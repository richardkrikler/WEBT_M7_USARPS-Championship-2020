CREATE DATABASE IF NOT EXISTS USARPS;
use USARPS;

CREATE TABLE Players (
    pk_playerID INT primary key,
    first_name varchar(20),
    last_name varchar(20)
);

CREATE TABLE Symbol (
    pk_symbolID INT primary key,
    symbol varchar(20)
);

CREATE TABLE Rounds (
                        pk_roundID INT primary key,
                        player varchar(20),
                        symbol varchar(20),
                        datetime datetime,
                        fk_pk_playerID INT,
                        FOREIGN KEY (fk_pk_playerID) REFERENCES Players(pk_playerID),
                        fk_pk_symbolID INT,
                        FOREIGN KEY (fk_pk_symbolID) REFERENCES Symbol(pk_symbolID)
);