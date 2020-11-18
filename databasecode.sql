CREATE TABLE Professor (
        SSN        INT PRIMARY KEY,
        Name       VARCHAR(20),
        Address    VARCHAR(100),
        Phone      INT,
        Sex        VARCHAR(1),
        Title      VARCHAR(20),
        Salary     DECIMAL(7,2),
        Collegedeg VARCHAR(20)
        
    );
    
    DESCRIBE Professor;
    
    SELECT * FROM Professor;
    
    
    
    SELECT SSN, Name, Salary
    FROM Professor;
   
    INSERT INTO Professor VALUES(111111111, 'Sarah Samantha', '1322 W ball rd Anaheim Ca 92804', 714295887 , 'F', 'CSProfessor', 80000.00, 'MasterDeg');
    INSERT INTO Professor VALUES(222222222, 'James Polk', '1495 W ball rd Cypress Ca 92804', 213295887 , 'M', 'Art Professor', 70000.00, 'Bachelor');
    INSERT INTO Professor VALUES(333333333, 'Scott Ross', '918 W ball rd Anaheim Ca 92805', 949295887 , 'M', 'CSProfessor', 70000.00, 'Bachelor');

   
    CREATE TABLE Department (
        DNumber   INT PRIMARY KEY,
        DName     VARCHAR(30),
        DPhone    INT(10),
        DLocation VARCHAR(30),
        ChrPerson INT,
        FOREIGN KEY (ChrPerson) REFERENCES Professor (SSN) ON DELETE SET NULL
        
    );
    
    
    SELECT * FROM Department;
    
    INSERT INTO Department VALUES(1, 'Computer Science', 714560394, 'College of Engineering',111111111 );
    INSERT INTO Department VALUES(2, 'Fine Arts', 714560394, 'Humanity Building', 222222222 );
   
    
    CREATE TABLE Student (
        CWID      INT(9) PRIMARY KEY,
        Name      VARCHAR(20),
        Address   VARCHAR(40),
        Phone     INT,
        Major     VARCHAR(20)
    );
    DESCRIBE Student;
    
    
    
    SELECT * FROM Student;
    
     INSERT INTO Student VALUES(123456789, 'James Adam', '4020W Magnolia ave Fullerton Ca 92809', 714295884, 'Computer Science');
     INSERT INTO Student VALUES(234567891, 'Jhon Ross', '1111 W ball rd Anaheim Ca 92805', 949295886 , 'Fine Arts');
     INSERT INTO Student VALUES(345678912, 'Sarah Sean', '2222 beach blvd Brea Ca 92806', 323295887,'Fine Arts');
     INSERT INTO Student VALUES(456789123, 'Sarah Samantha', '3333 W webster Anaheim Ca 92807', 213295883 , 'Computer Science');
     INSERT INTO Student VALUES(567891234, 'Shila Raz', '613 W ball rd Stanton Ca 92804', 415295887 , 'Computer Science');
     INSERT INTO Student VALUES(678912345, 'Diana Nabi', '1322 W ball rd Anaheim Ca 92808', 510295885 ,'Fine Arts');
     INSERT INTO Student VALUES(789123456, 'Robert Ramin', '1322 W ball rd Irvine Ca 92809', 940295888 , 'Computer Science');
     INSERT INTO Student VALUES(891234567, 'Wali Jon', '1322 W ball rd Anaheim Ca 92801', 818295884 , 'Fine Arts');
     
     UPDATE Student
     SET Major = 'Computer Science'
     WHERE Major = 'Biology';
     
     SELECT CWID, Name,Major
     FROM Student;
   
    
    CREATE TABLE Course (
        Cnumber INT PRIMARY KEY,
        Ctitle  VARCHAR(20),
        Book    VARCHAR(30),
        Units   INT(1),
        PreReq  VARCHAR(20)
    );
     DESCRIBE Course;
 
     
    INSERT INTO Course VALUES(11, 'CPSC332', 'Fundamental Of Database', 3 , 'CPSCE121, CPSC131');
    INSERT INTO Course VALUES(12, 'ART220', 'Sketchbook', 3 , 'Art101');
    INSERT INTO Course VALUES(13, 'CPSC121', 'Data Structure', 3 , 'CPSC120');
    INSERT INTO Course VALUES(14, 'CPSC226', 'JAVA Programming', 3 , 'CPSCE121');
  
    
    
    CREATE TABLE Section (
        Number    INT,
        CourseNo  INT,
        CLRoom    VARCHAR(10),
        MeetDays  VARCHAR(10),
        StartTime VARCHAR(16),
        EndTime   VARCHAR(16),
        NumOfSeat INT(3),
        Teacher   INT,
        PRIMARY KEY(Number,CourseNo),
        FOREIGN KEY (CourseNo) REFERENCES Course (Cnumber) ON DELETE CASCADE,
        FOREIGN KEY (Teacher) REFERENCES Professor(SSN) ON DELETE CASCADE
    );
    DESCRIBE Section;
    
    SELECT * FROM Section;
    
    INSERT INTO Section VALUES(01, 11, 'CP-110',  'Mon Wed','10;00AM', '11:00AM', 40, 111111111 );
    INSERT INTO Section VALUES(02, 12, 'AT-220',  'Tu Th','11;00AM', '12:00pM', 40, 222222222 );
    INSERT INTO Section VALUES(03, 13, 'CP-488',  'Fridays','2;00PM', '3:00pM', 40, 333333333 );
    INSERT INTO Section VALUES(04, 14, 'AT-110',  'Tu Th','3;00PM', '4:00AM', 40, 111111111 );
    INSERT INTO Section VALUES(05, 11, 'EN-412',  'Mon Wed','4;15PM', '5:15PM', 40, 222222222 );
    INSERT INTO Section VALUES(06, 12, 'AT-453',  'Saturday','10;00AM', '11:00AM', 40, 333333333 );
   
    
    CREATE TABLE Enrollment (
        SNO      INT(9),
        CourseNo INT,
        Section  INT(2),
        Grade    VARCHAR(1),
        PRIMARY KEY (SNO, Section,CourseNo),
        FOREIGN KEY(SNO) REFERENCES Student(CWID) ON DELETE CASCADE,
        FOREIGN KEY(CourseNo) REFERENCES Course(Cnumber) ON DELETE CASCADE
    );
    DESCRIBE Enrollment;
    
    
    
    INSERT INTO Enrollment VALUES(123456789,11, 01, 'A');
    INSERT INTO Enrollment VALUES(234567891,12, 02, 'A');
    INSERT INTO Enrollment VALUES(345678912,13, 03, 'C');
    INSERT INTO Enrollment VALUES(456789123,14, 04, 'A');
    INSERT INTO Enrollment VALUES(567891234,11, 05, 'B');
    INSERT INTO Enrollment VALUES(678912345,12, 06, 'C');
    INSERT INTO Enrollment VALUES(789123456,13, 01, 'D');
    INSERT INTO Enrollment VALUES(891234567,14, 02, 'A');
    INSERT INTO Enrollment VALUES(123456789,11, 03, 'C');
    INSERT INTO Enrollment VALUES(234567891,12, 04, 'B');
    INSERT INTO Enrollment VALUES(345678912,13, 05, 'A');
    INSERT INTO Enrollment VALUES(456789123,14, 06, 'D');
    INSERT INTO Enrollment VALUES(567891234,11, 01, 'C');
    INSERT INTO Enrollment VALUES(678912345,12, 02, 'F');
    INSERT INTO Enrollment VALUES(789123456,13, 03, 'C');
    INSERT INTO Enrollment VALUES(891234567,14, 04, 'A');
    INSERT INTO Enrollment VALUES(123456789,11, 05, 'B');
    INSERT INTO Enrollment VALUES(234567891,12, 06, 'C');
    INSERT INTO Enrollment VALUES(345678912,13, 01, 'A');
    INSERT INTO Enrollment VALUES(456789123,14, 02, 'B');
    
    SELECT * From Enrollment;
    SELECT SNO, CourseNo
    FROM Enrollment
    WHERE Grade = 'A';

    
    CREATE TABLE Prerequisite (
        CourseNum INT PRIMARY KEY,
        Prereq    VARCHAR(30),
        FOREIGN KEY (CourseNum) REFERENCES Course (Cnumber) ON DELETE CASCADE
    
    );
    #
    
    CREATE TABLE Minor (
        SNO     INT,
        DepNum  INT,
        PRIMARY KEY (SNO, DepNum),
        FOREIGN KEY(SNO) REFERENCES Student (CWID) ON DELETE CASCADE,
        FOREIGN KEY(DepNum) REFERENCES Department (DNumber) ON DELETE CASCADE

    );
 
    
    CREATE TABLE CollegeDegree (
        Professor  INT PRIMARY KEY,
        CollegeDeg VARCHAR(40),
        
        FOREIGN KEY(Professor) REFERENCES Professor (SSN) ON DELETE CASCADE
    );