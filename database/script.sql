CREATE database aws_quizz;

USE database aws_quizz;

CREATE table theme(
id  int PRIMARY KEY AUTO_INCREMENT,
name  varchar(50)
);

CREATE TABLE question (
    id int PRIMARY KEY AUTO_INCREMENT,
    t_id int,
    question varchar(250),
    explanation text,
    FOREIGN KEY (t_id) REFERENCES theme(id)
);

CREATE TABLE answer (
    id int PRIMARY KEY AUTO_INCREMENT,
    q_id int,
    answer varchar(250),
    points double,
    FOREIGN KEY (q_id) REFERENCES question(id)
);

ALTER TABLE `answer` CHANGE `points` `istrue` BOOLEAN NULL DEFAULT NULL;


INSERT INTO theme (name)
VALUES
    ('Cloud Concepts'),
    ('Security and Compliance'),
    ('Cloud Technology and Services'),
    ('Billing Pricing and Support');



INSERT INTO question (t_id, question, explanation)
VALUES 
    ('1', 'Why is AWS more economical than traditional data centers for applications with varying compute workloads?', 'The ability to launch instances on demand when needed allows users to launch and terminate instances in response to a varying workload. This is a more economical practice than purchasing enough on-premises servers to handle the peak load'),
    ('1', 'Which AWS offering enables users to find, buy, and immediately start using software solutions in their AWS environment?', 'AWS Marketplace is a digital catalog with thousands of software listings from independent software vendors that makes it easy to find, test, buy, and deploy software that runs on AWS.'),
    ('1', 'Which component of the AWS global infrastructure does Amazon CloudFront use to ensure low-latency delivery?', 'To deliver content to users with lower latency, Amazon CloudFront uses a global network of points of presence (edge locations and regional edge caches) worldwide.'),
    ('1', 'How would a system administrator add an additional layer of login security to a user\'s AWS Management Console?', 'Multi-factor authentication (MFA) is a simple best practice that adds an extra layer of protection on top of a username and password. With MFA enabled, when a user signs in to an AWS Management Console, they will be prompted for their username and password (the first factor—what they know), as well as for an authentication code from their MFA device (the second factor—what they have). Taken together, these multiple factors provide increased security for AWS account settings and resources.'),
    ('1', 'Which service can identify the user that made the API call when an Amazon EC2 instance is terminated?', 'AWS CloudTrail helps users enable governance, compliance, and operational and risk auditing of their AWS accounts. Actions taken by a user, role, or an AWS service are recorded as events in CloudTrail. Events include actions taken in the AWS Management Console, AWS Command Line Interface (CLI), and AWS SDKs and APIs.'),
    ('2', 'Which of the following is an AWS responsibility under the AWS shared responsibility model?', 'Maintaining physical hardware is an AWS responsibility under the AWS shared responsibility model'),
    ('3', 'Which AWS service would simplify the migration of a database to AWS?', 'AWS DMS helps users migrate databases to AWS quickly and securely. The source database remains fully operational during the migration, minimizing downtime to applications that rely on the database. AWS DMS can migrate data to and from most widely used commercial and open-source databases.'),
    ('3', 'Which AWS networking service enables a company to create a virtual network within AWS?', 'Amazon VPC lets users provision a logically isolated section of the AWS Cloud where users can launch AWS resources in a virtual network that they define.'),
    ('3', 'Which service would be used to send alerts based on Amazon CloudWatch alarms?', 'Amazon SNS and Amazon CloudWatch are integrated so users can collect, view, and analyze metrics for every active SNS. Once users have configured CloudWatch for Amazon SNS, they.'),
    ('4', 'Where can a user find information about prohibited actions on the AWS infrastructure?', 'The AWS Acceptable Use Policy provides information regarding prohibited actions on the AWS infrastructure.');



INSERT INTO answer (q_id, answer)
VALUES 
    ('1', 'Amazon EC2 costs are billed on a monthly basis.'),
    ('1', 'Users retain full administrative access to their Amazon EC2 instances.'),
    ('1', 'Amazon EC2 instances can be launched on demand when needed.'),
    ('1', 'Users can permanently run enough instances to handle peak workloads.'),
    ('2', 'AWS Config'),
    ('2', 'AWS OpsWorks'),
    ('2', 'AWS SDK'),
    ('2', 'AWS Marketplace'),
    ('3', 'AWS Regions'),
    ('3', 'Edge locations'),
    ('3', 'Availability Zones'),
    ('3', 'Virtual Private Cloud (VPC)'),
    ('4', 'Use Amazon Cloud Directory'),
    ('4', 'Audit AWS Identity and Access Management (IAM) roles'),
    ('4', 'Enable multi-factor authentication'),
    ('4', 'Enable AWS CloudTrail'),
    ('5', 'AWS Trusted Advisor'),
    ('5', 'AWS CloudTrail'),
    ('5', 'AWS X-Ray'),
    ('5', 'AWS Identity and Access Management (AWS IAM)'),
    ('6', 'Configuring third-party applications'),
    ('6', 'Maintaining physical hardware'),
    ('6', 'Securing application access and data'),
    ('6', 'Managing guest operating systems'),
    ('7', 'AWS Storage Gateway'),
    ('7', 'AWS Database Migration Service (AWS DMS)'),
    ('7', 'Amazon EC2'),
    ('7', 'Amazon AppStream 2.0'),
    ('8', 'AWS Config'),
    ('8', 'Amazon Route 53'),
    ('8', 'AWS Direct Connect'),
    ('8', 'Amazon Virtual Private Cloud (Amazon VPC)'),
    ('9', 'Amazon Simple Notification Service (Amazon SNS)'),
    ('9', 'AWS CloudTrail'),
    ('9', 'AWS Trusted Advisor'),
    ('9', 'Amazon Route 53'),
    ('10', 'AWS Trusted Advisor'),
    ('10', 'AWS Identity and Access Management (IAM)'),
    ('10', 'AWS Billing Console'),
    ('10', 'AWS Acceptable Use Policy');

