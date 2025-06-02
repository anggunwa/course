<?php

class MovieTicket {
    public $movieTitle;
    private $pricePerTicket;
    private $availableSeats;

    public function __construct ($movieTitle, $pricePerTicket, $availableSeats) {
        $this->movieTitle = $movieTitle;
        $this->pricePerTicket = $pricePerTicket;
        $this->availableSeats = $availableSeats;
    }

    private function formatPrice ($amount) {
        return number_format((float) $amount, 2, '.','' );
    }

    public function bookTicket($quantity) {
        if ($quantity > $this->availableSeats) {
            return "Not enough seats available.";
        } else {
            $this->availableSeats -= $quantity;
            return "Successfully booked $quantity tickets for $" . $this->formatPrice($this->pricePerTicket * $quantity);
        }
    }

    public function getMovieInfo() {
        return "Movie: ".$this->movieTitle.", Price per ticket: $".$this->formatPrice($this->pricePerTicket).", Seats left: ".$this->availableSeats;
    }

    public function getAvailability() {
        return $this->availableSeats;
    }
}

$movie = new MovieTicket("Dune: Part Two", 12.00, 50);
echo $movie->getmovieInfo();

//echo "<br>" . $movie->bookTicket(5);
echo "<br>" . $movie->bookTicket(70);

echo "<br>" . $movie->getAvailability();
?>