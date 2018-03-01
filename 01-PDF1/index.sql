-- exo 1
SELECT * FROM students

-- exo 2
SELECT prenom FROM students

-- exo 3
SELECT prenom, datenaissance, school FROM `students`

-- exo 4
SELECT * FROM `students` WHERE genre = "F"

--exo 5
SELECT * FROM `students` WHERE school = "2"

--exo 6
SELECT prenom FROM `students` ORDER BY prenom DESC
SELECT prenom FROM `students` ORDER BY prenom DESC LIMIT 2

--exo 7
INSERT INTO `students`(`nom`, `prenom`, `datenaissance`, `genre`, `school`) VALUES ("Dalor", "Ginette", "1930-01-01", "F", "1")

--exo 8
UPDATE `students` SET `prenom`= "Omer",`genre`= "M" WHERE `nom` = "Dalor"

-- exo 9
DELETE FROM `students` WHERE idStudent = "3"

--exo 10
ALTER TABLE students MODIFY COLUMN `school` varchar(20)
UPDATE `students` SET `school`= "Central" WHERE `school` = "1"
UPDATE `students` SET `school`= "Anderlecht" WHERE `school` = "2"
