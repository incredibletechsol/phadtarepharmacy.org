DROP TABLE tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE tbl_faculty;

CREATE TABLE `tbl_faculty` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO tbl_faculty VALUES("1","Teaching","Prof. K.D. Dhekale","Principal","M.Pharm PhD (a)","6","K.D.Dhekale.jpg");
INSERT INTO tbl_faculty VALUES("2","Teaching","Prof. S.S. Shivpuje","Asst. Prof.","M.Pharm ","4","Miss Kanika Gupta.png");
INSERT INTO tbl_faculty VALUES("3","Teaching","Prof. S.S.Pingale","Asst. Prof.","M.Pharm","2","Prof. S.S.Pingale.jpg");
INSERT INTO tbl_faculty VALUES("4","Teaching","Prof. A.H. Sathe","Asst. Prof.","M.Pharm","2","Prof. A.H. Sathe.jpg");
INSERT INTO tbl_faculty VALUES("5","Teaching","Miss Priyanka Sunil Jadhav","Leceturer","B.Pharm","1","Miss Priyanka Sunil Jadhav.png");
INSERT INTO tbl_faculty VALUES("6","Teaching","Miss Sonali Raju Pratape","Leceturer","B.Pharm","1","Miss Sonali Raju Pratape.png");
INSERT INTO tbl_faculty VALUES("7","Teaching","Prof. M. R. Deokar","Asst. Prof.","M.Pharm","4","Prof. M. R. Deokar.jpg");
INSERT INTO tbl_faculty VALUES("8","Teaching","Prof. A.H. Chandanshive","Asst. Prof.","M.Pharm","1","Mr.Hemant Ramachandra Badwaik.png");
INSERT INTO tbl_faculty VALUES("9","Teaching","Mr.D.Madhu","Leceturer","M.Pharm","3","Mr.D.Madhu.png");
INSERT INTO tbl_faculty VALUES("10","Teaching","Miss.Deepali","Leceturer","M.Pharm","4","Miss.Deepali.png");
INSERT INTO tbl_faculty VALUES("11","Non-Teaching","Miss.Monica Akhade","Chief Accountant","M.Com","10","Miss.Monica Akhade.png");
INSERT INTO tbl_faculty VALUES("12","Non-Teaching","Mr.Bhosale H.J","Libriean","B.Lib","6","Mr.Bhosale H.J.png");
INSERT INTO tbl_faculty VALUES("13","Non-Teaching","Mr.Amol Patil","Store Keeper","M.A","8","Mr.Amol Patil.png");
INSERT INTO tbl_faculty VALUES("14","Non-Teaching","Mr.Kedari Sunil","Clark","M.A","4","Mr.Kedari Sunil.png");
INSERT INTO tbl_faculty VALUES("15","Non-Teaching","Mr.Waghmode G.D","Clark","B.Com","6","Mr.Waghmode G.D.png");
INSERT INTO tbl_faculty VALUES("16","Non-Teaching","Mr. Vaibhav Jadhav","Accountant","M.B.A Fianace","8","Mr. Vaibhav Jadhav.png");
INSERT INTO tbl_faculty VALUES("17","Non-Teaching","Mr.Nilesh Nimbhalkar","Accountant","M.Com","6","Mr.Nilesh Nimbhalkar.png");
INSERT INTO tbl_faculty VALUES("18","Non-Teaching","Mr.Rajendra Kadam","Clark","M.A","6","Mr.Rajendra Kadam.png");
INSERT INTO tbl_faculty VALUES("19","Non-Teaching","Mr.Pandurang Dannane","Peon","S.S.c","6","Mr.Pandurang Dannane.png");
INSERT INTO tbl_faculty VALUES("20","Non-Teaching","Mrs.Ghate A.D","Peon","S.S.c","6","Mrs.Ghate A.D.png");
INSERT INTO tbl_faculty VALUES("21","Non-Teaching","Mrs.Dhumal A.s","Peon","S.S.c","6","Mrs.Dhumal A.s.png");
INSERT INTO tbl_faculty VALUES("22","Non-Teaching","Mr.Chitare U.A","Peon","S.S.c","5","Mr.Chitare U.A.png");



DROP TABLE tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;




DROP TABLE tbl_login;

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO tbl_login VALUES("10","phadmin","Phadtare12#$","Admin","Admin");



DROP TABLE tbl_news;

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` date NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




