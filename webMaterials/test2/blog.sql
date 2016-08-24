CREATE TABLE `diaryTable` (
  `diaryEntryID` int(10) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(50) NOT NULL,
  `entrySummary` varchar(250) NOT NULL,
  `Category` varchar(50) NOT NULL,
 PRIMARY KEY (`diaryEntryID`))
