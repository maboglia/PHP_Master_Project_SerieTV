<?php 
//esempio di model per serie tv
//la classe Serie rappresenta la tabella serie nel codice php, la mappatura relazionale
class Serie {
	//id	titolo	genere	rating 	
	public $id;
	public $titolo;
	public $genere;
	public $rating;
	
	public function presenta(){
		return $this->titolo . " - ". $this->genere;
	}
	
}


/**
* Tabella MySql
*/


/*

--
-- Struttura della tabella `serie`
--

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `genere` varchar(255) NOT NULL,
  `rating` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`);

  --
-- AUTO_INCREMENT per la tabella `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dump dei dati per la tabella `serie`
--

INSERT INTO `serie` (`id`, `titolo`, `genere`, `rating`) VALUES
(1, 'The Boys', 'drama', '8.60'),
(2, 'Breaking bad', 'drama', '9.30');

*/








?>