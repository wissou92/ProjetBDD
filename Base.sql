
drop table if exists Coach , Adherant , Programme ,Exercice , Conseil_dietetique , Pratique , Coaching_sportif, Coaching_nutrition ;


# bon wissam  moi je prefere faire la table et en dessous faire linsertion si la disposition te vas pas 
#  tu peux changer oklm on est ensemble mgl a jamais 
#la note je sais que ces des etoiles mais en base  je lai representer comme un int avec une taille 
# de 2  en gros une note sur 20 

create table Coach (

	  nom varchar(30) not null , 
	  prenom varchar(30) not null, 
	  experience varchar (30) not null, 
	  note  int(2)
);

insert into Coach values 
   	   ('Lejeune' , 'Théophile' , '10 ans', 15),  
	   ('Alphonse', 'Jodion', ' 5 ans ', 14 ), 
	   ('Serhan' , 'Wissam' , '3 ans  ', 16),
	   ('Mechri' , 'Fadi', ' 6 mois ', 18), 
	   ('Pittis' , 'Thomas' ,'4 ans ' , 16),
	   ('Harbin' , 'Vachon' ,'6ans', 10 ),
	   ('Sarrazin' , 'Thibaut', '1 an', 9), 
	   ('Gougeon' , 'Merlin ' ,'4 ans ' , 13),
	   ('Gradasso' , 'Savard' ,'6ans', 13 ),
	   ('Almeida Barros', 'Breno ', '10 ans', 15);


create table Adherant (

	   nom varchar(30) not null, 
	   prenom varchar(30) not null, 
	   email varchar(200) not null , 
	   mdp varchar (100) not null,
	   poids int(3) not null ,
	   age int (3) not null ,
	   taille int (3) not null 
); 


insert into Adherant values
	('Elhabar' 		, 'Moussa' 		, 'MoussaLebg@uvsq.fr'				,'lastreetzer'		,	60,22,190),
	('Jhon' 		, 'Rachid' 		, 'jhonrachid@jsp.fr'				,'rachid' 			,	80,30 , 180 ), 
	('Pinto'		, 'Pio'			, 'PioPinto@teleworm.us' 			,'vioB0eeri9ph' 	, 	90 , 27,160),
	('Longo'		, 'Urbano'		, 'UrbanoLongo@dayrep.com' 			,'hdjhdqsjd' 		, 	75  , 35 , 175 ),
	('Milani' 		,' Arrigo'		, 'ArrigoMilani@dayrep.com'			, 'djkqsdjkqsd'		,   50 , 20,160 ),
	('Trentini'		,'Gabriele'		, 'GabrieleTrentini@armyspy.com'	, 'sdjqsdjkq' 		,   80 ,40 ,170 ),
	(' Conti'	    , 'Efisio'		, 'EfisioConti@teleworm.us'			,'dnjqkshd'			,   92 ,35 ,160 ),
	('Milanesi'		,'Oreste'		,'OresteMilanesi@armyspy.com'		,'sqkdskls'			,   55 ,19 ,170 ),
	('Marseau' 		,'Alphonse'		, 'AlphonseMarseau@jourrapide.com'	, 'sdqdkqksjd'		,   70  , 33 , 150 ),
	('Hervieux'		,'Iven'			, 'IvenHervieux@dayrep.com'			,'psodkqspd' 		,	50, 29, 169 ),
	('Mailly'		,' Moore'		, 'MooreMailly@jourrapide.com'		, 'ls^pld^s^ld' 	, 	86 ,35, 190),
	('Soucy'		,'  Odo'		, 'OdoSoucy@teleworm.us'			,'djskljsdkqsd' 	, 	80 ,44, 168),
	('Lécuyer'		,'Scoville'		, 'ScovilleLecuyer@dayrep.com'		, 'dhqjsdjqshnd'	,	50 ,40 , 186),
	('Dupuy'		,'Gaetan'		, 'GaetanDupuy@teleworm.us'			,'QSQSQS'			,	95,27 ,150 ),
	('Duperré'		,'Valiant'		, 'ValiantDuperre@armyspy.com'		,'sdkjqsjdjndqsd'	,   68  , 44 , 164 ),
	(' Loiseau'		,' Dominique'	, 'DominiqueLoiseau@armyspy.com'	, 'shdjhsdqshdb'	,   77 , 30 , 180),
	(' Jodion'		,'Matthieu'		, 'MatthieuJodion@armyspy.com'		,'bfdfdbds'			,   80, 30, 170),
	('Bouchard'		,'Adrien'		, 'AdrienBouchard@dayrep.com' 		,'sqdqsdqs'			,   85 ,25 ,150),
	(' Goguen'		,'Verrill'		, 'VerrillGoguen@armyspy.com'		, 'qNQDNQSDQ'		,   90,30 ,160),
	('Boileau'		,'Joseph'		, 'JosephBoileau@dayrep.com' 		,'bshqbshqsbqbhs'			, 75 , 25, 185 ),

	('Marier'		,'Norris'		, 'NorrisMarier@rhyta.com'			,'sqdsdqs'			, 60 , 18, 165 ),
	('Hervieux'		,'Verrill'		, 'VerrillHervieux@jourrapide.com'	, 'sfsfqsfsdf'		, 85 ,22 ,170 ),
	('Achin'		,'Frontino'		, 'FrontinoAchin@dayrep.com' 		,'qsdqdqdq'			, 68, 26,178 ),
	('Bonenfant'	,'Guillaume'	, 'GuillaumeBonenfant@rhyta.com'	, 'dqsdqssdf' 		,80,35 ,168 ),
	('Étienne '		,'Ruel'			, 'EtienneRuel@teleworm.us' 		, 'fdsfsdfsd'		, 80 , 40,157 ),
	('Odo'			,'Deniger'		, 'OdoDeniger@teleworm.us'		    , 'dfsdfsdfsd'		, 75,35,180 ),
	('Pouchard'		,'Christophe'	, 'ChristophePouchard@rhyta.com'	,'fdsASqsdq'		, 68 ,19 ,150 ),
	('Brochu'		,'Jay'			, 'JayBrochu@armyspy.com' 			, 'sdsdsdfdsfs' 	,80, 22,177),
	('Mason '		,'Tanguay'		, 'MasonTanguay@armyspy.com'		, 'dfssdfsdfsdf' 	,90,18, 174),
	('Octave'		,'Margand'		, 'OctaveMargand@armyspy.com' 		, 'fdsasaadaze' 	,70 , 22, 180),
	('Delmar'		,'Brisette'		, 'DelmarBrisette@teleworm.us' 		,'qssvxvcbv'		, 95, 25,160 ),
	('Courtland'	,'Lépicier'		,'CourtlandLepicier@dayrep.com' 	,'fsdfsdfsdfsd' 	,80  ,26,186 ),
	(' Varieur'		,'Felicien'		, 'FelicienVarieur@teleworm.us' 	,'dsfdfsfsdfs'		,96, 35, 190),
	('Charette'		,'Laurent' 		,'LaurentCharette@dayrep.com'		,'ezrzerzerezrdsf'	,105 , 40,180),
	('Chaussée'		,'Nicolas' 		,'NicolasChaussee@dayrep.com'		,'dsfsdfsdfsf'		,120,30 ,156),
	('Bernier'		,'Russell' 		,'RussellBernier@jourrapide.com'	,'dsfsfsfsdf6569'	, 80,55 ,170),
	('Talon '		,'Alexandre' 	,'TalonAlexandre@armyspy.com'		,'dsfsdfsdfsf'		,90,22,195),
	('Goudreau'		,'Daniel' 		,'DanielGoudreau@rhyta.com'			,'dfsdfazaezer'		,86,25,175),

	('Sansouci'		,'Sennet' 		,'SennetSansouci@armyspy.com'		,'dsfdsfsdfdsd'    	,90, 55,167),
	('Jeoffroi'		,'Rodrigue'		,'JeoffroiRodrigue@armyspy.com'		,'qsdqsdqdsqd'		,56 ,18 ,160),
	('Henri'		,'Gaillard' 	,'HenriGaillard@rhyta.com'			,'ezdazazea'		,60 ,20,180),
	('Leverett'		,'Bossé' 		,'LeverettBosse@jourrapide.com'		,'fdsfdsfsdsfd'		,80 , 22,170),
	('Grégoire '	,'Quenneville' 	,'GregoireQueeville@jourrapide.com' ,'dsfdsddfssdf'		,75 ,35,180),
	('Paien'		,'Jodion' 		,'PaienJodion@jourrapide.com'		,'dsfsdfdfggdg'		,80 ,30 ,180),
	('Ogier'		,'Beauchamps' 	,'OgierBeauchamps@dayrep.com'		,'qsdqsdqs'			,67,33 ,165),
	('Langlois'		,'Guillaume' 	,'GuillaumeLanglois@rhyta.com'		,'sqvcvvxvcxcv'		,75,45,170),
	('Croquetaigne' ,'Sébastien'	,'SebastienCroquetaigne@dayrep.com' , 'cxwwxwxcwzqzdd'	,71 , 19,155),
	('Lafontaine'	,'Denis ' 		,'DenisLafontaine@armyspy.com'		,'sdfsdfdsffdsf'	,85, 22,180),
	('Fresne'		,'Isaac' 		,'IsaacFresne@dayrep.com'			,'ùmqsdkjqsdq' 		,75 ,21 ,165),
	('Gradasso'		,'Houle' 		,'GradassoHoule@armyspy.com'		,'sqjdhsqdjqsbd' 	,80 ,32 ,180),
	('Hétu'			,'Louis' 		,'LouisHetu@teleworm.us'			,'dslkqsjsdjoqsi'   ,95,23,175),
	('Chauvin'		,'Bertrand' 	,'BertrandChauvin@rhyta.com'		,'qskdksjdhqsdq'	,65,24,162),
	('Labrecque'	,'Sennet' 		,'SennetLabrecque@jourrapide.com'	,'mljhbhjbvvghvgh'	,70 ,30,170),
	('Piedalue'		,'Patrick' 		,'PatrickPiedalue@rhyta.com'		,'lmsqdkqsdqsdodn'	,85 ,48,154),
	('Henrichon'	,'Thierry' 		,'ThierryHenrichon@teleworm.us'		,'dslqs;dqpsd'		,76,50 ,166),
	('Picard'		,'Arno' 		,'ArnoPicard@jourrapide.com'		,'mskpkdpqokods'	,80,80 ,180),
	('Boncoeur'		,'Charlot' 		,'CharlotBoncoeur@jourrapide.com'	,'qdbjbskdbqsd'		,85 ,25,190),
	('Huppé'		,'Vick' 		,'VickHuppe@rhyta.com'				,'mmlksqposposdq'	,95 ,22 ,185),
	('Tachel'		,'Archard' 		,'ArchardTachel@armyspy.com'		, 'mnbqbqggqyq'		,59, 22,165),

	('Forest'		,'Curtis' 		,'CurtisForest@rhyta.com'			, 'sqsddsqsza'		,85 ,30,50),
	('Frappier'		,'Julien' 		,'JulienFrappier@dayrep.com'		,'sqdqsdaa' 		,85 , 25,158),
	('Quenneville'	,'Evrard' 		,'EvrardQuenneville@armyspy.com'	,'qdsddswx<<x' 		,80,33,150),
	('Desforges'	,'Campbell' 	,'CampbellDesforges@armyspy.com'	,'ddsfsqqqqds'		,79 ,24,186),
	('Fréchette'	,'Royce'	    ,'RoyceFrechette@rhyta.com'			,'dsfsfdsffd'		,58, 33,190),
	('Leroux'		,'Gano' 		,'GanoLeroux@teleworm.us'			,'zaazsdsdfd'		, 70, 68,178),
	('Bernier'		,'Fletcher' 	,'FletcherBernier@armyspy.com'		,'lmsklmkq21654'	,80,19,169),
	('Chnadonnet'	,'Jacques' 		,'JacquesChnadonnet@rhyta.com'		,'sfd446465'		,95,22 ,168),
	('Monjeau'		,'Loyal' 		,'LoyalMonjeau@rhyta.com'			,'zaza45456'		,85,25,170),
	('Roux'			,'Telford' 		,'TelfordRoux@dayrep.com'			,'45465654'			,86,36,167),
	('Desrosiers'	,'Chappell' 	,'ChappellDesrosiers@teleworm.us'	,'44654564'			,57 ,58 ,160),
	('Quessy'		,'Orson' 		,'OrsonQuessy@dayrep.com'			,'qdqsqdqsqsdqs'	, 59,48 ,168),
	('Leduc'		,'Pinabel' 		,'PinabelLeduc@armyspy.com'			,'sqdqs48848'		,68 ,40 ,190),
	('Bazinet'		,'Wyatt' 		,'WyattBazinet@rhyta.com'			,'44884ssdqqsdae'	,56 ,87 ,160),
	('Brunault'		,'Jeoffroi' 	,'JeoffroiBrunault@dayrep.com'		,'4654dsqqfe'		,48,19 ,189),
	('Metivier'		,'Eustache'		,'EustacheMetivier@teleworm.us'		,'6544dsqdqszaz'	,90 , 22,190),
	('Soucy'		,'Davet' 		,'DavetSoucy@dayrep.com'			,'54sqazezaeaz8'	,68,24 ,170),
	('Harquin'		,'Granville' 	,'GranvilleHarquin@jourrapide.com'	,'qdsfsd4848884'	,70 , 35,180),
	('Côté'			,'Isaac' 		,'IsaacCote@armyspy.com'			,'kjdfndsfd65654'	,56, 20,170),
	('Robitaille'	,'Zacharie' 	,'ZacharieRobitaille@rhyta.com'		,'dsfsdfmmlp5'		, 68, 19,198),

	('Auberjonois'	,'Porter'		,'PorterAuberjonois@teleworm.usMajory'	,'qdqsd5464'	,78,18 ,168),
	('Majory'		,'Adrien' 		,'AdrienMajory@teleworm.us'				,'dsfsd984897'	,48 , 18,150),
	('Ferland'		,'Romain'		,'RomainFerland@teleworm.us'			,'bhjfhsdfghsdf', 68, 54,189),
	('Simon'		,'Antoine' 		,'AntoineSimon@jourrapide.com'			,'ddssdsf5464'	, 167, 40,170),
	('Course'		,'Avenall' 		,'AvenallCourse@teleworm.us'			,'556585sqdqsd'	, 120,30,180),
	('Foucault'		,'Clovis' 		,'ClovisFoucault@dayrep.com'			,'d564548qs'	, 150,40 , 150),
	('Louineaux'	,'Ignace' 		,'IgnaceLouineaux@jourrapide.com'		,'445sdqqdsaa'	,70,68 ,180),
	('Gareau'		,'Scoville' 	,'ScovilleGareau@dayrep.com'			,'654564sdqd'	,67,65,180),
	('Guernon'		,'Cheney' 		,'CheneyGuernon@jourrapide.com'			,'sqd15ds56qdd'	, 59,26,167),
	('Bériault'		,'Eliot' 		,'EliotBeriault@jourrapide.com'			,'156sqdq5s1d'	,70 ,55,168),
	('Fontaine'		,'Huon' 		,'HuonFontaine@dayrep.com'				,'5s54sqdqsda9'	,145 ,30,165),
	('Routhier'		,'David' 		,'DavidRouthier@dayrep.com'				,'56q5dsqdqds8'	,67 , 40,180),
	('Therriault'	,'Ignace' 		,'IgnaceTherriault@dayrep.com'			,'jklkjsdlqjdaz',87 , 35,156),
	('Reault'		,'Moore' 		,'MooreReault@armyspy.com'				,'sqdq,sdknqsd'	,90,30,195),
	('Faure'		,'Beltane' 		,'BeltaneFaure@teleworm.us'				,'hshqshuydgqsd',95,45,167);
	

create table Programme (

		id  int (3) not null ,
		nom varchar (30) not null, 
		type varchar (30) not null, 
		prix int (3) not null, 
		description varchar(200) not null ,
		difficulte  int (3) not null, 
		avis int(2)
); 

create table Exercice (

		id_programme int(3) not null, 
		nom_exercice varchar(30) not null, 
		type  varchar(30) not null, 
		description varchar(200) not null, 
		prix_exercice int(3) not null
); 

create table Conseil_dietetique (

		id_programme  int(3) not null, 
		nom_conseil   varchar(30) not null , 
		type  varchar(30) not null, 
		description varchar(200) not null, 
		prix_conseil  int (3) not null
);


create table Pratique (

		email_adherent varchar(200) not null, 
		id_programme int(3) not null, 
		date_debut varchar(30) not null, 
		date_fin   varchar(30) not null, 
		avis int(2)
);


create table Coaching_sportif (

		nom_coach varchar(30) not null ,
		prenom_coach  varchar(30) not null ,
		email_adherent varchar(200) not null,
		id_programme int(3) not null, 
		nom_exercice varchar(30) not null, 
		date_coaching  varchar (30) not null, 
		avis int (2)
);


create table Coaching_nutrition (
		nom_coach varchar(30) not null,
		prenom_coach varchar(30) not null,
		email_adherent varchar(200) not null , 
		id_programme int (3) not null, 
		nom_conseil varchar(30) not null,
		date_coaching varchar(30) not null, 
		avis int (2) 
);



