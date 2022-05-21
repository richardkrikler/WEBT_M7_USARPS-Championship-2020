INSERT INTO players (firstname, lastname)
VALUES ('Richard', 'Krikler'),
       ('Hadi', 'Tlais'),
       ('Jakob', 'Mucherl'),
       ('Martin', 'Windhager');

INSERT INTO symbols (pk_symbol_id, symbol)
VALUES (1, 'Rock'),
       (2, 'Paper'),
       (3, 'Scissor');

INSERT INTO rounds (datetime, fk_pk_player_a, fk_pk_player_b, fk_pk_player_a_symbol, fk_pk_player_b_symbol)
VALUES ('2020-02-24 13:00:00', 1, 2, 1, 1),
       ('2020-02-24 16:00:00', 1, 3, 2, 1),
       ('2020-02-25 13:30:00', 2, 4, 3, 1),
       ('2020-02-25 14:30:00', 3, 4, 1, 2),
       ('2020-02-25 17:00:00', 2, 3, 3, 2);

