<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '1',
            'title'   => 'Lorem ipsum dolor sit amet consectetur',
            'content' => 'Morbi massa massa, ultricies sit amet porttitor sit amet, tempus sit amet lacus. Vivamus porta velit ut libero aliquet porttitor eget at justo. Sed dapibus faucibus aliquam. Nullam lobortis diam nulla, non egestas nisi pulvinar a. Aenean efficitur eu felis sed luctus.'
        ]);

        Post::create([
            'user_id' => '1',
            'title'   => 'Phasellus laoreet diam sed nibh maximus',
            'content' => 'Nulla pretium, orci eu placerat consequat, sem sapien scelerisque augue, vitae vulputate est dui id est. Donec facilisis fringilla venenatis. Phasellus arcu velit, ultrices eget sapien eu, lacinia lacinia quam. Pellentesque porta odio non neque efficitur, vitae malesuada.'
        ]);

        Post::create([
            'user_id' => '1',
            'title'   => 'Fusce vitae orci quis massa ultricies ultricies',
            'content' => 'Maecenas posuere magna in viverra tempor. Cras sed malesuada nisi. Nunc sed commodo tellus. Mauris at nulla quis lectus luctus gravida. Morbi sollicitudin maximus felis, ac vulputate ex semper ut.'
        ]);

        Post::create([
            'user_id' => '2',
            'title'   => 'Maecenas eget sapien auctor, iaculis eros',
            'content' => 'Pharetra eleifend orci, eget ornare dui condimentum ut. Maecenas auctor, arcu sed tincidunt rhoncus, nulla felis pretium ligula, et placerat dui tortor vel lacus. Vestibulum congue, quam a lacinia lacinia, neque ex finibus erat, at aliquet mi felis in risus.'
        ]);

        Post::create([
            'user_id' => '2',
            'title'   => 'Vestibulum congue, quam a lacinia lacinia',
            'content' => 'Nulla pellentesque consequat arcu, eget fermentum urna ornare sit amet. Cras porta fermentum consectetur. Nam nec malesuada lorem, eget sodales augue.'
        ]);

        Post::create([
            'user_id' => '3',
            'title'   => 'Nunc vitae convallis felis, vulputate lobortis erat',
            'content' => 'Phasellus in lorem leo. Vestibulum quis justo nec sapien placerat vulputate. Integer porttitor mauris rhoncus metus tristique, eget vestibulum leo aliquam.'
        ]);

        Post::create([
            'user_id' => '3',
            'title'   => 'Praesent condimentum ex ac nisl consectetur',
            'content' => 'Phasellus tincidunt diam quis ultrices pellentesque. Sed elit nibh, faucibus in lectus at, imperdiet dignissim felis. Cras vel nibh nibh. Integer.'
        ]);

        Post::create([
            'user_id' => '3',
            'title'   => 'Morbi pretium, erat at laoreet tristique',
            'content' => 'Nulla sem arcu, lobortis eu augue sit amet, elementum posuere ligula. Ut efficitur interdum magna sed hendrerit. Quisque a fringilla tellus.'
        ]);

        Post::create([
            'user_id' => '3',
            'title'   => 'Pellentesque interdum risus id egestas laoreet',
            'content' => 'Sed dolor justo, sodales eu justo ac, dictum aliquet nunc. Mauris vitae urna tincidunt enim blandit congue commodo auctor sapien. Sed varius sapien et tempor placerat. Mauris ipsum diam, maximus vitae luctus sit amet, gravida non dolor.'
        ]);

    }
}
