<?php 

class SerieController {
	
	public function trovaTutti(){
		
		//1		ho creato un oggetto di tipo Connessione, chiamando il costruttore
		        $conn = new ConnessionePDO();
		//2		sull'oggetto chiamo il metodo connetti, se tutto va bene sono connesso :)
        $conn->connetti();
        //3preparo la query al db
        $query = "SELECT * FROM serie";
        //4chiamo l'ogg conn, mi faccio dare la connessione, chiamo il metodo prepare()
		        $queryAlDB = $conn->getConnessione()->prepare($query);
		//5		eseguo effettivamente la query al db col metodo execute()
		        $queryAlDB->execute();
		//6		setta il modo di raccolta dei dati nel tipo classe: 
		        //cioè leggi i dati dalla tbella serie e riversali nella classe Serie, creando oggetti di tipo Serie
		        $queryAlDB->setFetchMode(PDO::FETCH_CLASS, "Serie");
		//7		preparo un contenitore per le serie TV
		        $serieTV = array();
		
		while (  $serie = $queryAlDB->fetch()   ){
			//8			for each record del db, salvo in un oggetto Serie e lo aggiungo all'array serieTV
            // echo $serie->titolo."...";
            $serieTV[] = $serie;
        }
        //9 ritorno il contenitore pieno di oggetti di tipo serie
        return $serieTV;
    }
    public function trovaUno($id)
    {
        //1ho creato un oggetto di tipo Connessione, chiamando il costruttore
        $conn = new Connessione();
        //2sull'oggetto chiamo il metodo connetti, se tutto va bene sono connesso :)
			        $conn->connetti();
			//3			preparo la query al db
			        $query = "SELECT * FROM serie WHERE id = :id";
			//4			chiamo l'ogg conn, mi faccio dare la connessione, chiamo il metodo prepare()
        $queryAlDB = $conn->getConnessione()->prepare($query);
        $queryAlDB->bindParam(":id", $id, PDO::PARAM_INT);
        //5eseguo effettivamente la query al db col metodo execute()
        $queryAlDB->execute();
        //6setta il modo di raccolta dei dati nel tipo classe: 
        //cioè leggi i dati dalla tbella serie e riversali nella classe Serie, creando oggetti di tipo Serie
        $queryAlDB->setFetchMode(PDO::FETCH_CLASS, "Serie");
        //7 mi faccio tornare il record dal db in forma di oggetto e lo salvo in $serie
        $serie = $queryAlDB->fetch();
        //8 ritorno l'oggetto di tipo serie
			        return $serie;
		}
		
		
		
		
	}
	
	
	
	?>