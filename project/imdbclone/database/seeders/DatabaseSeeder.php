<?php

namespace Database\Seeders;

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

        Movie::create([

            'title' => 'Inception',
            'body' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea
             into the mind of a C.E.O,
             but his tragic past may doom the project and his team to disaster.',
            'pics' => 'https://www.themoviedb.org/t/p/original/edv5CZvWj09upOsy2Y6IwDhK8bt.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/YoHD9XEInc0',
            'yearproduced' => 2010,
            'director' => 'Christopher Nolan'
        ]);




        Movie::create([
            'title' => 'Watchmen',
            'body' => 'In 1985 where former superheroes exist the murder of a colleague sends active vigilante Rorschach into his own sprawling investigation, uncovering something that could completely change the course of history as we know it.',
            'pics' => 'https://www.themoviedb.org/t/p/original/u0ROjy3KPzMDTipqCrwD8LwkKSQ.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/wglmbroElU0',
            'yearproduced' => 2010,
            'director' => 'Zack Snyder',
        ]);


        Movie::create([
            'title' => 'Pirates of the Caribbean',
            'body' => 'Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governors daughter,
             from Jacks former pirate allies, who are now undead.',
            'pics' => 'https://www.themoviedb.org/t/p/original/AdRQGfT05z6L9gIpUpkh4McMmpm.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/naQr0uTrH_s',
            'yearproduced' => 2003,
            'director' => 'Gore Verbinski',
        ]);

        Movie::create([

            'title' => 'Spectre',
            'body' => 'A cryptic message from James Bonds past sends him on a trail to uncover the existence of a sinister organisation named SPECTRE With a new threat dawning Bond learns the terrible truth
             about the author of all his pain in his most recent missions.',
            'pics' => 'https://www.themoviedb.org/t/p/original/qmMNwts6hlG0bdj377jt9Ne3RM1.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/ujmoYyEyDP8',
            'yearproduced' => 2015,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'The Matrix Revolutions',
            'body' => 'The human city of Zion defends itself against the massive invasion of the machines as Neo fights to end the war at another front while also opposing the rogue Agent Smith.',
            'pics' => 'https://www.themoviedb.org/t/p/original/qEWiBXJGXK28jGBAm8oFKKTB0WD.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/hMbexEPAOQI',
            'yearproduced' => 2003,
            'director' => 'Lana Wachowsk'
        ]);

        Movie::create([

            'title' => 'Looper',
            'body' => 'In 2074 when the mob wants to get rid of someone, the target is sent into the past, where a hired gun awaits - someone like Joe - who one day learns
            the mob wants to close the loop by sending back Joes future self for assassination.',
            'pics' => 'https://www.themoviedb.org/t/p/original/en6wDdya9e2kDV4zn8vLoSrOc6p.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/2iQuhsmtfHw',
            'yearproduced' => 2012,
            'director' => 'Rian Johnson',
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Return of the King',
            'body' => 'Gandalf and Aragorn lead the World of Men against Saurons army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
            'pics' => 'https://www.themoviedb.org/t/p/original/wNB551TsEb7KFU3an5LwOrgvUpn.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/r5X-hFf6Bwo',
            'yearproduced' => 2003,
            'director' => 'Peter Jackson'
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Two Towers',
            'body' => 'Gandalf and Aragorn lead the World of Men against Saurons army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
            'pics' => 'https://www.themoviedb.org/t/p/original/pcXIJt2E09eI3FFxcxjOY0beCxY.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/LbfMDwc4azU',
            'yearproduced' => 2005,
            'director' => 'Peter Jackson'
        ]);

        Movie::create([

            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'body' => ' Young hobbit Frodo Baggins, after inheriting a mysterious ring from his uncle Bilbo, must leave his home in order to keep it from falling into the hands of its evil creator. Along the way, a fellowship is formed to protect the ringbearer and make sure that the ring arrives at its final destination: Mt. Doom, the only place where it can be destroyed.',
            'pics' => 'https://www.themoviedb.org/t/p/original/b4XZizlvqQkZno8cT3VPBYTGudB.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/V75dMMIW2B4',
            'yearproduced' => 2001,
            'director' => 'Peter Jackson'
        ]);
        Movie::create([

            'title' => 'DEADPOOL',
            'body' => 'A wisecracking mercenary gets experimented on and becomes immortal but ugly
                and sets out to track down the man who ruined his looks.',
            'pics' => 'https://www.themoviedb.org/t/p/original/d2V5MyJxPM1GX7XcCNrTFHhYe3T.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/ONHBaC-pfsk',
            'yearproduced' => 2016,
            'director' => 'Tom Miller',
        ]);

        Movie::create([

            'title' => 'Dracula Untold',
            'body' => 'As his kingdom is being threatened by the Turks, young prince Vlad Tepes must become a monster feared by his own people in order to obtain the power needed to protect his own family,
            and the families of his kingdom.',
            'pics' => 'https://www.themoviedb.org/t/p/original/byHMHaZIfe2vKoSrDGYwFj2f3Pw.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/_2aWqecTTuE',
            'yearproduced' => 2014,
            'director' => 'Gary Shore',
        ]);

        Movie::create([

            'title' => '1917',
            'body' => 'April 6th, 1917. As an infantry battalion assembles to wage war deep in enemy territory, two soldiers are assigned to race against
                time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.',
            'pics' => 'https://www.themoviedb.org/t/p/original/457TspOr19Ea8QTprdDxtTg5iC9.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/gZjQROMAh_s',
            'yearproduced' => 2019,
            'director' => 'Sam Mendes',
        ]);

        Movie::create([

            'title' => 'Venom: Let There Be Carnage',
            'body' => 'Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.',
            'pics' => 'https://www.themoviedb.org/t/p/original/fQmJJToZ1hAgTJiUU1pIDJWqTU6.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/-FmWuCgJmxo',
            'yearproduced' => 2021,
            'director' => 'Andy Serkis',
        ]);

        Movie::create([

            'title' => 'The Father',
            'body' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances,
                he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'pics' => 'https://www.themoviedb.org/t/p/original/pr3bEQ517uMb5loLvjFQi8uLAsp.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/4TZb7YfK-JI',
            'yearproduced' => 2020,
            'director' => 'Florian Zeller',
        ]);

        Movie::create([

            'title' => 'Step Brothers',
            'body' => 'Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.',
            'pics' => 'https://www.themoviedb.org/t/p/original/jV0eDViuTRf9cmj4H0JNvbvaNbR.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/8QKE96wZTkw',
            'yearproduced' => 2008,
            'director' => 'Adam McKay',
        ]);

        Movie::create([

            'title' => 'The Shining',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'pics' => 'https://www.themoviedb.org/t/p/original/hCE09C7pOYkiXVSY0HjAUcmTBh0.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/5Cb3ik6zP2I',
            'yearproduced' => 1998,
            'director' => 'Stanley Kubrick',
        ]);

        Movie::create([

            'title' => 'Parasite',
            'body' => ' A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'pics' => 'https://www.themoviedb.org/t/p/original/9PSifrJfKl8sy9tBOd5Vcg0jbN6.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/5xH0HfJHsaY',
            'yearproduced' => 2019,
            'director' => 'Bong Joon Ho',

        ]);

        Movie::create([

            'title' => 'BOBA FETT',
            'body' => 'Bounty hunter Boba Fett & mercenary Fennec Shand navigate the underworld when they return to Tatooine to claim Jabba the Hutts old turf.',
            'pics' => 'https://www.themoviedb.org/t/p/original/nTPczHWsNiaG7kackCTkQGOtR5L.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/rOJ1cw6mohw',
            'yearproduced' => 2021,
            'director' => 'Jon Favreau',

        ]);


        Movie::create([

            'title' => 'The Avengers',
            'body' => 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!',
            'pics' => 'https://www.themoviedb.org/t/p/original/RYMX2wcKCBAr24UyPD7xwmjaTn.jpg',
            'rating' => 4,
            'trailer' => 'https://www.youtube.com/embed/eOrNdBpGMv8',
            'yearproduced' => 2012,
            'director' => 'Joss Whedon',

        ]);


        Movie::create([

            'title' => 'Avengers: Infinity War',
            'body' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'pics' => 'https://www.themoviedb.org/t/p/original/ypX47SBSThTbB40AIJ22eOUCpjU.jpg',
            'rating' => 5,
            'trailer' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
            'yearproduced' => 2018,
            'director' => 'Anthony Russo',
        ]);



        Movie::create([

            'title' => 'Transformers: Dark of the Moon',
            'body' => 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.',
            'pics' => 'https://www.themoviedb.org/t/p/original/wzF3o2eulc5gmOIaNCViqO3nLzK.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/bTIrEZM-cFE',
            'yearproduced' => 2011,
            'director' => 'Michael Bay',

        ]);


        Movie::create([

            'title' => 'Interstellar',
            'body' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanitys survival.',
            'pics' => 'https://www.themoviedb.org/t/p/original/th5UkDLIa7yyma9UYDAWaIgDh6z.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/zSWdZVtXT7E',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',

        ]);


        Movie::create([

            'title' => 'Django Unchained',
            'body' => 'With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation-owner in Mississippi.',
            'pics' => 'https://www.themoviedb.org/t/p/original/3tIZj65HQGx6CKUMhlP0HUhAlzi.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/0fUCuvNlOCg',
            'yearproduced' => 2014,
            'director' => 'Christopher Nolan',
        ]);


        Movie::create([

            'title' => 'Harry Potter and the Chamber of Secrets',
            'body' => 'Cars fly, trees fight back, and a mysterious house-elf comes to warn Harry Potter at the start of his second year at Hogwarts. Adventure and danger await when bloody writing on a wall announces: The Chamber Of Secrets Has Been Opened. To save Hogwarts will require all of Harry, Ron and Hermione’s magical abilities and courage.',
            'pics' => 'https://www.themoviedb.org/t/p/original/csOv5H7R2zdnKaYuTrGVWohmo8d.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/kBltxS8HfQ4',
            'yearproduced' => 2002,
            'director' => 'Chris Columbus',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Philosophers Stone',
            'body' => 'Harry Potter has lived under the stairs at his aunt and uncles house his whole life. But on his 11th birthday, he learns he is a powerful wizard—with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the schools kindly headmaster, Harry uncovers the truth about his parents deathsand about the villain who is to blame.',
            'pics' => 'https://www.themoviedb.org/t/p/original/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/VyHV0BRtdxo',
            'yearproduced' => 2001,
            'director' => 'Chris Columbus',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Half-Blood Prince',
            'body' => 'As Lord Voldemort tightens his grip on both the Muggle and wizarding worlds, Hogwarts is no longer a safe haven. Harry suspects perils may even lie within the castle, but Dumbledore is more intent upon preparing him for the final battle fast approaching. Together they work to find the key to unlock Voldemorts defenses and to this end, Dumbledore recruits his old friend and colleague Horace Slughorn, whom he believes holds crucial information. Even as the decisive showdown looms, romance blossoms for Harry, Ron, Hermione and their classmates. Love is in the air, but danger lies ahead and Hogwarts may never be the same again.',
            'pics' => 'https://www.themoviedb.org/t/p/original/o2j49x3HYJC2VH689rYxmswtSgS.jpg',
            'rating' => 1,
            'trailer' => 'https://www.youtube.com/embed/ZgMIlFDIPNc',
            'yearproduced' => 2009,
            'director' => 'David Yates',
        ]);


        Movie::create([

            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'body' => 'Year three at Hogwarts means new fun and challenges as Harry learns the delicate art of approaching a Hippogriff, transforming shape-shifting Boggarts into hilarity and even turning back time. But the term also brings danger: soul-sucking Dementors hover over the school, an ally of the accursed He-Who-Cannot-Be-Named lurks within the castle walls, and fearsome wizard Sirius Black escapes Azkaban. And Harry will confront them all.',
            'pics' => 'https://www.themoviedb.org/t/p/original/o2j49x3HYJC2VH689rYxmswtSgS.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/1ZdlAg3j8nI',
            'yearproduced' => 2004,
            'director' => 'David Yates',
        ]);

        Movie::create([

            'title' => 'Harry Potter and the Goblet of Fire',
            'body' => 'When Harry Potters name emerges from the Goblet of Fire, he becomes a competitor in a grueling battle for glory among three wizarding schools—the Triwizard Tournament. But since Harry never submitted his name for the Tournament, who did Now Harry must confront a deadly dragon, fierce water demons and an enchanted maze only to find himself in the cruel grasp of He Who Must Not Be Named.',
            'pics' => 'https://www.themoviedb.org/t/p/original/rmSDLpObFgPnybpi9aft3jPYT7E.jpg',
            'rating' => 2,
            'trailer' => 'https://www.youtube.com/embed/3EGojp4Hh6I',
            'yearproduced' => 2004,
            'director' => 'Mike Newell',
        ]);


        Movie::create([

            'title' => 'X-Men: Apocalypse',
            'body' => 'After the re-emergence of the world is first mutant, world-destroyer Apocalypse, the X-Men must unite to defeat his extinction level plan.',
            'pics' => 'https://www.themoviedb.org/t/p/original/rmSDLpObFgPnybpi9aft3jPYT7E.jpg',
            'rating' => 3,
            'trailer' => 'https://www.youtube.com/embed/COvnHv42T-A',
            'yearproduced' => 2016,
            'director' => 'Bryan Singer',
        ]);
    }
}


// Movie::create ([
//     'category id' ->$action->id,
//     'body' => ''
//     'pics' => ''
//     'genre' => ''
//     'rating' => ''
//     'trailer' => ''
//     'yearproduced' => ''
//     'director' => ''



// ]);