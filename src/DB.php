<?php

namespace IgnisWeb\USARPS;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;

class DB
{
    private static array $connectionParams = [
        'dbname' => 'USARPS',
        'user' => 'root',
        'password' => 'cisco',
        'host' => '127.0.0.1',
        'driver' => 'pdo_mysql',
    ];

    public static function getDB(): QueryBuilder
    {
        $conn = DriverManager::getConnection(self::$connectionParams);
        $queryBuilder = $conn->createQueryBuilder();

        return $queryBuilder;
    }

    public static function getRounds(): array
    {
        return self::getDB()
            ->select('pk_round_id', 'datetime',
                'pa.firstname as pa_firstname', 'pa.lastname as pa_lastname',
                'pb.firstname as pb_firstname', 'pb.lastname as pb_lastname',
                'sa.symbol as pa_symbol', 'sb.symbol as pb_symbol')
            ->from('rounds', 'r')
            ->innerJoin('r', 'players', 'pa', 'r.fk_pk_player_a = pa.pk_player_id')
            ->innerJoin('r', 'players', 'pb', 'r.fk_pk_player_b = pb.pk_player_id')
            ->innerJoin('r', 'symbols', 'sa', 'r.fk_pk_player_a_symbol = sa.pk_symbol_id')
            ->innerJoin('r', 'symbols', 'sb', 'r.fk_pk_player_b_symbol = sb.pk_symbol_id')
            ->orderBy('pk_round_id')
            ->executeQuery()
            ->fetchAllAssociative();
    }

    public static function getPlayers(): array
    {
        return self::getDB()
            ->select('pk_player_id', 'firstname', 'lastname')
            ->from('players')
            ->orderBy('pk_player_id',)
            ->executeQuery()
            ->fetchAllAssociative();
    }

    public static function getSymbols(): array
    {
        return self::getDB()
            ->select('pk_symbol_id', 'symbol')
            ->from('symbols')
            ->executeQuery()
            ->fetchAllAssociative();
    }

    public static function deleteRound(int $pk_round_id): void
    {
        self::getDB()
            ->delete('rounds')
            ->where('pk_round_id = ?')
            ->setParameter(0, $pk_round_id, ParameterType::INTEGER)
            ->executeQuery();
    }

    public static function deletePlayer(int $pk_player_id): void
    {
        self::getDB()
            ->delete('players')
            ->where('pk_player_id = ?')
            ->setParameter(0, $pk_player_id, ParameterType::INTEGER)
            ->executeQuery();
    }

    public static function addPlayer(string $firstname, string $lastname): void
    {
        self::getDB()
            ->insert('players')
            ->values(['firstname' => '?', 'lastname' => '?'])
            ->setParameter(0, $firstname)
            ->setParameter(1, $lastname)
            ->executeQuery();
    }

    public static function addRound(string $datetime, int $playerA, int $playerB, int $symbolA, $symbolB): void
    {
        self::getDB()
            ->insert('rounds')
            ->values([
                'datetime' => '?',
                'fk_pk_player_a' => '?',
                'fk_pk_player_b' => '?',
                'fk_pk_player_a_symbol' => '?',
                'fk_pk_player_b_symbol' => '?'
            ])
            ->setParameter(0, $datetime)
            ->setParameter(1, $playerA)
            ->setParameter(2, $playerB)
            ->setParameter(3, $symbolA)
            ->setParameter(4, $symbolB)
            ->executeQuery();
    }

}

