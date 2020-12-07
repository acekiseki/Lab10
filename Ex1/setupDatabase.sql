CREATE TABLE People
(
    user_id varchar(255) NOT NULL,

    PRIMARY KEY (user_id)
);

CREATE TABLE Posts
(
    post_id int NOT NULL AUTO_INCREMENT,

    content varchar(60000) NOT NULL,

    author_id varchar(255) NOT NULL,

    PRIMARY KEY (post_id),

    FOREIGN KEY (author_id) REFERENCES People(user_id) ON DELETE CASCADE
);