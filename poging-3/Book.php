<?php

class Book
{

    // fields
    private string $isbn;
    private string $year;
    private string $title;
    private string $author;

    // relations
    private $copies = []; // array of Copy objects

    // methods
    function __construct(string $isbn, string $year, string $title, string $author)
    {
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->author = $author;
    }

    function __toString(): string
    {
        return "{$this->author} ({$this->year}). {$this->title}. ";
    }

    function getISBN(): string
    {
        return $this->isbn;
    }

    function addCopies(int $count): void
    {
        for ($i = 0; $i < $count; $i++) {
            $this->copies[] = new Copy($this);
        }
    }

    function countCopies(): int
    {
        return count($this->copies);
    }

    function getCopyNumbers(): array
    {
        $numbers = [];
        foreach ($this->copies as $copy) {
            $numbers[] = $copy->getNumber();
        }
        return $numbers;
    }

}