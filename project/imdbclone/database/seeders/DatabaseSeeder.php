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
            'cover' => 'https://www.themoviedb.org/t/p/original/edv5CZvWj09upOsy2Y6IwDhK8bt.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/ii8QGacT3MXESqBckQlyrATY0lT.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/YoHD9XEInc0',
            'yearproduced' => 2010,
            'director' => 'Christopher Nolan'
        ]);




        Movie::create([
            'title' => 'Watchmen',
            'body' => 'In 1985 where former superheroes exist the murder of a colleague sends active vigilante Rorschach into his own sprawling investigation, uncovering something that could completely change the course of history as we know it.',
            'cover' => 'https://www.themoviedb.org/t/p/original/zcCGhnlO4qi8ZqunUHAnYkwUtRX.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/gFeaXBnOO14aOQhMQrr5tbyhMTw.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/wglmbroElU0',
            'yearproduced' => 2010,
            'director' => 'Zack Snyder',
        ]);


        Movie::create([
            'title' => 'Pirates of the Caribbean',
            'body' => 'Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governors daughter,
             from Jacks former pirate allies, who are now undead.',
            'cover' => 'https://www.themoviedb.org/t/p/original/l3peI54mf6Z9EBSvS3hnRmOBbFT.jpg',
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
            'cover' => 'https://www.themoviedb.org/t/p/original/xfrnnrKuoS1v6x2u2Y50RU50qry.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/8lBViysvNJBPkl6zG1LVAaW3qhj.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/ujmoYyEyDP8',
            'yearproduced' => 2015,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'The Matrix Revolutions',
            'body' => 'The human city of Zion defends itself against the massive invasion of the machines as Neo fights to end the war at another front while also opposing the rogue Agent Smith.',
            'cover' => 'https://www.themoviedb.org/t/p/original/en6wDdya9e2kDV4zn8vLoSrOc6p.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/kJYPag1YrA4PsXIftFdq3QEaanV.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/hMbexEPAOQI',
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
            'trailer' => 'https://www.youtube.com/embed/2iQuhsmtfHw',
            'yearproduced' => 2012,
            'director' => 'Rian Johnson',
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Return of the King',
            'body' => 'Gandalf and Aragorn lead the World of Men against Saurons army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
            'cover' => 'https://www.themoviedb.org/t/p/original/uexxR7Kw1qYbZk0RYaF9Rx5ykbj.jpg',
            'hero' =>  'https://www.themoviedb.org/t/p/original/lXhgCODAbBXL5buk9yEmTpOoOgR.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/r5X-hFf6Bwo',
            'yearproduced' => 2003,
            'director' => 'Peter Jackson'
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'body' => 'Young hobbit Frodo Baggins, after inheriting a mysterious ring from his uncle Bilbo, must leave his home in order to keep it from falling into the hands of its evil creator. Along the way, a fellowship is formed to protect the ringbearer and make sure that the ring arrives at its final destination: Mt. Doom, the only place where it can be destroyed.',
            'cover' => 'https://www.themoviedb.org/t/p/original/b4XZizlvqQkZno8cT3VPBYTGudB.jpg',
            'hero' =>  'https://www.themoviedb.org/t/p/original/ua5EHfleb44L5hfHPs2BPqRAove.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/V75dMMIW2B4',
            'yearproduced' => 2001,
            'director' => 'Peter Jackson'
        ]);


        Movie::create([

            'title' => 'The Lord of the Rings: The Two Towers',
            'body' => 'Frodo and Sam are trekking to Mordor to destroy the One Ring of Power while Gimli, Legolas and Aragorn search for the orc-captured Merry and Pippin. All along, nefarious wizard Saruman awaits the Fellowship members at the Orthanc Tower in Isengard.',
            'cover' => 'https://www.themoviedb.org/t/p/original/rrGlNlzFTrXFNGXsD7NNlxq4BPb.jpg',
            'hero' =>  'https://www.themoviedb.org/t/p/original/7tNTPZMb13W0AhkcuoL6myRrNRr.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/LbfMDwc4azU',
            'yearproduced' => 2002,
            'director' => 'Peter Jackson'
        ]);


        Movie::create([

            'title' => 'DEADPOOL',
            'body' => 'A wisecracking mercenary gets experimented on and becomes immortal but ugly
                and sets out to track down the man who ruined his looks.',
            'cover' => 'https://www.themoviedb.org/t/p/original/d2V5MyJxPM1GX7XcCNrTFHhYe3T.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/wsPO5Jny82b0pksjSvjUHEYHDkz.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/ONHBaC-pfsk',
            'yearproduced' => 2016,
            'director' => 'Tom Miller',
        ]);

        Movie::create([

            'title' => 'Dracula Untold',
            'body' => 'As his kingdom is being threatened by the Turks, young prince Vlad Tepes must become a monster feared by his own people in order to obtain the power needed to protect his own family,
            and the families of his kingdom.',
            'cover' => 'https://www.themoviedb.org/t/p/original/AuGiPiGMYMkSosOJ3BQjDEAiwtO.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/Ap0jDQIn8Jovz3MyejAepCcZrTU.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/_2aWqecTTuE',
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
            'trailer' => 'https://www.youtube.com/embed/YqNYrYUiMfg',
            'yearproduced' => 2019,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'Venom: Let There Be Carnage',
            'body' => 'Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.',
            'cover' => 'https://www.themoviedb.org/t/p/original/rjkmN1dniUHVYAtwuV3Tji7FsDO.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/vIgyYkXkg6NC2whRbYjBD7eb3Er.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/-FmWuCgJmxo',
            'yearproduced' => 2021,
            'director' => 'Andy Serkis',
        ]);

        Movie::create([

            'title' => 'The Father',
            'body' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances,
                he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'cover' => 'https://www.themoviedb.org/t/p/original/uxWXW1YYQENSv7OzHB4Hds0bK3b.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/6SP1bFfoXhW7Ni7fPw5GjY7ACBS.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/4TZb7YfK-JI',
            'yearproduced' => 2020,
            'director' => 'Florian Zeller',
        ]);

        Movie::create([

            'title' => 'Step Brothers',
            'body' => 'Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.',
            'cover' => 'https://www.themoviedb.org/t/p/original/jV0eDViuTRf9cmj4H0JNvbvaNbR.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/n53EPBWZiz69sYzNDZmamYHdo6Q.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/CewglxElBK0',
            'yearproduced' => 2008,
            'director' => 'Adam McKay',
        ]);

        Movie::create([

            'title' => 'The Shining',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'cover' => 'https://www.themoviedb.org/t/p/original/5xcXvTErivIgRchsaw9qaT3NflE.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/mmd1HnuvAzFc4iuVJcnBrhDNEKr.jpg',
            'rating' => 1,
            'trailer' => 'https://www.imdb.com/video/vi2689121305?playlistId=tt0081505&ref_=tt_ov_vi',
            'yearproduced' => 2008,
            'director' => 'Stanley Kubrick',
        ]);

        Movie::create([

            'title' => 'Parasite',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'cover' => 'https://www.themoviedb.org/t/p/original/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/TU9NIjwzjoKPwQHoHshkFcQUCG.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/5Cb3ik6zP2I',
            'yearproduced' => 2019,
            'director' => 'Bong Joon Ho',

        ]);

        Movie::create([

            'title' => 'BOBA FETT',
            'body' => 'Bounty hunter Boba Fett & mercenary Fennec Shand navigate the underworld when they return to Tatooine to claim Jabba the Hutts old turf.',
            'cover' => 'https://www.themoviedb.org/t/p/original/jhgC70TurqELEc7vuepAjVpKakH.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/rCwExhj5p9EJhCcHZQCpd06j0VJ.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/rOJ1cw6mohw',
            'yearproduced' => 2021,
            'director' => 'Jon Favreau',

        ]);


        Movie::create([

            'title' => 'Mothering Sunday',
            'body' => 'Set over a day in 1924, the story follows Jane Fairchild, a maid in the Niven household, who has the day off to celebrate Mothering Sunday while Mr. and Mrs. Niven attend a lunch to celebrate the engagement of their neighbour’s only remaining son, Paul, to Emma Hobday. Jane rejoices at her freedom on an unseasonably hot, beautiful spring day. But, she has no mother to go to. For almost seven years she has – joyfully and without shame – been Paul’s lover. Like the Nivens, Paul belongs to England’s old money aristocracy, whereas Jane was orphaned at birth. With the house conveniently empty, they can finally meet in Paul’s bedroom for the first time. Today will be their last as lovers. It is also the day that will mark the beginning of Jane’s transformation as the story unfolds through the hours of clandestine passion.',
            'cover' => 'https://www.themoviedb.org/t/p/original/3g5BWvW09MnpBcDiAqy0WBF5HZI.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/ltVm9tMK32x56ezpHgJp0U5YQdY.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/Zcf6GtNvMCQ',
            'yearproduced' => 2021,
            'director' => 'Jon Favreau',

        ]);


        Movie::create([

            'title' => 'Avengers: Infinity War',
            'body' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'cover' => 'https://www.themoviedb.org/t/p/original/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/k3xGG77CAiB0Wr2Y1H3ApihKTkk.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
            'yearproduced' => 2018,
            'director' => 'Anthony Russo',
        ]);



        Movie::create([

            'title' => 'Transformers: Dark of the Moon',
            'body' => 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.',
            'cover' => 'https://www.themoviedb.org/t/p/original/yUqm7eke9oL0ZmKJfgIJLs8WNuJ.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/af2duhAt9evRkxzkhxjgQ1naOM6.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/bTIrEZM-cFE',
            'yearproduced' => 2011,
            'director' => 'Michael Bay',

        ]);


        Movie::create([

            'title' => 'Interstellar',
            'body' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanitys survival.',
            'cover' => 'https://www.themoviedb.org/t/p/original/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/pZvZjxPFfWWIwtPQodsNygQ6u5Z.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/zSWdZVtXT7E',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',

        ]);


        Movie::create([

            'title' => 'Django Unchained',
            'body' => 'With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation-owner in Mississippi.',
            'cover' => 'https://www.themoviedb.org/t/p/original/7oWY8VDWW7thTzWh3OKYRkWUlD5.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/ltkWGokEIToUYyoUqc6PBI1kHPx.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/0fUCuvNlOCg',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Goblet of Fire',
            'body' => 'When Harry Potters name emerges from the Goblet of Fire, he becomes a competitor in a grueling battle for glory among three wizarding schools—the Triwizard Tournament. But since Harry never submitted his name for the Tournament, who did? Now Harry must confront a deadly dragon, fierce water demons and an enchanted maze only to find himself in the cruel grasp of He Who Must Not Be Named.',
            'cover' => 'https://www.themoviedb.org/t/p/original/n6vseyr4uHljH68HeNt1edESAkD.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/5rrGVmRUuCKVbqUu41XIWTXJmNA.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/3EGojp4Hh6I',
            'yearproduced' => 2005,
            'director' => 'Mike Newell',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Chamber of Secrets',
            'body' => ' Cars fly, trees fight back, and a mysterious house-elf comes to warn Harry Potter at the start of his second year at Hogwarts. Adventure and danger await when bloody writing on a wall announces: The Chamber Of Secrets Has Been Opened. To save Hogwarts will require all of Harry, Ron and Hermione’s magical abilities and courage.',
            'cover' => 'https://www.themoviedb.org/t/p/original/sdEOH0992YZ0QSxgXNIGLq1ToUi.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/5rrGVmRUuCKVbqUu41XIWTXJmNA.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/1bq0qff4iF8',
            'yearproduced' => 2002,
            'director' => 'Mike Newell',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Order of the Phoenix',
            'body' => 'The rebellion begins! Lord Voldemort has returned, but the Ministry of Magic is doing everything it can to keep the wizarding world from knowing the truth – including appointing Ministry official Dolores Umbridge as the new Defence Against the Dark Arts professor at Hogwarts. When Umbridge refuses to teach practical defensive magic, Ron and Hermione convince Harry to secretly train a select group of students for the wizarding war that lies ahead. A terrifying showdown between good and evil awaits in this enthralling film version of the fifth novel in J.K. Rowling’s Harry Potter series. Prepare for battle!',
            'cover' => 'https://www.themoviedb.org/t/p/original/s836PRwHkLjrOJrfW0eo7B4NJOf.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/82a7AGF081PzFfoM8GAVGMvZNYK.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/y6ZW7KXaXYk',
            'yearproduced' => 2007,
            'director' => 'David Yates',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Half-Blood Prince',
            'body' => ' As Lord Voldemort tightens his grip on both the Muggle and wizarding worlds, Hogwarts is no longer a safe haven. Harry suspects perils may even lie within the castle, but Dumbledore is more intent upon preparing him for the final battle fast approaching. Together they work to find the key to unlock Voldemorts defenses and to this end, Dumbledore recruits his old friend and colleague Horace Slughorn, whom he believes holds crucial information. Even as the decisive showdown looms, romance blossoms for Harry, Ron, Hermione and their classmates. Love is in the air, but danger lies ahead and Hogwarts may never be the same again.',
            'cover' => 'https://www.themoviedb.org/t/p/original/z7uo9zmQdQwU5ZJHFpv2Upl30i1.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/555KVhwc2dbAq5lCkdeRQOJmreG.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/ZgMIlFDIPNc',
            'yearproduced' => 2009,
            'director' => 'David Yates',
        ]);

        Movie::create([

            'title' => 'The Grudge',
            'body' => 'An American nurse living and working in Tokyo is exposed to a mysterious supernatural curse, one that locks a person in a powerful rage before claiming their life and spreading to another victim.',
            'cover' => 'https://www.themoviedb.org/t/p/original/e8OLh49AJKIATBSAso6EWr1YeWH.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/3F2BYZy8H74lWUEKfP5lTPFxEq8.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/ZgMIlFDIPNc',
            'yearproduced' => 2005,
            'director' => 'Takashi Shimizu',
        ]);

        Movie::create([

            'title' => 'Zack and Miri Make a Porno',
            'body' => 'Lifelong platonic friends Zack and Miri look to solve their respective cash-flow problems by making an adult film together. As the cameras roll, however, the duo begin to sense that they may have more feelings for each other than they previously thought.',
            'cover' => 'https://www.themoviedb.org/t/p/original/40qxr2p2s297Q1mWFJOsRatQPK0.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/qCSLKtNrL9xIyw2kjzi0GEUvqXx.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/ZgMIlFDIPNc',
            'yearproduced' => 2008,
            'director' => 'Kevin Smith',
        ]);

        Movie::create([

            'title' => 'The Royal Treatment ',
            'body' => ' Isabella runs her own salon and isn’t afraid to speak her mind, while Prince Thomas runs his own country and is about to marry for duty rather than love. When Izzy and her fellow stylists get the opportunity of a lifetime to do the hair for the royal wedding, she and Prince Thomas learn that taking control of their own destiny requires following their hearts.',
            'cover' => 'https://www.themoviedb.org/t/p/original/lyFrt4xWSPMbeFHvntjPHRjQAI1.jpg',
            'hero' => 'https://www.themoviedb.org/t/p/original/7VwrJUAh7ed1ndbPmb0HDO0Bh6r.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/KWxJXZ3S3-g',
            'yearproduced' => 2022,
            'director' => 'Rick Jacobs',
        ]);
    }
}
