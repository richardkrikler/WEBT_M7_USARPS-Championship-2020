DROP DATABASE IF EXISTS USARPS;
CREATE DATABASE USARPS CHARACTER SET utf8 COLLATE utf8_general_ci;
USE USARPS;


CREATE TABLE players
(
    pk_player_id INT primary key,
    firstname    varchar(255),
    lastname     varchar(255)
);

CREATE TABLE symbols
(
    pk_symbol_id INT primary key,
    symbol       varchar(20)
);

CREATE TABLE rounds
(
    pk_round_id           INT primary key,
    datetime              datetime,
    fk_pk_player_a        INT,
    fk_pk_player_b        INT,
    fk_pk_player_a_symbol INT,
    fk_pk_player_b_symbol INT,
    FOREIGN KEY (fk_pk_player_a) REFERENCES players (pk_player_id),
    FOREIGN KEY (fk_pk_player_b) REFERENCES players (pk_player_id),
    FOREIGN KEY (fk_pk_player_a_symbol) REFERENCES symbols (pk_symbol_id),
    FOREIGN KEY (fk_pk_player_b_symbol) REFERENCES symbols (pk_symbol_id)
);