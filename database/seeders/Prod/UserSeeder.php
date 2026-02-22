<?php

namespace Database\Seeders\Prod;

use App\Models\Post;
use App\Models\PostFile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = '12345678';
        $data = [
            [
                'name' => 'User Testing 1',
                'email' => 'user.testing1@example.com',
                'posts' => [
                    [
                        'caption' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file1.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file2.jpeg',
                            ],
                        ],
                    ],
                ],
            ],

            [
                'name' => 'Reza Zakiah',
                'email' => 'reza.zakiah@example.com',
                'posts' => [
                    [
                        'caption' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file3.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file4.jpeg',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Arif Fida',
                'email' => 'arif.fida@example.com',
                'posts' => [
                    [
                        'caption' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file5.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file6.jpeg',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Jamil Putri',
                'email' => 'jamil.putri@example.com',
                'posts' => [
                    [
                        'caption' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file7.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file8.jpeg',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Amin Akbar',
                'email' => 'amin.akbar@example.com',
                'posts' => [
                    [
                        'caption' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file9.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file10.jpeg',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Sumiati Nissa',
                'email' => 'sumiati.nissa@example.com',
                'posts' => [
                    [
                        'caption' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'post_files' => [
                            [
                                'file_path' => 'post_files/file11.jpeg',
                            ],
                            [
                                'file_path' => 'post_files/file12.jpeg',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($data as $item) {
            $model_user = User::updateOrCreate(
                [
                    'email' => $item['email'],
                ],
                [
                    'name' => $item['name'],
                    'email' => $item['email'],
                    'password' => Hash::make($password),
                ]
            );
            foreach ($item['posts'] as $post) {
                $model_post = Post::updateOrCreate(
                    [
                        'user_id' => $model_user->id,
                        'caption' => $post['caption'],
                    ],
                    [
                        'user_id' => $model_user->id,
                        'caption' => $post['caption'],
                    ]
                );
                foreach ($post['post_files'] as $post_file) {
                    $model_post_file = PostFile::updateOrCreate(
                        [
                            'post_id' => $model_post->id,
                            'file_path' => $post_file['file_path'],
                        ],
                        [
                            'post_id' => $model_post->id,
                            'file_path' => $post_file['file_path'],
                        ]
                    );
                }
            }
        }
    }
}
