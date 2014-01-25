CREATE DATABASE df_lms;

-- Note: Encrypt the password using SHA() before inserting it to the database. Do not store passwords as-is because they are sensitive data.
CREATE TABLE managers
(
	id serial,
	username varchar(20),
	password varchar(40),
	email_address varchar(255),
	primary key(id)
);

CREATE TABLE sport
(
	id serial,
	sport_name varchar(255),
	primary key(id)
);

CREATE TABLE league
(
	id serial,
	league_name varchar(25),
	tournament_type varchar(14),
	no_of_divisions int(3),
	start_date date,
	end_date date,
	sport_id bigint,
	admin_id bigint,
	primary key(id),
	foreign key(sport_id) references sport(id),
	foreign key(admin_id) references managers(id)
);

create table division
(
	id serial,
	division_name varchar,
	league_id bigint,
	primary key(id),
	foreign key(league_id) references league(id)
);

create table team
(
	id serial,
	team_name varchar,
	division_id bigint,
	primary key(id),
	foreign key(division_id) references division(id)
);

create table player
(
	id serial,
	player_name varchar unique,
	age int,
	team_id bigint,
	primary key(id),
	foreign key(team_id) references team(id)
);
