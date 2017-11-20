
CREATE TABLE specialized_sch.Users (
    user_type_id int Not Null, -- 0: admin, 1: writer, 2:rookie
    user_id int Not Null,
    user_name varchar(55),
    password varchar(55),
    email varchar(55),
    first_name varchar(55),
    last_name varchar(55),
    gender char,
    birth_date Date,
    sign_up_date Date,
    country varchar(55),
    city varchar(55),
    rank_point int,
    coin int,
    Primary Key (user_id)
);

-- buddy list for each user
CREATE TABLE specialized_sch.Buddies ( 
    user_id int Not Null,
    buddy_id int,
    Foreign Key (user_id) References Users(user_id),
    Foreign Key (buddy_id) References Users(user_id),
    Primary Key (user_id)
);

-- each user profile has its own wall
CREATE TABLE specialized_sch.Wall (
    wall_id int Not Null,
    comment_id int UNIQUE,
    Foreign Key (wall_id) References Users(user_id),
    Primary Key (wall_id, comment_id)
);

CREATE TABLE specialized_sch.Comment (
    comment_id int Not Null,
    commenter_user_id int Not Null,
    comment_content varchar(255) Not Null,
    comment_creation_date Timestamp Not Null,
    comment_edited_date Timestamp Not Null,
    Foreign Key (comment_id) References Wall(comment_id),
    Primary Key (comment_id)
);

CREATE TABLE specialized_sch.Channel (
    channel_id int,
    channel_name varchar(255),
    Primary Key (channel_id)
);

CREATE TABLE specialized_sch.Title (
    user_id int,
    title_id int,
    title_name varchar(255),
    title_creation_date Timestamp,
    title_edited_date Timestamp,
    title_up_votes int,
    title_down_votes int,
    Primary Key (title_id),
    Foreign Key (user_id) References Users(user_id)
);

CREATE TABLE specialized_sch.Entry (
    user_id int,
    title_id int,
    entry_id int,
    entry_body varchar(255),
    entry_creation_date Timestamp,
    entry_edited_date Timestamp,
    entry_up_votes int,
    entry_down_votes int,
    Primary Key (entry_id),
    Foreign Key (title_id) References Title(title_id),
    Foreign Key (user_id) References Users(user_id)
);

CREATE TABLE specialized_sch.Voters (
    vote_type int Not Null, -- 0: favorite, 1: upvote, 2: downvote
    entry_id int Not Null,
    user_id int,
    Foreign Key (entry_id) References Entry(entry_id),
    Foreign Key (user_id) References Users(user_id),
    Primary Key (vote_type, entry_id)
);