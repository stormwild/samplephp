DROP TABLE Courses;

CREATE TABLE Courses
(
    Id INTEGER PRIMARY KEY AUTOINCREMENT,
    Name TEXT NOT NULL,
    Author TEXT NOT NULL,
    Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    -- specify more columns here
);

-- SELECT
-- *
-- FROM
-- Courses


-- INSERT INTO Courses (Name, Author)
-- VALUES (
--     'High Performance PHP',
--     'Jonathan Klein'
--   );