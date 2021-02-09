CREATE TABLE `TransactionData` (
	

`TransactionNo` INT AUTO_INCREMENT, 
`ClientId` INT,
`TransactionType` VARCHAR,
`TransactionDate` DATE, 
`Amount` FLOAT,
`RecipentId` INT,
`IBAN` VARCHAR,
`BIC` VARCHAR,
`RecipentName` VARCHAR (100),
`RecipentSurname` VARCHAR (100),
`StockBefore` FLOAT,
`StockAfter` FLOAT,
`Comment` VARCHAR (200),
PRIMARY KEY (TransactionNo),
)