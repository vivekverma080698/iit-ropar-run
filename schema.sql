DROP SCHEMA IF EXISTS iitrun;
CREATE SCHEMA iitrun;
USE iitrun;

	
CREATE TABLE participants (
      emailID VARCHAR(50) NOT NULL ,
      name VARCHAR(45) NOT NULL,
      age SMALLINT UNSIGNED NOT NULL,
	  chest_no INT,
	  chest_no_coll INT , 
	  t_size VARCHAR(10) NOT NULL,
	  paid  BOOLEAN NULL DEFAULT FALSE,
	  t_dilv  BOOLEAN NULL DEFAULT FALSE,
	  starting_time  TIME NULL DEFAULT '06:00:00',
	  ending_time TIME,
	  rank_ INT,
	  mobile VARCHAR(15),
	  emergency VARCHAR(15),
	  address VARCHAR(100),
      primary key (emailID)
);

CREATE TABLE volunteer (
      emailID VARCHAR(50) NOT NULL ,
      name VARCHAR(45) NOT NULL,
      age SMALLINT UNSIGNED NOT NULL,
	  t_size VARCHAR(10) NOT NULL,
	  t_dilv BOOLEAN NULL DEFAULT FALSE,
	  cycle BOOLEAN NULL DEFAULT FALSE,
	  duty VARCHAR(50),
	  location VARCHAR(50),
	  mobile VARCHAR(15),
	  address VARCHAR(100),
      primary key (emailID)
);
