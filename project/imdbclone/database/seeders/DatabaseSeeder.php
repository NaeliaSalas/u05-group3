<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    // \App\Models\User::factory(10)->create();

    {
        User::create([

            'name' => 'Nova',
            'username' => 'Nova',
            'email' => 'nova@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'Jonny',
            'username' => 'Jonny',
            'email' => 'jonny@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'Paulina',
            'username' => 'Paulina',
            'email' => 'Paulina@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'David',
            'username' => 'David',
            'email' => 'david@gmail.com',
            'password' => ('password'),
        ]);



        User::create([

            'name' => 'Naelia',
            'username' => 'Naelia',
            'email' => 'naelia@gmail.com',
            'password' => ('password'),
        ]);

        Genre::create([

            'genre' => 'Adventure',

        ]);
        Genre::create([

            'genre' => 'Action',

        ]);
        Genre::create([

            'genre' => 'Comedy',

        ]);
        Genre::create([

            'genre' => 'Horror',

        ]);

        Genre::create([

            'genre' => 'Thriller',

        ]);

        Genre::create([

            'genre' => 'Drama',

        ]);

        Genre::create([

            'genre' => 'Romance',

        ]);

        Genre::create([

            'genre' => 'Sci-Fi',

        ]);


        Movie::create([

            'title' => 'Inception',
            'body' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea
             into the mind of a C.E.O,
             but his tragic past may doom the project and his team to disaster.',
            'cover' => 'https://www.imdb.com/title/tt1375666/mediaviewer/rm3426651392/',
            'hero' => 'https://www.themoviedb.org/t/p/original/ii8QGacT3MXESqBckQlyrATY0lT.jpg',
            'rating' => 5,
            'trailer' => 'https://www.imdb.com/video/vi2959588889?playlistId=tt1375666&ref_=tt_ov_vi',
            'yearproduced' => 2010,
            'director' => 'Christopher Nolan'
        ]);




        Movie::create([
            'title' => 'Watchmen',
            'body' => 'In 1985 where former superheroes exist the murder of a colleague sends active vigilante Rorschach into his own sprawling investigation, uncovering something that could completely change the course of history as we know it.',
            'cover' => 'https://www.imdb.com/title/tt0409459/mediaviewer/rm2931438848/',
            'hero' => 'https://www.themoviedb.org/t/p/original/gFeaXBnOO14aOQhMQrr5tbyhMTw.jpg',
            'rating' => 4,
            'trailer' => 'https://www.imdb.com/video/vi240565017?playlistId=tt0409459&ref_=tt_ov_vi',
            'yearproduced' => 2010,
            'director' => 'Zack Snyder',
        ]);


        Movie::create([
            'title' => 'Pirates of the Caribbean',
            'body' => 'Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governors daughter,
             from Jacks former pirate allies, who are now undead.',
            'cover' => 'https://www.imdb.com/title/tt0325980/mediaviewer/rm2487103488/?ref_=tt_ov_i',
            'hero' => 'https://www.themoviedb.org/t/p/original/8zfRLCgKrLAc5SSnACz8ZqmeKAP.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/naQr0uTrH_s',
            'yearproduced' => 2003,
            'director' => 'Gore Verbinski',
        ]);

        Movie::create([

            'title' => 'Spectre',
            'body' => 'A cryptic message from James Bonds past sends him on a trail to uncover the existence of a sinister organisation named SPECTRE With a new threat dawning Bond learns the terrible truth
             about the author of all his pain in his most recent missions.',
            'cover' => 'https://www.imdb.com/title/tt2379713/mediaviewer/rm3887487232/',
            'hero' => 'https://www.themoviedb.org/t/p/original/8lBViysvNJBPkl6zG1LVAaW3qhj.jpg',
            'rating' => 3,
            'trailer' => 'https://www.imdb.com/video/vi3362042649?playlistId=tt2379713&ref_=tt_pr_ov_vi',
            'yearproduced' => 2015,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'The Matrix Revolutions',
            'body' => 'The human city of Zion defends itself against the massive invasion of the machines as Neo fights to end the war at another front while also opposing the rogue Agent Smith.',
            'cover' => 'https://www.imdb.com/title/tt0242653/mediaviewer/rm70327040/',
            'hero' => 'https://www.themoviedb.org/t/p/original/kJYPag1YrA4PsXIftFdq3QEaanV.jpg',
            'rating' => 2,
            'trailer' => 'https://www.imdb.com/video/vi2885026073?playlistId=tt0242653&ref_=tt_ov_vi',
            'yearproduced' => 2003,
            'director' => 'Lana Wachowsk'
        ]);

        Movie::create([

            'title' => 'Looper',
            'body' => 'In 2074 when the mob wants to get rid of someone, the target is sent into the past, where a hired gun awaits - someone like Joe - who one day learns
            the mob wants to close the loop by sending back Joes future self for assassination.',
            'cover' => 'https://www.imdb.com/title/tt1276104/mediaviewer/rm2984487168/',
            'hero' => 'https://www.themoviedb.org/t/p/original/lVTYM5m7ZDnEyhxcYrkxJaYqExh.jpg',
            'rating' => 5,
            'trailer' => 'https://www.imdb.com/video/vi3368395801?playlistId=tt1276104&ref_=tt_ov_vi',
            'yearproduced' => 2012,
            'director' => 'Rian Johnson',
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Return of the King',
            'body' => 'Gandalf and Aragorn lead the World of Men against Saurons army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
            'cover' => 'https://www.imdb.com/title/tt0167260/mediaviewer/rm584928512/',
            'hero' =>  'https://www.themoviedb.org/t/p/original/lXhgCODAbBXL5buk9yEmTpOoOgR.jpg',
            'rating' => 2,
            'trailer' => 'https://www.imdb.com/video/vi718127897?playlistId=tt0167260&ref_=tt_ov_vi',
            'yearproduced' => 2003,
            'director' => 'Peter Jackson'
        ]);

        Movie::create([

            'title' => 'DEADPOOL',
            'body' => 'A wisecracking mercenary gets experimented on and becomes immortal but ugly
                and sets out to track down the man who ruined his looks.',
            'cover' => 'https://www.imdb.com/title/tt1431045/mediaviewer/rm351021568/',
            'hero' => 'https://www.themoviedb.org/t/p/original/wsPO5Jny82b0pksjSvjUHEYHDkz.jpg',
            'rating' => 1,
            'trailer' => 'https://www.imdb.com/video/vi567457049?ref_=nv_sr_srsg_1',
            'yearproduced' => 2016,
            'director' => 'Tom Miller',
        ]);

        Movie::create([

            'title' => 'Dracula Untold',
            'body' => 'As his kingdom is being threatened by the Turks, young prince Vlad Tepes must become a monster feared by his own people in order to obtain the power needed to protect his own family,
            and the families of his kingdom.',
            'cover' => 'https://www.imdb.com/title/tt0829150/mediaviewer/rm827509760/',
            'hero' => 'https://www.themoviedb.org/t/p/original/Ap0jDQIn8Jovz3MyejAepCcZrTU.jpg',
            'rating' => 3,
            'trailer' => 'https://www.imdb.com/video/vi1558818585?playlistId=tt0829150&ref_=tt_ov_vi',
            'yearproduced' => 2014,
            'director' => 'Gary Shore',
        ]);

        Movie::create([

            'title' => '1917',
            'body' => 'April 6th, 1917. As an infantry battalion assembles to wage war deep in enemy territory, two soldiers are assigned to race against
                time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.',
            'cover' => 'https://www.imdb.com/title/tt8579674/mediaviewer/rm144738817/',
            'hero' => 'https://www.themoviedb.org/t/p/original/2lBOQK06tltt8SQaswgb8d657Mv.jpg',
            'rating' => 1,
            'trailer' => 'https://www.imdb.com/video/vi4095655705?playlistId=tt8579674&ref_=tt_ov_vi',
            'yearproduced' => 2019,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'Venom: Let There Be Carnage',
            'body' => 'Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.',
            'cover' => 'https://www.imdb.com/title/tt7097896/mediaviewer/rm980350465/',
            'hero' => 'https://www.themoviedb.org/t/p/original/vIgyYkXkg6NC2whRbYjBD7eb3Er.jpg',
            'rating' => 5,
            'trailer' => 'https://www.imdb.com/video/vi1533394969?playlistId=tt7097896&ref_=tt_pr_ov_vi',
            'yearproduced' => 2021,
            'director' => 'Andy Serkis',
        ]);

        Movie::create([

            'title' => 'The Father',
            'body' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances,
                he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'cover' => 'https://www.imdb.com/title/tt10272386/mediaviewer/rm2362964993/',
            'hero' => 'https://www.themoviedb.org/t/p/original/6SP1bFfoXhW7Ni7fPw5GjY7ACBS.jpg',
            'rating' => 4,
            'trailer' => 'https://www.imdb.com/video/vi279101721?playlistId=tt10272386&ref_=tt_ov_vi',
            'yearproduced' => 2020,
            'director' => 'Florian Zeller',
        ]);

        Movie::create([

            'title' => 'Step Brothers',
            'body' => 'Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.',
            'cover' => 'https://www.imdb.com/title/tt0838283/mediaviewer/rm3433645824/',
            'hero' => 'https://www.themoviedb.org/t/p/original/n53EPBWZiz69sYzNDZmamYHdo6Q.jpg',
            'rating' => 4,
            'trailer' => 'https://www.imdb.com/video/vi2847015193?playlistId=tt0838283&ref_=tt_ov_vi',
            'yearproduced' => 2008,
            'director' => 'Adam McKay',
        ]);

        Movie::create([

            'title' => 'The Shining',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'cover' => 'https://www.imdb.com/title/tt0081505/mediaviewer/rm3131156225/',
            'hero' => 'https://www.themoviedb.org/t/p/original/mmd1HnuvAzFc4iuVJcnBrhDNEKr.jpg',
            'rating' => 1,
            'trailer' => 'https://www.imdb.com/video/vi2689121305?playlistId=tt0081505&ref_=tt_ov_vi',
            'yearproduced' => 2008,
            'director' => 'Stanley Kubrick',
        ]);

        Movie::create([

            'title' => 'Parasite',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'cover' => 'https://www.imdb.com/title/tt6751668/mediaviewer/rm4181363713/',
            'hero' => 'https://www.themoviedb.org/t/p/original/TU9NIjwzjoKPwQHoHshkFcQUCG.jpg',
            'rating' => 2,
            'trailer' => 'https://www.imdb.com/video/vi1015463705?playlistId=tt6751668&ref_=tt_pr_ov_vi',
            'yearproduced' => 2019,
            'director' => 'Bong Joon Ho',

        ]);

        Movie::create([

            'title' => 'BOBA FETT',
            'body' => 'Bounty hunter Boba Fett & mercenary Fennec Shand navigate the underworld when they return to Tatooine to claim Jabba the Hutts old turf.',
            'cover' => 'https://www.imdb.com/title/tt13668894/mediaviewer/rm1505552897/',
            'hero' => 'https://www.themoviedb.org/t/p/original/rCwExhj5p9EJhCcHZQCpd06j0VJ.jpg',
            'rating' => 3,
            'trailer' => 'https://www.imdb.com/video/vi3711222553?playlistId=tt13668894&ref_=tt_pr_ov_vi',
            'yearproduced' => 2021,
            'director' => 'Jon Favreau',

        ]);


        Movie::create([

            'title' => 'Mothering Sunday',
            'body' => 'Set over a day in 1924, the story follows Jane Fairchild, a maid in the Niven household, who has the day off to celebrate Mothering Sunday while Mr. and Mrs. Niven attend a lunch to celebrate the engagement of their neighbour’s only remaining son, Paul, to Emma Hobday. Jane rejoices at her freedom on an unseasonably hot, beautiful spring day. But, she has no mother to go to. For almost seven years she has – joyfully and without shame – been Paul’s lover. Like the Nivens, Paul belongs to England’s old money aristocracy, whereas Jane was orphaned at birth. With the house conveniently empty, they can finally meet in Paul’s bedroom for the first time. Today will be their last as lovers. It is also the day that will mark the beginning of Jane’s transformation as the story unfolds through the hours of clandestine passion.',
            'cover' => 'https://www.themoviedb.org/t/p/original/3g5BWvW09MnpBcDiAqy0WBF5HZI.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/ltVm9tMK32x56ezpHgJp0U5YQdY.jpg',
            'rating' => 3,
            'trailer' => 'https://www.imdb.com/video/vi3711222553?playlistId=tt13668894&ref_=tt_pr_ov_vi',
            'yearproduced' => 2021,
            'director' => 'Jon Favreau',

        ]);


        Movie::create([

            'title' => 'Avengers: Infinity War',
            'body' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'cover' => 'https://www.imdb.com/title/tt4154756/mediaviewer/rm4044245504/',
            'hero' => 'https://www.themoviedb.org/t/p/original/k3xGG77CAiB0Wr2Y1H3ApihKTkk.jpg',
            'rating' => 5,
            'trailer' => 'https://www.imdb.com/video/vi528070681?playlistId=tt4154756&ref_=tt_pr_ov_vi',
            'yearproduced' => 2018,
            'director' => 'Anthony Russo',
        ]);



        Movie::create([

            'title' => 'Transformers: Dark of the Moon',
            'body' => 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.',
            'cover' => 'https://www.themoviedb.org/t/p/original/yUqm7eke9oL0ZmKJfgIJLs8WNuJ.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/af2duhAt9evRkxzkhxjgQ1naOM6.jpg',
            'rating' => 1,
            'trailer' => 'https://www.imdb.com/title/tt1399103/?ref_=nv_sr_srsg_7',
            'yearproduced' => 2011,
            'director' => 'Michael Bay',

        ]);


        Movie::create([

            'title' => 'Interstellar',
            'body' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanitys survival.',
            'cover' => 'https://www.themoviedb.org/t/p/original/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/pZvZjxPFfWWIwtPQodsNygQ6u5Z.jpg',
            'rating' => 2,
            'trailer' => 'https://www.imdb.com/video/vi1586278169?playlistId=tt0816692&ref_=tt_ov_vi',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',

        ]);


        Movie::create([

            'title' => 'Django Unchained',
            'body' => 'With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation-owner in Mississippi.',
            'cover' => 'https://www.themoviedb.org/t/p/original/7oWY8VDWW7thTzWh3OKYRkWUlD5.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/ltkWGokEIToUYyoUqc6PBI1kHPx.jpg',
            'rating' => 3,
            'trailer' => 'https://www.imdb.com/video/vi2291574553?playlistId=tt1853728&ref_=tt_pr_ov_vi',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',
        ]);
    }
}
