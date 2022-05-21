<?php

namespace IgnisWeb\USARPS;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="symbols")
 */
class Symbol
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $pk_symbol_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $symbol;


    /**
     * @param int pk_symbol_id
     * @param string $symbol
     */
    public function __construct(int $pk_symbol_id, string $symbol)
    {
        $this->pk_symbol_id = $pk_symbol_id;
        $this->symbol = $symbol;
    }

    /**
     * @return int
     */
    public function getPkSymbolId(): int
    {
        return $this->pk_symbol_id;
    }

    /**
     * @param int $pk_symbol_id
     */
    public function setPkSymbolId(int $pk_symbol_id): void
    {
        $this->pk_symbol_id = $pk_symbol_id;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }
}