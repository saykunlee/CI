
/*강의 테이블 생성*/
CREATE TABLE `course` (
	`course_no` INT(11) NOT NULL AUTO_INCREMENT COMMENT '강의번호',
	`course_name` VARCHAR(100) NOT NULL COMMENT '강의명' COLLATE 'utf8mb4_general_ci',
	`course_time` TIME NOT NULL DEFAULT '00:00:00' COMMENT '강의시간',
	`course_point` INT(2) NULL DEFAULT NULL COMMENT '이수학점',
	`course_classno` VARCHAR(10) NULL DEFAULT NULL COMMENT '강의실' COLLATE 'utf8mb4_general_ci',
	`instructor_no` INT(11) NOT NULL COMMENT '교수번호',
	PRIMARY KEY (`course_no`) USING BTREE
)
COMMENT='강의';


CREATE TABLE `enrollment` (
	`enrollment_no` INT(11) NOT NULL AUTO_INCREMENT COMMENT '수강번호',
	`course_no` INT(11) NOT NULL COMMENT '강의번호',
	`student_no` INT(11) NOT NULL COMMENT '학번',
	`enrollment_date` DATETIME NOT NULL COMMENT '신청일시',
	PRIMARY KEY (`enrollment_no`) USING BTREE
)
COMMENT='수강신청'
;

/*교수 테이블 생성*/
CREATE TABLE `instructor` (
	`instructor_no` INT(11) NOT NULL AUTO_INCREMENT COMMENT '교수번호',
	`instructor_name` VARCHAR(100) NOT NULL COMMENT '교수명' COLLATE 'utf8mb4_general_ci',
	`instructor_email` VARCHAR(100) NOT NULL DEFAULT '0' COMMENT '이메일' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`instructor_no`) USING BTREE
)
COMMENT='교수';

/*학생  테이블 생성*/
CREATE TABLE `student`
(
    `student_name`    VARCHAR(100) NOT NULL COMMENT '학생명',
    `student_email`    VARCHAR(10) DEFAULT '0' COMMENT '이메일',
    `student_no`    INT(11) NOT NULL COMMENT '학번',
    `student_major`    VARCHAR(10) COMMENT '전공',
 PRIMARY KEY ( `student_no` )
)
 COMMENT = '학생';


/*교수 등록*/
INSERT INTO instructor(instructor_name,instructor_email)    VALUES('김교수','kim.prof@unyict.ac.kr');
INSERT INTO instructor(instructor_name,instructor_email)    VALUES('이교수','lee.prof@unyict.ac.kr');
INSERT INTO instructor(instructor_name,instructor_email)    VALUES('박교수','park.prof@unyict.ac.kr');
INSERT INTO instructor(instructor_name,instructor_email)    VALUES('최교수','choi.prof@unyict.ac.kr');

/*학생 등록*/ 
INSERT INTO student(student_name,student_major,student_email)  VALUES('김학생','컴퓨터공학','kim.stud@unyict.ac.kr');
INSERT INTO student(student_name,student_major,student_email)  VALUES('이학생','건축공학','lee.stud@unyict.ac.kr');
INSERT INTO student(student_name,student_major,student_email)  VALUES('바학생','경영학','park.stud@unyict.ac.kr');
INSERT INTO student(student_name,student_major,student_email)  VALUES('최학생','역사학','choi.stud@unyict.ac.kr');
	
/*강의 등록*/
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('인공지능 입문','09:00',3,'공학관102',1);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('컴퓨터의 개념 및 실습','10:00',3,'공학관202',3);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('컴퓨터과학이 여는 세계','11:00',3,'공학관322',2);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('컴퓨터과학적 사고와 실습','12:00',3,'공학관120',2);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('인터넷 보안과 프라이버시','13:00',3,'공학관202',3);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('이산수학','14:00',3,'공학관202',4);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('프로그래밍연습','15:00',3,'공학관102',1);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('공학수학1','16:00',3,'공학관602',2);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('공학수학2','17:00',3,'공학관302',4);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('전기전자회로','18:00',3,'공학관702',3);
INSERT INTO course(course_name,course_time,course_point,course_classno,instructor_no) VALUES('컴퓨터구조','19:00',3,'공학관202',1);




