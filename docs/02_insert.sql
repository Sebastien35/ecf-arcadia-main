USE arcadia_db;
SET NAMES 'utf8mb4';

INSERT INTO schedule
    (id, day, opening_time, closing_time, is_closed)
VALUES
    (1, 'Lundi', '09:00:00', '19:00:00', 0),
    (3, 'Mardi', '09:00:00', '19:00:00', 0),
    (4, 'Mercredi', '09:00:00', '19:00:00', 0),
    (5, 'Jeudi', '09:00:00', '19:00:00', 0),
    (6, 'Vendredi', '09:00:00', '19:00:00', 0),
    (7, 'Samedi', '09:00:00', '19:00:00', 0),
    (22, 'Dimanche', '09:00:00', '19:00:00', 1);

INSERT INTO 'habitat'
    ('id', 'name', 'description', 'image', 'comment')
VALUES
    (2, 'Savane', 'La savane, ça vient de l\'espagnol et ça veut dire « plaine sans arbres ». En fait c\'est une grande prairie où il y a beaucoup d\'herbe et très peu d\'arbres à cause de la sécheresse. Dans la savane en Afrique tu peux voir beaucoup d\'animaux comme par exemple des girafes, des éléphants, et aussi des lions', '[\"savane-66911c0c8a357.jpg\"]', ''),
    (11, 'Marais', 'La tourbière est un écosystème\r\nconstamment saturé d’eau au sein duquel\r\ns’accumulent les matières organiques non\r\ndécomposées, formant la tourbe.\r\nLes tourbières véritables se distinguent des\r\nbas-marais par l’épaisseur de la tourbe,\r\nsupérieure à 50 centimètres.', '[\"marais-6690fb4663cd3.jpg\"]', ''),
    (12, 'Jungle', 'La jungle est une immense forêt où poussent de façon très serrée, arbres, broussailles et plantes hautes. Pour vivre, cette végétation très dense a besoin de beaucoup d\'eau. C\'est pourquoi elle se situe dans les régions proches de l\'équateur où le climat est pluvieux.', '[\"jungle-6690fc14da62d.jpg\"]', '');

INSERT INTO `service`
    (`id`, `name`, `description`, `image`)
VALUES
    (6, 'Petit train', 'Découvrez notre petit train touristique, une aventure de 60 minutes à travers les sites emblématiques de la ville. Confortablement installé, laissez-vous guider et émerveillez-vous devant les monuments historiques, les parcs verdoyants et les vues panoramiques. Une expérience idéale pour toute la famille.', '[\"train-6691038daacd4-jpg\"]'),
    (7, 'Visite Guidée', 'Découvrez notre visite guidée au zoo, une immersion de 90 minutes avec un guide expert pour explorer de près des espèces fascinantes et en apprendre davantage sur leur habitat et la conservation. Une expérience éducative et divertissante pour tous les âges.', '[\"visite-668e93c1269dc-jpg\"]'),
    (8, 'Restaurant', 'Savourez une expérience culinaire unique dans notre restaurant, où chaque plat est préparé avec des ingrédients frais et locaux. Profitez d\'une ambiance chaleureuse et d\'un service impeccable, parfaits pour vous reposer et vous rassasier en contemplant nos magnifiques T-rex', '[\"gigantes-668e93e3c9af5-jpg\"]');

INSERT INTO 'animal'
    ('id', 'habitat_id', 'name', 'race', 'image')
VALUES
    (8, 2, 'Wivine', 'Vélociraptor', '[\"velociraptor-66911c2e52919.jpg\"]'),
    (11, 12, 'Seb', 'Diplodocus', '[\"diplodocus-6693e96007d6d.jpg\"]'),
    (12, 2, 'Capt\'', 'Spinosaure', '[\"spinosaurus-6693f36737411.jpg\"]'),
    (13, 2, 'Exploris', 'T-Rex', '[\"1526479615762038050-669413357050c.jpg\"]');

INSERT INTO `veterinary_report`
    (`id`, `animal_id`, `user_id`, `health_status`, `food`, `food_weight`, `report_date`, `detail`)
VALUES
    (11, 8, 12, 'Bonne santée', 'Christian', 85.00, '2024-07-14 20:00:00', 'Tres bonne santée'),
    (12, 13, 1, 'Tres bonne santé', 'Nathan', 90.00, '2024-07-14 20:00:00', 'Il a de très belle couleur. Adore le coloriage.'),
    (13, 12, 1, 'Mourant peuchère', 'Thomas', 70.00, '2024-07-14 20:00:00', 'Ho bichette il est mal en point nous pensons l\'achever'),
    (14, 13, 1, 'Bonne santée', 'Enfant', 20.00, '2024-07-15 12:00:00', 'Manger doucement en plusieur partie car en une fois y\'a pas assez de plaisir et Explo risque de s\'étouffer');

INSERT INTO 'animal_feeding'
    ('id', 'animal_id', 'user_id', 'feeding_date', 'food', 'quantity')
VALUES
    (12, 8, 1, '2024-07-12 13:00:00', 'Chevre', 2.00),
    (14, 11, 1, '2024-07-14 12:00:00', 'Herbes', 10.00),
    (15, 8, 1, '2024-07-14 18:00:00', 'Mouton', 3.00),
    (16, 12, 3, '2024-07-14 18:00:00', 'Vache', 10.00),
    (17, 8, 12, '2024-07-14 20:00:00', 'Christian', 1.00),
    (18, 13, 1, '2024-07-15 12:00:00', 'Enfant', 20.00);

INSERT INTO `review`
    (`id`, `pseudo`, `comment`, `valid`, `submitted_at`, `rating`)
VALUES
    (8, 'Thomas', 'Tu sais pas jouer Jack. C\'est la piquette Jack.T\'es mauvais Jack.', 1, '2024-07-09 15:59:51', 0),
    (9, 'Wivine', 'C\'est pas oufff', 1, '2024-07-09 17:20:33', 0),
    (10, 'Sourour', 'C\'est null', 1, '2024-07-10 13:27:30', 0),
    (12, 'Nathan', 'Que c\'est moche.', 1, '2024-07-10 16:26:59', 0),