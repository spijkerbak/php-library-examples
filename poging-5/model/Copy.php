<?php

class Copy
{

    private static int $copyNumber = 1000; // first unique copy number
    // fields
    private int $number;
    private string $dateIn;
    private ?string $dateOut;
    // relations
    private string $book;

    function __construct(Book $book)
    {
        $this->book = $book;
        $this->dateIn = date('Y-m-d');
        $this->dateOut = null;
        $this->number = self::$copyNumber;
        self::$copyNumber++;
    }

    function writeOff(): void
    {
        $this->dateOut = date('Y-m-d');
    }

    function isWrittenOff(): bool
    {
        return $this->dateOut !== null;
    }

    function getNumber(): int
    {
        return $this->number;
    }

    function __toString(): string
    {
        return "{$this->book} {$this->number}";
    }

}