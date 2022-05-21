<?php

namespace IgnisWeb\USARPS;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $pk_player_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $firstname;

    /**
     * @ORM\Column(type="string")
     */
    private string $lastname;


    /**
     * @param int $pk_player_id
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(int $pk_player_id, string $firstname, string $lastname)
    {
        $this->pk_player_id = $pk_player_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return int
     */
    public function getPkPlayerId(): int
    {
        return $this->pk_player_id;
    }

    /**
     * @param int $pk_player_id
     */
    public function setPkPlayerId(int $pk_player_id): void
    {
        $this->pk_player_id = $pk_player_id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
}