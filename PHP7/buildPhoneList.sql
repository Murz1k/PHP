USE PHP7;

CREATE TABLE phoneList(
	id int PRIMARY KEY,
	firstName VARCHAR(15),
	lastName VARCHAR(15),
	email VARCHAR(20),
	phone VARCHAR(15)
);

INSERT INTO phoneList VALUES (0, 'Рысин', 'Михаил', 'mrysin@mail.ru', '+79689106245' );

SELECT * FROM phoneList;

