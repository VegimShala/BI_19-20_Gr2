<?php

require_once "config.php";

// $sql = "INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `pass`) VALUES ('VSvh1', 'Vegim Shala', 'vegimsh', 'vegimshala99@gmail.com', '0000');";
// if ($conn->query($sql) === TRUE) {
//           echo "User was added successfully";
//         } else {
//           echo "Error adding user!!! " . $conn->error;
//         }

// $sql1 = "INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `pass`) VALUES ('EVep2', 'Erona Vrapcani', 'eronavrp', 'eronavrapcani@gmail.com', '0000');";
// if ($conn->query($sql1) === TRUE) {
//           echo "User was added successfully";
//         } else {
//           echo "Error adding user!!! " . $conn->error;
//         }

// $sql2 = "INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `pass`) VALUES ('LSla3', 'Loreta Shala', 'loretashala', 'loretashala99@gmail.com', '0000');";
// if ($conn->query($sql2) === TRUE) {
//           echo "User was added successfully";
//         } else {
//           echo "Error adding user!!! " . $conn->error;
//         }

// $sql3 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Prizren', 'Southwest', '20000', 'Kalaja e Prizrenit, Shadervani, Lidhja e Prizrenit');";
// if ($conn->query($sql3) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql4 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Gjakove', 'West', '50000', 'Çarshia e Madhe, Hadum Mosque,Çabrati Hill');";
// if ($conn->query($sql4) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql5 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Peja', 'West', '30000', 'White Drin, Rugova Gorge');";
// if ($conn->query($sql5) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql6 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Gjilan', 'East', '60000', 'Vali Ranch, Perlepnica');";
// if ($conn->query($sql6) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql7 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Mitrovica', 'North', '40000', 'Town Castle, Stone Bridge, Museum of Mitrovica');";
// if ($conn->query($sql7) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql8 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Shterpce', 'South', '73000', 'Brezovica');";
// if ($conn->query($sql8) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql9 = "INSERT INTO `cities` (`id`, `name`, `location`, `zipcode`, `trait`) VALUES (NULL, 'Lipjan', 'Center', '14000', 'Gadime Cave');";
// if ($conn->query($sql9) === TRUE) {
//           echo "City was added successfully";
//         } else {
//           echo "Error adding city!!! " . $conn->error;
//         }

// $sql10 = "INSERT INTO `hotels` (`id`, `name`, `address`, `tel`, `ID_Qyteti`) VALUES (NULL, 'Swiss Diamond Hotel', 'Sheshi Nëna Terezë, Prishtinë 10000', '+383 38 220 000', '2');";
// if ($conn->query($sql10) === TRUE) {
//           echo "Hotel was added successfully";
//         } else {
//           echo "Error adding hotel!!! " . $conn->error;
//         }

// $sql11 = "INSERT INTO `hotels` (`id`, `name`, `address`, `tel`, `ID_Qyteti`) VALUES (NULL, 'Emerald Hotel', 'Prishtina-Skopje Highway, 10000', '+383 38 588 888', '2');";
// if ($conn->query($sql11) === TRUE) {
//           echo "Hotel was added successfully";
//         } else {
//           echo "Error adding hotel!!! " . $conn->error;
//         }

// $sql12 = "INSERT INTO `hotels` (`id`, `name`, `address`, `tel`, `ID_Qyteti`) VALUES (NULL, 'Hotel Garden', 'Tahir Zajmi, Prishtinë 10000', '+383 45 717 177', '2');";
// if ($conn->query($sql12) === TRUE) {
//           echo "Hotel was added successfully";
//         } else {
//           echo "Error adding hotel!!! " . $conn->error;
//         }

// $sql13 = "INSERT INTO `hotels` (`id`, `name`, `address`, `tel`, `ID_Qyteti`) VALUES (NULL, 'Hotel Sharri', 'Prizren, Prevallë 20000', '+383 44 662 674', '3');";
// if ($conn->query($sql13) === TRUE) {
//           echo "Hotel was added successfully";
//         } else {
//           echo "Error adding hotel!!! " . $conn->error;
//         }

// $sql14 = "INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri1.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri2.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri3.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri4.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri5.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri6.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri7.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri8.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri9.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri10.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri11.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri12.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri13.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri14.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri15.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri16.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri17.jpg','#prishtina');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/pri18.jpg','#prishtina');";
// if ($conn->multi_query($sql14) === TRUE) {
//           echo "Photos were added successfully";
//         } else {
//           echo "Error adding photos!!! " . $conn->error;
//         }

// $sql15 = "INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s1.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s2.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s3.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s4.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s5.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s6.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s7.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s8.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s9.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s10.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s11.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s12.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s13.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s14.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s15.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s16.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s17.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s18.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s19.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s20.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s21.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s22.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s23.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s24.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s25.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s26.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s27.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s28.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s29.jpg','seasons');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/s30.jpg','seasons');";
// if ($conn->multi_query($sql15) === TRUE) {
//           echo "Photos were added successfully";
//         } else {
//           echo "Error adding photos!!! " . $conn->error;
//         }

// $sql16 = "UPDATE PHOTOS SET tag='prishtina' WHERE tag LIKE '\#%';";
// if ($conn->query($sql16) === TRUE) {
//           echo "Photos was updated successfully";
//         } else {
//           echo "Error updating photos!!! " . $conn->error;
//         }

// $sql17 = "INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m1.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m2.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m3.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m4.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m5.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m6.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m7.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m8.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m9.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m10.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m11.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m12.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m13.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m14.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m15.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m16.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m17.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m18.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m19.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m20.jpg','nature');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/m21.jpg','nature');";
// if ($conn->multi_query($sql17) === TRUE) {
//           echo "Photos were added successfully";
//         } else {
//           echo "Error adding photos!!! " . $conn->error;
//         }

// $sql18 = "INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a1.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a2.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a3.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a4.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a5.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a6.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a7.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a8.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a9.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a10.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a11.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a12.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a13.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a14.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a15.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a16.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a17.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a18.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a19.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a20.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a21.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a22.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a23.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a24.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a25.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a26.jpg','aesthetic');
// INSERT INTO PHOTOS VALUES(NULL,'images/Gallery/a27.jpg','aesthetic');";
// if ($conn->multi_query($sql18) === TRUE) {
//           echo "Photos were added successfully";
//         } else {
//           echo "Error adding photos!!! " . $conn->error;
//         }

// $sql19 = "INSERT INTO PHOTOS VALUES(NULL,'images/Places/germia1.jpg','germia');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/germia3.jpg','germia');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/germia4.jpg','germia');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/germia5.jpg','germia');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/brezovica1.jpg','brezovica');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/brezovica3.jpg','brezovica');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/brezovica4.jpg','brezovica');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/brezovica5.jpg','brezovica');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/drini2.jpg','drini');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/drini3.jpg','drini');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/drini7.jpg','drini');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/drini6.jpg','drini');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/gadime1.jpg','gadime');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/gadime2.jpg','gadime');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/gadime3.jpg','gadime');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/gadime4.jpg','gadime');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/kalaja1.jpg','kalaja');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/kalaja4.jpg','kalaja');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/kalaja6.jpg','kalaja');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/kalaja7.jpg','kalaja');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/mirusha1.jpg','mirusha');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/mirusha2.jpg','mirusha');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/mirusha6.jpg','mirusha');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/mirusha7.jpg','mirusha');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/prevalla1.jpg','prevalla');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/prevalla3.jpg','prevalla');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/prevalla4.jpg','prevalla');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/prevalla5.jpg','prevalla');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/rugova1.jpg','rugova');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/rugova3.jpg','rugova');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/rugova6.jpg','rugova');
// INSERT INTO PHOTOS VALUES(NULL,'images/Places/rugova7.jpg','rugova');";
// if ($conn->multi_query($sql19) === TRUE) {
//           echo "Places photos were added successfully";
//         } else {
//           echo "Error adding photos!!! " . $conn->error;
//         }
        
// $sql20 = "INSERT INTO PLACES VALUES(NULL,'Germia National Park','A cool place to spend a Sunday','Rr. Dr. Shpetim Robaj','Prishtine',2,'images/places/germia.jpg');
// INSERT INTO PLACES VALUES(NULL,'Prizrens Castle','A cool place to explore','Kalaja','Prizren',3,'images/places/kalaja.jpg');
// INSERT INTO PLACES VALUES(NULL,'Mirusha Waterfalls','A cool natural phenomenon','Llapçeve','Malisheve',4,'images/places/mirusha2.jpg');
// INSERT INTO PLACES VALUES(NULL,'White Drin','A cool place to visit','Radavc','Peje',5,'images/places/drini2.jpg');
// INSERT INTO PLACES VALUES(NULL,'Gadime Cave','A cool place to know','Gadime e Poshtme','Lipjan',9,'images/places/gadime2.jpg');
// INSERT INTO PLACES VALUES(NULL,'Brezovica Mountain','Weekends in Winter','Shterpce','Shterpce',8,'images/places/brezovica1.jpg');
// INSERT INTO PLACES VALUES(NULL,'Rugova Canyon','A cool place to spend a Sunday','Peje','Peje',5,'images/places/rugova1.jpg');
// INSERT INTO PLACES VALUES(NULL,'Prevalla','A cool place to walk','Prizren','Prizren',2,'images/places/prevalla5.jpg');";
// if ($conn->multi_query($sql20) === TRUE) {
//           echo "Places were added successfully";
//         } else {
//           echo "Error adding places!!! " . $conn->error;
//         }

// $sql21 = "INSERT INTO SERVICES VALUES(NULL,'Nightlife Tour','Activities','images/night1.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Tour to Rugova','Activities','images/rugova2.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Tour to Ulpiana','Activities','images/ulpiana1.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Sunny Hill Festival','Festivals','images/sunnyhill.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Pri Film Fest','Festivals','images/film.jpg');
// INSERT INTO SERVICES VALUES(NULL,'The Lily of Prizren','Festivals','images/zambaku.jpg');
// INSERT INTO SERVICES VALUES(NULL,'17 February','Events','images/kosova6.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Prite nShesh','Events','images/prite.jpg');
// INSERT INTO SERVICES VALUES(NULL,'DOKUTECH','Events','images/doku.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Lidhja e Prizrenit','Monuments','images/lidhja.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Mosque of Sinan Pasha','Monuments','images/xhamia2.jpg');
// INSERT INTO SERVICES VALUES(NULL,'National Museum of Kosovo','Monuments','images/muzeu3.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Famous restaurants in Prishtina','Food And Drink','images/rest.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Famous restaurants in Prizren','Food And Drink','images/restpri.jpg');
// INSERT INTO SERVICES VALUES(NULL,'Famous restaurants in Peja','Food And Drink','images/rest3.jpg');";
// if ($conn->multi_query($sql21) === TRUE) {
//           echo "Services were added successfully";
//         } else {
//           echo "Error adding services!!! " . $conn->error;
//         }


$sql22 = "INSERT INTO TOUR VALUES(NULL,'images/Services/rugova1.jpg','Starting tour','Among the tourist destinations to show you can get into the list of top Kosovar destinations, we cannot fail to introduce you to the Rugova Mountains, as one of the most beautiful places in Kosovo, where you can make these memorable uses in the fresh air of nature that is really true Generous with this seller.',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova2.jpg','Exploring the Rugova Mountains','You can visit this wonderful province at any time of the year, confident in your entertainment, which begins with nature walks, gorgeous greenery, long expeditions to the most beautiful places, enjoying natural food and hospitality. Together, it concludes with the skiing that awaits you in the heart of winter, slipping on gentle, rough slopes at the same time.',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova3.jpg','Beautiful nature','Rugova is a separate locality consisting of 13 villages, which extend west of the city of Peja, on both sides of this city. Rugova begins where the Peja Bistrica flows from the Rugova Gorge and continues along this river to its sources at Qaf Qakorri in the west',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova4.jpg','The tour to the Lake','If you are not too tired and want to enjoy the beauty of the Lake more, you can continue hiking to the Little Lake or otherwise known as Drelaj Lake. To get to Little Lake, you have to follow the path and walk for another 20 minutes.',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova5.jpg','Enjoying view','In Rugova, at an altitude of 1,970 meters, surrounded by high hills and numerous rocks, there is the Great Lake (Kuqishta Lake), whose beauty is fascinating. The Little Lake is full of rocks and icy water, but it is also an ideal place to relax. All those who want to combine nature and swimming should definitely visit the Lake and be amazed at the beauty of Kosovo',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova6.jpg','Beautiful places near the lake','MAGRA AUSTRIA is a natural ecohotel. It rises in the middle of a stunning landscape, in an area with a curative climate, untouched by air and acoustic pollution. The hotel is located 1450m above sea level; just 115 km from Pristina.',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/rugova7.jpg','Spend night here!','After a day spent hiking on Mountains and seeing the lakes that this beautiful place has, spenting the night here wolud end up your adventure in the best way possible.',2);
INSERT INTO TOUR VALUES(NULL,'images/Services/ulpiana1','An ancient Roman city','Ulpiana Antic City is believed to have been founded at the beginning of the secondcentury BC, and it has flourished during the third and fourth century.',3);
INSERT INTO TOUR VALUES(NULL,'images/Services/ulpiana2','More than 100 hectares worth of objects within the territory of the ancient town','It is supposed that it covered an area of more than 1000 kilometers and it waslocatedquite close to the rich mining',3);
INSERT INTO TOUR VALUES(NULL,'images/Services/ulpiana3','The ruins of a building with a beautiful mosaic are found in the south of the city','Historians believe that natural resources were the reason why this area gotconquered byRomans, and remained under their invasion for centuries',3);
INSERT INTO TOUR VALUES(NULL,'images/Services/ulpiana4','After the earthquake Justinian gave a new name to the city: Justiniana Secunda','The major part of the town was destroyed during the fifth century by the Goths andHuns,and the remaining parts were destroyed a few decades later by a catastrophic earthquake.',3);
INSERT INTO TOUR VALUES(NULL,'images/Services/ulpiana5','Emperor Justinian rebuilt the city and its fortifications','Nowadays its ruins can be visited in the territory of Prishtina.',3);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill1','Sunny Hill Festivals queen','SUNNY HILL Festival is the biggest festival organized in Kosovo.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill2','Miley Cyrus performing in Kosovo','Sunny Hill Festival is an international music festival of the highest standards, one that puts Prishtina on the festival map as a not-to-be-missed cultural place, in a country that loves music and knows how to have fun.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill3','GASHI performing for the first time at Sunny Hill Festival','We want to invite music lovers from around the world to come and enjoy our country, as well as performances of some of the best-known performers of our modern time and charts.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill4','Miley Cyrus performing in Kosovo','We believe we achieved this on our very first edition, with performances from Dua Lipa, Action Bronson, and Martin Garrix who will always be part of our history as the first ever Sunny Hill Festival Headliners',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill5','Its all about having fun... and seeing stars','From New York to London, from Milan to Sao Paulo and New Delhi to Los Angeles, Sunny Hill Festival was a sensation everyone from all corners of the world was talking about and an event that thousands and thousands wanted to experience.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill6','Live emotions that you never had before','In the end, more than 50 thousand people did (unfortunately, the location could not handle more than that) In the second edition of Sunny Hill, we want to break our own records, by making the greatest music event in the region.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/sunnyhill7','Every year here for you','And yes, you are invited.',4);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest3.jpg','Prishtina International Film Festival','Prishtina International Film Festival (PriFest) is a feature film festival set in the youngest country in the Balkans, Kosovo, namely in its capital Pristina. It was founded in 2008, and this year it holds its 11th edition',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest4.jpg','Trendy and affordable clubs and bars','Prishtina International Film Festival is the most important film event that is held in Kosovo. Vanessa Redgrave is one of the festival’s dearest friends. She supported the first edition by attending and leading the opening ceremony. She is the president of the Honorary Board of the Festival and supports the festival by promoting it in various international circles.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest5.jpg','Afterparties program','The festival consists of four competition programs: the European film competition program, the Balkan film competition program (also known as Honey and Blood Cinema), the Middle-length competition program (comprised of 25-60 min length films) and as of this year, the Documentary film program will also be competitive. The latter promotes documentaries from around the world that revolve around subjects related to human rights and the environment.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest6.jpg','Afterparties programs','All of the above-mentioned programs are open to the whole world. PriFest also has non-competitive programs, like the Focus program, which promotes cinematography of a specific country or director, and the Let It Be program, which is a result of cooperation with Outfest LA, an LGBTI film festival.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest7.jpg','Best selection of local and international electronic music artists','This program aims to raise awareness and promote tolerance towards the LGBTI community in Kosovo by offering more knowledge, information and understanding through cinema and feature films. The festival is honored to have the programmers of Outfest LA as curators of this program. Last but not least is the The Special Screenings program, which promotes winners of prestigious festivals like Cannes FF, Berlinale, Toronto, Venice or Oscar winners, giving the Kosovar audience the unique opportunity to see art house films from around the world.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest8.jpg','Best selection of local and international alternative rock music bands','We prioritize our afterparties program with only the very best selection of local and international electronic music artists, as well as alternative rock music bands. You will find yourself enjoying the evenings in good company, at trendy and affordable clubs and bars. If you’re feeling rather adventurous, you can join excursions organized by the festival around Kosovo to experience the country’s beautiful landscape and nature, visit cultural heritage monuments and try delicious traditional dishes.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest9.jpg','Good company','In 2015, Prishtina International Film Festival suffered an interruption in the form of drastic funding cuts by the newly appointed Minister of Culture. This forced the Prishtina International Film Festival management to make the decision to rebel and protest by taking the festival to Tirana, Albania, and holding a special edition there, in exile, without budget. The echo of this action spread widely and gained the festival great support from the regional, European and world film industries',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/filmfest10.jpg','Every year here for you','Prishtina International Film Festival came back home last year with a very strong edition, expanding in many aspects. This year we certainly do not plan to do less, therefore we need your support to show the importance of this event for the development of film industry and for supporting young talents in a small country like Kosovo.',5);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku1.jpg','Proud tradition of old ‘citizen songs','Zambaku i Prizrenit (The Lily of Prizren), was founded in 1986 from cultural institutions of Kosovo of that time, as the only cultural event that cultivates the urban music genre, such as ballads and serenades',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku2.jpg','Traditional music','This festival focuses more on the traditional Albanian songs, but some editions have also had performances by other ethnic groups from Kosovo.',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku3.jpg','Prizren celebrates its great musical legacy every June/July','Zambaku i Prizrenit (Lily of Prizren) is a traditional song festival which is organized during the first week of July.',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku4.jpg','More intricate composition, rhythms and different topics.','In Prizren traditionally is organized a song festival Zambaku i Prizrenit (Lily of Prizren), which is the only one that cultivates old citizen songs.',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku5.jpg','Every year here for you','Prizren celebrates its great musical legacy every June July with the unique Zambaku i Prizrenit (Lily of Prizren) festival, held at the open air Lumbardhi cinema.',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/zambaku6.jpg','Every year here for you','Although the festival focuses on Albanianlanguage songs, some editions also have performances by other ethnic groups from Kosovo. At the festival it’s not just old material that is performed - each year new artists add songs to Prizren’s repertoire.',6);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova1.jpg','Independence Day','Kosovo declared independence from Serbia on Sunday, February 17, 2008, sending tens of thousands of ethnic Albanians streaming through the streets to celebrate what they hoped was the end of a long and bloody struggle for national self-determination',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova2.jpg','Kosovo National Team','Manned mostly with young players from Kosovos diaspora, the team is a powerful symbol of the 1.8 million Kosovars campaign for respect abroad, due in part to the importance that Pristina has long attached to sports and culture to buttress its efforts for international recognition.',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova3.jpg','Kosovo Flag','The flag displays six white stars in an arc above a golden map of Kosovo on a blue field. They are officially meant to symbolize Kosovos six major ethnic groups: Albanians, Serbs, Turks, Gorani, Roma and Bosniaks.',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova4.jpg','Kosovo National Team','Kosovo were admitted as members of UEFA and subsequently FIFA in 2016',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova5.jpg','Kosovo Army','The KSF will for the first time this year overtake the capitals squares with a new military mission. Force Day will be an open day where citizens will be able to see closely their army with new mandates. It will also present new emblems for the KSF units.',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/kosova6.jpg','NEWBORN','Among other ways to portray such a celebration, Fisnik Ismajli designed the sculpture “NEWBORN” which now serves as a touristic attraction and a way of learning more about Kosovo’s endeavor towards its independence. More than that, NEWBORN is an emotional monument whose design is prone to constant changes on yearly bases. It serves as a mean to interpret the current issues that our society in Kosovo faces and the message we want to convey to the international community.',7);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite1.jpg','Magic moments','This years Cut to the Square has not only been one night as it was in previous years, but has been full of 27 nights.',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite2.jpg','Come with your friends','We have started since December 4th to continue until December 31 and January 1. Until January 1, there will be a musical performance.',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite3.jpg','Listen to music','Plus there were two areas where every night there were bands and different artists performing… ',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite4.jpg','Lights everywhere','Through cultural activities and such activities we reach an awareness of different generations and are very important, well worth a little past good times outside the house too',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite5.jpg','Creativity','At the beginning of the square, old English music accompanies the dances of visitors coming from different cities of Kosovo and beyond.',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite6.jpg','The most beautiful time','Under the tune of old city songs, young and old are enjoying the festive warmth in Pristina Square.',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite7.jpg','Vere nDimen','Year-end holidays are making even the best small wooden houses located in Zahir Pajaziti Square in Pristina. These houses where citizens can spend their time and serve hot drinks are staying open daily from morning till midnight, in the framework of Vere nDimen activity',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/prite8.jpg','New year is coming','Among many, children are enjoying the magic of this winter the most. Beards are the ones who bring smiles to the faces of little angels. This festive atmosphere is followed every night with live music by various singers and bands.',8);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku1.jpg','','DOKU.TECH 2020 | Digitizing the Human, Humanizing the Digital',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku2.jpg','','DOKU.TECH is an annual event bringing together individuals and tech talents with top-tier international future makers, executives, and thinkers.',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku2.jpg','','This conference explores and challenges the social implications of technological innovations through connectivity, content, masterclasses, workshops, and openness while inspiring youngsters by sharing knowledge and experiences.',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku3.jpg','Every year here for you','In 2019, DOKU.TECH, tackles these issues and more surrounding the ever growing struggle between humanity and digitalization',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku4.jpg','','Our speakers on the main stage will discuss: Ownership, Autonomy, Independence, Interconnection, Privacy, and Security.',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku5.jpg','','What’s the best way to wrap up an amazing day you ask? Food, music, drinks, awesome weather and amazing people of course.',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/doku6.jpg','','Humanizing the digital, digitizing the human, the outstanding tech conference which will be held at the well known youth transformed building',9);
INSERT INTO TOUR VALUES(NULL,'images/Services/lidhja1.jpg','Environmental value','The Prizren League building is located within the Gazi Mehmed Pasha Complex, respectively within the Albanian Prizren League Complex. The complex of the Albanian League of Prizren, as a spatially urban-architectural unit, is located in the old core of the city and has special cultural-historical, social and environmental value. The building of the League of Prizren has rectangular layout, it is formed on the ground floor and the floor.',10);
INSERT INTO TOUR VALUES(NULL,'images/Services/lidhja2.jpg','Social value','The floor is console-shaped to the east façade. The facade treatment is linear, with some rectangular openings and four aquatic roofs. The Prizren League building originally served as a classroom for the Gazi Mehmed Pasha complex. In 1878 until 1881 this building was used as the administrative office of the Albanian League of Prizren.',10);
INSERT INTO TOUR VALUES(NULL,'images/Services/lidhja3.jpg','Cultural-historical value','During the century. XX this building was used as living space. In 1968 the building was dislocated a few meters to the west due to road construction. The years 1976-1978 mark the restoration and revitalization interventions where, in honor of the 100th anniversary, the building becomes part of the Museum Complex of the Albanian League of Prizren. In March 1999 the facility was completely destroyed by Serbian paramilitaries and a park was formed there. Immediately after June 1999, work began on the design and reconstruction of this important historical icon for the history of the Albanian people. The works were completed on June 10, 2000. In 2003, the courtyard of the complex of the Albanian League of Prizren was redesigned, and it serves as a Historical Museum. The historical museum exhibits exhibits that tell the story of the development of political events during the period 1878 - 1881.',10);
INSERT INTO TOUR VALUES(NULL,'images/Services/xhamia.jpg','The Sinan Pasha Mosque represents one of the most characteristic monuments of Prizren','The Sinan Pasha Mosque is located in the Historic Zone of Prizren city. It was built in 1615 by Sophie Sinan Pasha - a prominent person, a man of knowledge, with an important position in the Ottoman administration.',11);
INSERT INTO TOUR VALUES(NULL,'images/Services/xhamia1.jpg','The mosque is covered with a 42.5 m wide dome.','With its dominant position, dimensions, shape, proportion of the minaret to the dome, materials and construction techniques, rich interior decorations, the Sinan Pasha Mosque represents one of the most characteristic monuments of Prizren. The mosque is set on a raised plinth where access from the road is to the north via stone carved stairs. It has a square layout with a niche in the south-east that makes the mosque more specific compared to other mosques in Kosovo.',11);
INSERT INTO TOUR VALUES(NULL,'images/Services/xhamia2.jpg','The mosque served religious needs until 1912','It is built of hewn river stones, bound with limestone, while on the outside it is covered with carved stones (which are supposed to have been taken from the ruins of the Archangel Monastery). The mosque minaret is made of paving stones (square), square base and circular trunk. At the top is a sheriff. In front of the entrance to the mosque is an open, stone-built porch. The porch has three domed domes that rest on circular stone pillars. The mosque is covered with a 42.5 m wide dome. The interior is a unique space, illuminated by tiered windows, with domes painted in three-phase floral motifs.',11);
INSERT INTO TOUR VALUES(NULL,'images/Services/muzeu1.jpg','Archaeological sector, Ethnological sector','Kosovo Museum (Albanian: Muzeu i Kosovës) is the National Museum of Kosovo[a], located in the city of Pristina.It was founded in 1949 and is the largest museum in Kosovo. However, the building of the museum was constructed in 1889 and it was designed according to the Austro-Hungarian style of construction and its real aim was establishing the high military command of that time.',12);
INSERT INTO TOUR VALUES(NULL,'images/Services/muzeu2.jpg','Historic sector','The Museum is the earliest institution of cultural heritage in Kosovo, established with the goal of preserving, restoration-conservation and presentation of movable heritage on the territory. It is situated in a special facility, from an architectural point of view but also because of its location since it is situated at the old nucleus of the city centre.',12);
INSERT INTO TOUR VALUES(NULL,'images/Services/muzeu3.jpg','Natural sector','Founded in 1949, the Kosovo Museum has departments of archaeology, ethnography, and natural science, to which a department for the study of history and the National Liberation Struggle was added in 1959. It has been active in sponsoring archaeological excavations, conservation and other scientific work. Since 1956 it has published an annual journal called Buletin i Muzeut të Kosovës, with articles in Albanian',12);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrishtina1.jpg','Restaurant El Greco','Traditional Greek cuisine with Greek chef in downtown Pristina. Greek cuisine with Greek chef in Prishtina city center. Restaurant EL GRECO with its chefs with over 25 years of experience in Germany comes to Kosovo. It is a Kosovoaro-Greek investment of two gastronomes that prioritize the quality and satisfaction of guests. EL GRECO brings you traditional Greek cuisine, Greek wine and the famous OUZO',13);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrishtina2.jpg','Princesha Gresa Restaurant','Princesha Gresa Restaurant is known as one of the first International restaurants in Kosovo starting its work since 1999',13);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrishtina3.jpg','Restaurant Liburnia','Family-friendly restaurant · Eastern European restaurant',13);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrizren1.jpg','Tiffany Restaurant','Family-friendly restaurant · Eastern European restaurant',14);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrizren2.jpg','Restorant Besimi - Beska','Family-friendly restaurant · Eastern European restaurant',14);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPrizren3.jpg','Villa Park Restaurant','Vila Park is a family-run restaurant located 12 km from Prizren-Prevalla. Professional kitchen and service. Welcome. Family-friendly restaurant · Eastern European restaurant',14);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPeje1.jpg','Dukagjini Hotel','Following the most ambitious hotel restoration in Kosova’s history, Dukagjini Hotel, as part of Dukagjini Group, once again takes its place at the heart of Peja. An icon since 1956, Dukagjini Hotel has always been recognized as one of leading hotels in Kosova. The hotel seamlessly blends elements of the original and the new while the stunning new interiors sparkle with timeless elegance and glamour.',15);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPeje2.jpg','Zenel Bey Tower','Peja has been known as a settlement since ancient times, where it was continuously lived and created. To this day, there have been many religious and secular creations and monuments of monumental value from local craftsmen and artists.',15);
INSERT INTO TOUR VALUES(NULL,'images/Services/restaurantsPeje3.jpg','Trofta e Drinit','Trofta e Drinit is a family-run restaurant located 12 km from Prizren-Prevalla. Professional kitchen and service. Welcome. Family-friendly restaurant · Eastern European restaurant',15);";
if ($conn->multi_query($sql22) === TRUE) {
          echo "Tours were added successfully";
        } else {
          echo "Error adding tours!!! " . $conn->error;
        }

?>