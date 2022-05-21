<?php

namespace IgnisWeb\USARPS;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="rounds")
 */
class Round
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $pk_round_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $datetime;

    /**
     * @ORM\Column(type="integer")
     */
    private Player $fk_pk_player_a;

    /**
     * @ORM\Column(type="integer")
     */
    private Player $fk_pk_player_b;

    /**
     * @ORM\Column(type="integer")
     */
    private Symbol $fk_pk_player_a_symbol;

    /**
     * @ORM\Column(type="integer")
     */
    private Symbol $fk_pk_player_b_symbol;


    /**
     * @param int $pk_round_id
     * @param string $datetime
     * @param Player $fk_pk_player_a
     * @param Player $fk_pk_player_b
     * @param Symbol $fk_pk_player_a_symbol
     * @param Symbol $fk_pk_player_b_symbol
     */
    public function __construct(int $pk_round_id, string $datetime, Player $fk_pk_player_a, Player $fk_pk_player_b, Symbol $fk_pk_player_a_symbol, Symbol $fk_pk_player_b_symbol)
    {
        $this->pk_round_id = $pk_round_id;
        $this->datetime = $datetime;
        $this->fk_pk_player_a = $fk_pk_player_a;
        $this->fk_pk_player_b = $fk_pk_player_b;
        $this->fk_pk_player_a_symbol = $fk_pk_player_a_symbol;
        $this->fk_pk_player_b_symbol = $fk_pk_player_b_symbol;
    }

    /**
     * @return int
     */
    public function getPkRoundId(): int
    {
        return $this->pk_round_id;
    }

    /**
     * @param int $pk_round_id
     */
    public function setPkRoundId(int $pk_round_id): void
    {
        $this->pk_round_id = $pk_round_id;
    }

    /**
     * @return string
     */
    public function getDatetime(): string
    {
        return $this->datetime;
    }

    /**
     * @param string $datetime
     */
    public function setDatetime(string $datetime): void
    {
        $this->datetime = $datetime;
    }

    /**
     * @return Player
     */
    public function getFkPkPlayerA(): Player
    {
        return $this->fk_pk_player_a;
    }

    /**
     * @param Player $fk_pk_player_a
     */
    public function setFkPkPlayerA(Player $fk_pk_player_a): void
    {
        $this->fk_pk_player_a = $fk_pk_player_a;
    }

    /**
     * @return Player
     */
    public function getFkPkPlayerB(): Player
    {
        return $this->fk_pk_player_b;
    }

    /**
     * @param Player $fk_pk_player_b
     */
    public function setFkPkPlayerB(Player $fk_pk_player_b): void
    {
        $this->fk_pk_player_b = $fk_pk_player_b;
    }

    /**
     * @return Symbol
     */
    public function getFkPkPlayerASymbol(): Symbol
    {
        return $this->fk_pk_player_a_symbol;
    }

    /**
     * @param Symbol $fk_pk_player_a_symbol
     */
    public function setFkPkPlayerASymbol(Symbol $fk_pk_player_a_symbol): void
    {
        $this->fk_pk_player_a_symbol = $fk_pk_player_a_symbol;
    }

    /**
     * @return Symbol
     */
    public function getFkPkPlayerBSymbol(): Symbol
    {
        return $this->fk_pk_player_b_symbol;
    }

    /**
     * @param Symbol $fk_pk_player_b_symbol
     */
    public function setFkPkPlayerBSymbol(Symbol $fk_pk_player_b_symbol): void
    {
        $this->fk_pk_player_b_symbol = $fk_pk_player_b_symbol;
    }
}