<?php

namespace IgnisWeb\USARPS;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

class DB
{
    private static array $connectionParams = [
        'dbname' => 'USARPS',
        'user' => 'root',
        'password' => '',
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
        return self::getDB()->select(
            'pk_round_id', 'datetime',
            'pa.firstname as pa_firstname', 'pa.lastname as pa_lastname',
            'pb.firstname as pb_firstname', 'pb.lastname as pb_lastname',
            'sa.symbol as pa_symbol', 'sb.symbol as pb_symbol')
            ->from('rounds', 'r')
            ->innerJoin('r', 'players', 'pa', 'r.fk_pk_player_a = pa.pk_player_id')
            ->innerJoin('r', 'players', 'pb', 'r.fk_pk_player_b = pb.pk_player_id')
            ->innerJoin('r', 'symbols', 'sa', 'r.fk_pk_player_a_symbol = sa.pk_symbol_id')
            ->innerJoin('r', 'symbols', 'sb', 'r.fk_pk_player_b_symbol = sb.pk_symbol_id')
            ->executeQuery()
            ->fetchAllAssociative();
    }

    public static function deleteRound($pk_round_id){
        self::getDB()
            ->delete('round')
            ->where('pk_round_id in (:pk)')
            ->setParameter(':pk', $pk_round_id, Connection::PARAM_INT);
    }
}

