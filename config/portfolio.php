<?php

return [
    'name'       => 'Raygienald B.Curameng',
    'first_name' => 'Raygienald B.',
    'last_name'  => 'Curameng',
    'role'       => 'Web Developer',
    'intro'      => 'I build web apps with PHP, Laravel and MySQL, and I can also fix hardware, troubleshoot networks and edit photos and videos. I hold a BS in Information Technology from Northern Luzon Adventist College.',
    'photo'      => 'images/me.jpg', // put your picture at public/images/me.jpg; set to null to hide
    'email'      => 'curamengray3@gmail.com',
    'number'     => '09617758745',

'links' => [
    'github'   => 'https://github.com/raygie44',
    'linkedin' => 'https://www.linkedin.com/in/raygienald-curameng-3275a3368/',
    'resume'   => '/resume.pdf',
],
    'experience' => [
        [
            'role'   => 'Freelance Editor',
            'org'    => 'Self-employed',
            'dates'  => 'March 2026 – Present',
            'points' => [
                'Edit and enhance photos and videos to client requirements.',
                'Create and modify digital content for personal and business use.',
                'Talk with clients to understand what they need and deliver on time.',
            ],
        ],
        [
            'role'   => 'IT Intern',
            'org'    => 'Northern Luzon Adventist Hospital',
            'dates'  => 'Jan 2025 – Apr 2025',
            'points' => [
                'Supported the IT team in diagnosing and fixing network connectivity issues.',
                'Troubleshot, maintained and repaired printers and computer hardware.',
                'Helped maintain and optimize hospital databases and internal information systems.',
            ],
        ],
        [
            'role'   => 'Media Videographer and Editor',
            'org'    => 'Northeast Luzon Adventist College',
            'dates'  => 'April 2020 – July 2020',
            'points' => [
                'Filmed and edited videos for school programs.',
            ],
        ],
    ],
    'projects' => [
        [
            'title'       => 'Learning Management System for ALS Sison',
            'description' => 'A learning management system for the Alternative Learning System in Sison, Pangasinan. It gives students who lack financial resources a way to study anytime and anywhere.',
            'stack'       => ['Capstone project'],
            'url'         => '#',
        ],
        [
            'title'       => 'Item Monitoring System for NLAC Security',
            'description' => 'A system for the Northern Luzon Adventist College security department to manage items left at the guardhouse, so belongings are handled properly and not lost.',
            'stack'       => ['Systems Analysis and Design project'],
            'url'         => '#',
        ],
        [
            'title'       => 'Registration System for Primary Education',
            'description' => 'A registration system that helps parents enter their child\'s basic information, making school enrollment easier and faster.',
            'stack'       => ['Personal project'],
            'url'         => '#',
        ],
    ],
    'skills' => [
        'Development'          => ['JavaScript', 'PHP', 'MySQL', 'Laravel', 'Angular', 'Tailwind CSS', 'HTML', 'CSS'],
        'Hardware and support' => ['Desktop and laptop repair', 'Hardware installation and configuration', 'Basic networking', 'Troubleshooting'],
        'Creative and office'  => ['Adobe Creative apps', 'Photo and video editing', 'Microsoft Office (Excel, Word, PowerPoint)'],
    ],
];