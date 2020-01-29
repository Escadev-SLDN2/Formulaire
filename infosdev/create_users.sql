USE formulaire;

CREATE TABLE users (
    id int auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null
);

INSERT INTO users (
	name, 
    email
) 
VALUES (
	"Bob Marley", 
    "bob@marley.jm"
);