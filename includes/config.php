<?php
define('SITE_NAME', 'Ronno Titus');
define('SITE_TITLE', 'Ronno Titus — IT Student & Developer');
define('SITE_DESCRIPTION', 'IT Student at Kyambogo University passionate about web development, databases, networking, and building practical software solutions.');
define('CONTACT_EMAIL', 'ronnotitus113ac@gmail.com');

$nav_links = [
    ['href' => '#about',      'label' => 'About'],
    ['href' => '#skills',     'label' => 'Skills'],
    ['href' => '#projects',   'label' => 'Projects'],
    ['href' => '#experience', 'label' => 'Experience'],
    ['href' => '#contact',    'label' => 'Contact'],
];

$skills = [
    'Programming Languages' => [
        ['name' => 'PHP',        'level' => 80],
        ['name' => 'Python',     'level' => 75],
        ['name' => 'Java',       'level' => 72],
        ['name' => 'JavaScript', 'level' => 70],
        ['name' => 'C',          'level' => 68],
        ['name' => 'C++',        'level' => 65],
        ['name' => 'Flutter',    'level' => 60],
    ],
    'Web & Databases' => [
        ['name' => 'HTML & CSS',   'level' => 85],
        ['name' => 'MySQL',        'level' => 80],
        ['name' => 'PHP (Backend)','level' => 78],
        ['name' => 'JavaScript',   'level' => 70],
        ['name' => 'REST APIs',    'level' => 65],
        ['name' => 'XAMPP / Apache','level' => 75],
    ],
    'Networking & Systems' => [
        ['name' => 'Computer Networking', 'level' => 72],
        ['name' => 'Linux / CLI',         'level' => 68],
        ['name' => 'TCP/IP Protocols',    'level' => 65],
        ['name' => 'Network Config',      'level' => 63],
        ['name' => 'Git & GitHub',        'level' => 70],
    ],
];

$projects = [
    [
        'title'       => 'Library Management System',
        'description' => 'A full coursework project built to manage library operations including book records, member registration, borrowing and returning of books, and fine calculation. Designed with a MySQL database backend and a PHP-driven web interface.',
        'tags'        => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
        'github'      => 'https://github.com',
        'demo'        => 'https://dbmgroup8.wasmer.app',
        'featured'    => true,
    ],
    [
        'title'       => 'Student Registration Portal',
        'description' => 'A web-based student registration system allowing students to enroll in courses, view timetables, and track academic progress. Built with PHP and MySQL as part of academic coursework.',
        'tags'        => ['PHP', 'MySQL', 'HTML', 'CSS'],
        'github'      => 'https://github.com',
        'demo'        => '#',
        'featured'    => false,
    ],
    [
        'title'       => 'Personal Portfolio Website',
        'description' => 'This very portfolio — a fully server-side rendered website built in pure PHP with no frameworks. Features include a contact form with server-side validation, dynamic content from a config file, and responsive design.',
        'tags'        => ['PHP', 'CSS', 'JavaScript', 'HTML'],
        'github'      => 'https://github.com',
        'demo'        => '#',
        'featured'    => false,
    ],
];

$experience = [
    [
        'role'     => 'IT Student (3rd Year)',
        'company'  => 'Kyambogo University',
        'period'   => '2022 – Present',
        'location' => 'Kampala, Uganda',
        'bullets'  => [
            'Studying Information Technology with focus areas in software development, databases, and computer networking.',
            'Completed coursework projects including a Library Management System using PHP and MySQL.',
            'Gaining hands-on experience with web technologies, system design, and network configuration.',
            'Actively building skills in mobile development using Flutter and backend development with PHP.',
        ],
    ],
    [
        'role'     => 'Diploma in Computer Science',
        'company'  => 'Makerere University Business School (MUBS)',
        'period'   => 'Graduated 1st October 2021',
        'location' => 'Kampala, Uganda',
        'bullets'  => [
            'Completed a Diploma in Computer Science covering programming fundamentals, databases, and networking.',
            'Gained practical skills in C, Java, and introductory web development.',
            'Worked on group and individual programming assignments applying core CS concepts.',
        ],
    ],
];

$education = [
    [
        'degree'  => 'Bachelor of Science in Information Technology',
        'school'  => 'Kyambogo University',
        'period'  => '2022 – Present',
        'detail'  => 'Currently in 3rd year. Studying software development, databases, networking, and systems analysis.',
    ],
    [
        'degree'  => 'Diploma in Computer Science',
        'school'  => 'Makerere University Business School (MUBS)',
        'period'  => 'Graduated Oct 2021',
        'detail'  => 'Covered programming fundamentals, database management, computer networking, and IT systems.',
    ],
];
