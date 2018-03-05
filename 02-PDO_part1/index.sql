--exo 1
SELECT * FROM `clients`

--exo 2
SELECT * FROM `showTypes`

-- exo 3
SELECT * FROM clients LIMIT 20

-- exo 4
SELECT * FROM clients WHERE card = "1"

--exo 5
SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE "M%"
SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE "M%" ORDER BY `lastName`ASC

--exo 6
