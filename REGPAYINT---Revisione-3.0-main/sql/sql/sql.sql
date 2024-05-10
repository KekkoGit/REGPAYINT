CREATE TABLE Iscritti (
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(40) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    nome VARCHAR(30) NOT NULL,
    dataNascita DATE NOT NULL,

    idSigla VARCHAR(2) NOT NULL REFERENCES Nazioni(idSigla),
    idTipologia INT NOT NULL REFERENCES Tipologie(idTipologia),
    idPrivilegio INT NOT NULL REFERENCES Privilegi(idPrivilegio),
    idIscritto INT AUTO_INCREMENT PRIMARY KEY
    );

CREATE TABLE Privilegi(
    descrizione VARCHAR(50) NOT NULL,
    idPrivilegio INT AUTO_INCREMENT PRIMARY KEY
);
    
CREATE TABLE Pagamenti (
    dataPagamento DATE NOT NULL,
    importo DECIMAL(30) NOT NULL,

    idIscritto INT NOT NULL REFERENCES Iscritti(idIscritto),
    idPagamento INT AUTO_INCREMENT PRIMARY KEY
   );

CREATE TABLE Nazioni (
    nomeNazione VARCHAR(50) NOT NULL,
    idSigla VARCHAR(2) PRIMARY KEY
    );

CREATE TABLE Tipologie (
    nomeTipologia VARCHAR(50) NOT NULL,
    quota DECIMAL(30) NOT NULL,
    idTipologia INT AUTO_INCREMENT PRIMARY KEY
    );

--QUERY:--
--Esempio di Inserimento di un nuovo iscritto:--
INSERT INTO Iscritti (email, password, nome, cognome, dataNascita, telefono, idSigla, idTipologia, idIscritto) 
VALUES ('alessandro.puglia.05@itive3pa.edu.it', HASHBYTES('SHA256', 'password123'), 'Alessandro', 'Puglia', '26/11/2005', '35009254144','11/05/2005', "IT", "1");

--Esempio di Inserimento di un nuovo pagamento:--
INSERT INTO Pagamenti (idIscritto, dataPagamento, importo, metodoPagamento) 
VALUES ('1', '11/05/2001', '104', 'paypal');

--Elenco degli iscritti con cognome, nome, telefono di una nazione--
SELECT i.cognome, i.nome, i.telefono, n.nome_nazione
FROM Iscritto i
JOIN Nazione n ON i.codice_nazione = n.codice_nazione
WHERE n.codice_nazione = 'IT';


--Tutti i dati degli iscritti di un determinato tipo--
SELECT *
FROM Tipologia
WHERE nomeTipologia = 'Socio ordinario';


--Pagamenti con cognome, nome, data, importo e data del pagamento--
SELECT i.cognome, i.nome, i.dataNascita, p.importo, p.dataPagamento
FROM Iscritti i
JOIN Pagamenti p ON i.idIscritto = p.idIscritto;


--Tutti i dati dei pagamenti effettuati nel secondo trimestre dell anno 2023 con cognome e nome degli iscritti che hanno effettuato i pagamenti */
SELECT i.cognome, i.nome, p.importo, p.dataPagamento
FROM Iscritti i
JOIN Pagamenti p ON i.idIscritto = p.idIscritto
WHERE YEAR(p.dataPagamento) = 2023 AND MONTH(p.dataPagamento) BETWEEN 4 AND 6;


--I dati dei pagamenti effettuati dai soci ordinari provenienti da Svizzera e Olanda--
SELECT Iscritti i.cognome, i.nome, p.importo, p.dataPagamento
FROM Iscritto i
JOIN Pagamenti p ON i.idIscritti = p.idIscritto
JOIN Nazione n ON i.idSigla = n.idSigla
WHERE i.tipologia = 'Socio ordinario' AND (n.nomeNazione = 'Svizzera' OR n.nomeNazione = 'Olanda');