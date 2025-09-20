<?php

// Problem 2: Statement(OOP - Movie Rental System)
class Movie {
    private string $title;
    private int $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = (string)$title;
        $this->availableCopies = (int)$availableCopies;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAvailableCopies(): int {
        return $this->availableCopies;
    }

    public function rentMovie(): bool {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnMovie(): void {
        $this->availableCopies++;
    }
}

class Customer {
    private string $name;

    public function __construct($name) {
        $this->name = (string)$name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function rentMovie(Movie $movie): bool {
        return $movie->rentMovie();
    }

    public function returnMovie(Movie $movie): void {
        $movie->returnMovie();
    }
}


$movie1 = new Movie("Inception", 4);
$movie2 = new Movie("Interstellar", 2);


$customer1 = new Customer("Alice");
$customer2 = new Customer("Bob");


$customer1->rentMovie($movie1);   
$customer2->rentMovie($movie2);   

echo "Available Copies of 'Inception': " . $movie1->getAvailableCopies() . PHP_EOL;
echo "Available Copies of 'Interstellar': " . $movie2->getAvailableCopies() . PHP_EOL;
