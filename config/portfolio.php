<?php

/*
 * All portfolio content lives here.
 * Files are looked up inside /public. A missing file is simply hidden on the site.
 *
 * Every project can use these keys (all optional except title and slug):
 * title, slug, description, full_description, category, date, role, image, gallery[],
 * features[], technologies[], goal, challenges, solution, results, url, github, pdf
 */

return [
    'name'       => 'Raygienald Curameng',
    'first_name' => 'Raygienald',
    'last_name'  => 'Curameng',
    'role'       => 'Web Developer',
    'intro'      => 'I build web apps with PHP, Laravel and MySQL, and I can also fix hardware, troubleshoot networks and edit photos and videos. I hold a BS in Information Technology from Northern Luzon Adventist College.',
    'photo'      => 'images/me.jpg',
    'email'      => 'curamengray3@gmail.com',
    'number'     => '09617758745',
    'links'      => [
        'github'   => 'https://github.com/raygie44',
        'linkedin' => null, // e.g. 'https://linkedin.com/in/your-username'
        'resume'   => 'resume/resume.pdf', // put the file at public/resume/resume.pdf
    ],

    'experience' => [
        [
            'role'        => 'Freelance Editor',
            'org'         => 'Self-employed',
            'location'    => null,
            'dates'       => 'March 2026 – Present',
            'description' => null,
            'points'      => [
                'Edit and enhance photos and videos to client requirements.',
                'Create and modify digital content for personal and business use.',
                'Edit documents and visual materials while keeping quality and accuracy.',
                'Communicate with clients to understand their needs and deliver on time.',
            ],
        ],
        [
            'role'        => 'IT Intern',
            'org'         => 'Northern Luzon Adventist Hospital',
            'location'    => null,
            'dates'       => 'Jan 2025 – Apr 2025',
            'description' => null,
            'points'      => [
                'Supported the IT team in diagnosing and resolving network connectivity issues.',
                'Troubleshot, maintained and repaired printers and computer hardware.',
                'Helped maintain and optimize hospital databases and internal information systems.',
            ],
        ],
        [
            'role'        => 'Media Videographer and Editor',
            'org'         => 'Northeast Luzon Adventist College',
            'location'    => null,
            'dates'       => 'April 2020 – July 2020',
            'description' => null,
            'points'      => [
                'Filmed and edited videos for school programs.',
            ],
        ],
    ],

    'projects' => [
        [
            'title'            => 'Learning Management System for ALS Sison',
            'slug'             => 'learning-management-system-als-sison',
            'description'      => 'A learning management system for the Alternative Learning System in Sison, Pangasinan.',
            'full_description' => 'A learning management system for the Alternative Learning System (ALS) of Sison District in Pangasinan II District IV. It provides accessible learning methods for students who lack financial resources, so they can study anytime and anywhere in Sison, Pangasinan.',
            'category'         => 'Capstone Project',
            'date'             => null,       // e.g. '2025'
            'role'             => 'Admin developer',       // e.g. 'Full-stack developer'
            'image'            => 'images/projects/learning-management-system-als-sison/main.png',
            'gallery'          => [
             'images/projects/learning-management-system-als-sison/1.png',
             'images/projects/learning-management-system-als-sison/2.png',
             'images/projects/learning-management-system-als-sison/3.png',
             'images/projects/learning-management-system-als-sison/4.png',
             'images/projects/learning-management-system-als-sison/6.png',
             'images/projects/learning-management-system-als-sison/5.png',
            ],
            'features'         => ['User login', 'Lessons', 'Quizzes', 'Enrollment','Online Module','ladderized Program'],         // e.g. ['User login', 'Lessons', 'Quizzes']
            'technologies'     => ['Laravel', 'PHP', 'MySQL','HTML','Angular','Angular Material'],         // e.g. ['Laravel', 'PHP', 'MySQL']
            'goal'             => 'Give students who lack financial resources an accessible way to keep learning anytime and anywhere.',
            'challenges'       => null,
            'solution'         => null,
            'results'          => null,
            'url'              => null,
            'github'           => null,
            'pdf'              => 'documents/projects/learning-management-system-als-sison/documentation.pdf',
        ],
        [
            'title'            => 'Item Monitoring System for NLAC Security',
            'slug'             => 'item-monitoring-system-nlac',
            'description'      => 'A system for managing items left at the Northern Luzon Adventist College guardhouse.',
            'full_description' => 'The Item Monitoring System at Northern Luzon Adventist College is designed to securely and efficiently manage items left in the guardhouse. Its main goal is to keep belongings safe and properly handled, preventing loss or unauthorized access.',
            'category'         => 'Systems Analysis and Design Project',
            'date'             => null,
            'role'             => null,
            'image'            => 'images/projects/item-monitoring-system-nlac/main.jpg',
            'gallery'          => [
                'images/projects/item-monitoring-system-nlac/1.png',
                'images/projects/item-monitoring-system-nlac/2.png',
                'images/projects/item-monitoring-system-nlac/3.png',
                'images/projects/item-monitoring-system-nlac/4.png',
                'images/projects/item-monitoring-system-nlac/5.png',
            ],
            'features'         => ['Item Management','Inventory Monitoring','Item Location Tracking','Item Statuss'],
            'technologies'     => ['PHP', 'MySQL','HTML','Angular','CSS'],
            'goal'             => 'Ensure the safety and proper handling of belongings, preventing loss or unauthorized access.',
            'challenges'       => null,
            'solution'         => null,
            'results'          => null,
            'url'              => null,
            'github'           => null,
            'pdf'              => 'documents/projects/item-monitoring-system-nlac/documentation.pdf',
        ],
        [
            'title'            => 'Registration System for Primary Education',
            'slug'             => 'primary-education-registration-system',
            'description'      => 'A registration system that helps parents enter their child\'s basic information.',
            'full_description' => 'A registration system for primary education that helps parents register their child\'s basic information, making the enrollment process easier and more efficient.',
            'category'         => 'Personal Project',
            'date'             => null,
            'role'             => null,
            'image'            => 'images/projects/primary-education-registration-system/main.jpg',
            'gallery'          => [
                'images/projects/primary-education-registration-system/1.png',
                'images/projects/primary-education-registration-system/2.png',
                'images/projects/primary-education-registration-system/3.png',
                'images/projects/primary-education-registration-system/4.png'
                
            ],
            'features'         => ['Online Registration'],
            'technologies'     => ['PHP', 'MySQL','HTML','Angular','CSS'],
            'goal'             => 'Make school enrollment easier and more efficient for parents.',
            'challenges'       => null,
            'solution'         => null,
            'results'          => null,
            'url'              => null,
            'github'           => null,
            'pdf'              => null,
        ],
    ],

    'skills' => [
        'Programming'          => ['JavaScript', 'PHP', 'HTML', 'CSS'],
        'Frameworks'           => ['Laravel', 'Angular', 'Tailwind CSS','React'],
        'Database'             => ['MySQL / MariaDB','MongDB','SQlite','PostgreSQL','Supabase'],
        'Hardware and support' => ['Desktop and laptop repair', 'Hardware installation and configuration', 'Basic networking', 'Troubleshooting'],
        'Creative and office'  => ['Adobe Creative apps', 'Photo and video editing', 'Microsoft Office (Excel, Word, PowerPoint)'],
    ],
];
