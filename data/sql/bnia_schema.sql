create database bnia;
use bnia;

create table bnia_csa (
ID int,
Name varchar(100));

DROP TABLE bnia_csa;

LOAD DATA LOCAL INFILE '/Users/sherylj/Documents/ghc/bnia/bnia_census_2010.csv' INTO TABLE bnia.bnia_csa (ID,Name)
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY '\n';
select * from bnia.bnia_csa;

INSERT INTO bnia.bnia_csa VALUES(1,"Allendale/Irvington/S. Hilton");
INSERT INTO bnia.bnia_csa VALUES(2,"Beechfield/Ten Hills/West Hills");
INSERT INTO bnia.bnia_csa VALUES(3,"Belair-Edison");
INSERT INTO bnia.bnia_csa VALUES(4,"Brooklyn/Curtis Bay/Hawkins Point");
INSERT INTO bnia.bnia_csa VALUES(5,"Canton");
INSERT INTO bnia.bnia_csa VALUES(6,"Cedonia/Frankford");
INSERT INTO bnia.bnia_csa VALUES(7,"Cherry Hill");
INSERT INTO bnia.bnia_csa VALUES(8,"Chinquapin Park/Belvedere");
INSERT INTO bnia.bnia_csa VALUES(9,"Claremont/Armistead");
INSERT INTO bnia.bnia_csa VALUES(10,"Clifton-Berea");
INSERT INTO bnia.bnia_csa VALUES(11,"Cross-Country/Cheswolde");
INSERT INTO bnia.bnia_csa VALUES(12,"Dickeyville/Franklintown");
INSERT INTO bnia.bnia_csa VALUES(13,"Dorchester/Ashburton");
INSERT INTO bnia.bnia_csa VALUES(14,"Downtown/Seton Hill");
INSERT INTO bnia.bnia_csa VALUES(15,"Edmondson Village");
INSERT INTO bnia.bnia_csa VALUES(16,"Fells Point");
INSERT INTO bnia.bnia_csa VALUES(17,"Forest Park/Walbrook");
INSERT INTO bnia.bnia_csa VALUES(18,"Glen-Falstaff");
INSERT INTO bnia.bnia_csa VALUES(19,"Greater Charles Village/Barclay");
INSERT INTO bnia.bnia_csa VALUES(20,"Greater Govans");
INSERT INTO bnia.bnia_csa VALUES(21,"Greater Mondawmin");
INSERT INTO bnia.bnia_csa VALUES(22,"Greater Roland Park/Poplar Hill");
INSERT INTO bnia.bnia_csa VALUES(23,"Greater Rosemont");
INSERT INTO bnia.bnia_csa VALUES(24,"Greenmount East");
INSERT INTO bnia.bnia_csa VALUES(25,"Hamilton");
INSERT INTO bnia.bnia_csa VALUES(26,"Harbor East/Little Italy");
INSERT INTO bnia.bnia_csa VALUES(27,"Harford/Echodale");
INSERT INTO bnia.bnia_csa VALUES(28,"Highlandtown");
INSERT INTO bnia.bnia_csa VALUES(29,"Howard Park/West Arlington");
INSERT INTO bnia.bnia_csa VALUES(30,"Inner Harbor/Federal Hill");
INSERT INTO bnia.bnia_csa VALUES(31,"Lauraville");
INSERT INTO bnia.bnia_csa VALUES(32,"Loch Raven");
INSERT INTO bnia.bnia_csa VALUES(33,"Madison/East End");
INSERT INTO bnia.bnia_csa VALUES(34,"Medfield/Hampden/Woodberry");
INSERT INTO bnia.bnia_csa VALUES(35,"Midtown");
INSERT INTO bnia.bnia_csa VALUES(36,"Midway/Coldstream");
INSERT INTO bnia.bnia_csa VALUES(37,"Morrell Park/Violetville");
INSERT INTO bnia.bnia_csa VALUES(38,"Mt. Washington/Coldspring");
INSERT INTO bnia.bnia_csa VALUES(39,"North Baltimore/Guilford/Homeland");
INSERT INTO bnia.bnia_csa VALUES(40,"Northwood");
INSERT INTO bnia.bnia_csa VALUES(41,"Oldtown/Middle East");
INSERT INTO bnia.bnia_csa VALUES(42,"Orangeville/East Highlandtown");
INSERT INTO bnia.bnia_csa VALUES(43,"Patterson Park North & East");
INSERT INTO bnia.bnia_csa VALUES(44,"Penn North/Reservoir Hill");
INSERT INTO bnia.bnia_csa VALUES(45,"Pimlico/Arlington/Hilltop");
INSERT INTO bnia.bnia_csa VALUES(46,"Poppleton/The Terraces/Hollins Market");
INSERT INTO bnia.bnia_csa VALUES(47,"Sandtown-Winchester/Harlem Park");
INSERT INTO bnia.bnia_csa VALUES(48,"South Baltimore");
INSERT INTO bnia.bnia_csa VALUES(49,"Southeastern");
INSERT INTO bnia.bnia_csa VALUES(50,"Southern Park Heights");
INSERT INTO bnia.bnia_csa VALUES(51,"Southwest Baltimore");
INSERT INTO bnia.bnia_csa VALUES(52,"The Waverlies");
INSERT INTO bnia.bnia_csa VALUES(53,"Upton/Druid Heights");
INSERT INTO bnia.bnia_csa VALUES(54,"Washington Village/Pigtown");
INSERT INTO bnia.bnia_csa VALUES(55,"Westport/Mt. Winans/Lakeland");
INSERT INTO bnia.bnia_csa VALUES(56,"Jonestown");
INSERT INTO bnia.bnia_csa VALUE(57,"Perkins");

SELECT * FROM bnia_csa;


create table bnia.bnia_neigh_community(
CSA_id int,
assoc int,
cdcs int,
umbrella int,
parkgrps int,
gardens int,
chap int,
regvote int,
voted int,
year int);

                                                              