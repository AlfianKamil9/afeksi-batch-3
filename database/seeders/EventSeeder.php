<?php

namespace Database\Seeders;

use App\Models\Event;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            '2',
            'Afeksi Warrior - Valentine Edition',
            'ONLINE',
            'FREE',
            '2023-07-01',
            '2023-07-10',
            '2023-02-12',
            '09:30',
            '12:30',
            'CAMPAIGN.jpg',
            0,
            '
                <p style="text-align:justify;">Afeksi warriors adalah program volunteer untuk menyuarakan pesan terkait psikologi relasi yang dilakukan melalui postingan media sosial.</p>
            ',
            'DRAFT',
            'Afeksi-Warrior-Valentine-Edition',
            'CAMPAIGN',
            'Zoom',
            'https://bit.ly/AfeksiWarriorBatch1',
            null,
            null,
        ],
        [
                '1',
                'Self-Love: A Road to Relationship Goals',
                'ONLINE',
                'FREE',
                '2023-02-05',
                '2023-02-11',
                '2023-02-12',
                '09:30',
                '12:30',
                'TEST.PNG',
                0,
                ' Kalian pasti sudah sering mendengar istilah self-love. Tahu, nggak? Ternyata self-love itu juga berperan dalam membangun hubungan yang sehat loh! Gimana, ya, caranya? Trus, seperti apa, sih, sebenernya konsep self-love itu sendiri?🤔

                Jawabannya akan kalian dapatkan hanya di Afeksi Webinar Series 1.0 yang mengusung tema "Self-love: A Road to Relationship Goals"🥰 ',
                'DRAFT',
                'Self-Love:-A-Road-to-Relationship-Goals',
                'WEBINAR',
                'Zoom',
                'https://bit.ly/PendaftaranWebinarAfeksi1',
                281,
                'foto_webinar_1.png'
        ],
        // [
        //         '2',
        //         'Love Your Self Bro',
        //         'ONLINE',
        //         'PAID',
        //         '2023-07-06',
        //         '2023-07-10',
        //         '2023-07-21',
        //         '16:00',
        //         '19:00',
        //         'TEST.PNG',
        //         150000,
        //         ' Kalian pasti sudah sering mendengar istilah self-love. Tahu, nggak? Ternyata self-love itu juga berperan dalam membangun hubungan yang sehat loh! Gimana, ya, caranya? Trus, seperti apa, sih, sebenernya konsep self-love itu sendiri?🤔

        //         Jawabannya akan kalian dapatkan hanya di Afeksi Webinar Series 1.0 yang mengusung tema "Self-love: A Road to Relationship Goals"🥰 ',
        //         'DRAFT',
        //         'love-your-self-bro',
        //         'WEBINAR',
        //         'Zoom'
        // ],
        [
                '2',
                'Embracing Equality: A Pathway to Disolve Dating Violence',
                'ONLINE',
                'FREE',
                '2023-03-01',
                '2023-03-10',
                '2023-03-11',
                '09:30',
                '12:30',
                'WEBINAR-2.png',
                0,
                ' Kalian tau gak sih apa itu equality? Ternyata hal itu bakal pengaruh banget loh sama dating relationship😯

                Buat temen-temen yang sekarang sedang dalam hubungan dengan seseorang, dan ingin meningkatkan kualitas hubungan kalian, wajib banget tau tentang equality dan hubungannya dengan dating violence!

                Kalian bisa dapetin insightnya di Afeksi Webinar Series 2.0 yang mengusung tema

                ✨Embracing Equality: A Pathway to Dissolve Dating Violence✨ ',
                'DRAFT',
                'Embracing-Equality:-A-Pathway-to-Disolve-Dating-Violence',
                'WEBINAR',
                'Zoom',
                'bit.ly/PendaftaranWebinarAfeksi2',
                143,
                'foto_webinar_2.png'
        ],
        [
                '6',
                'Cheating: The Downfall of a Healthy Relationship',
                'ONLINE',
                'FREE',
                '2023-07-29',
                '2023-08-04',
                '2023-08-05',
                '09:30',
                '12:30',
                'WEBINAR-3.png',
                0,
                'Kalian tau kan akhir - akhir ini banyak banget pemberitaan terkait kasus perselingkuhan ? Dalam suatu hubungan, selingkuh itu sangat fatal loh akibatnya. Hubungan akan hancur dan terjadi perpisahan.
                Tapi kenapa yaa perselingkuhan bisa terjadi dan gimana yaa caranya untuk menjaga hubungan agar tidak terjadi perselingkuhan ?
                Nah! Jawabannya akan kalian dapatkan di Afeksi webinar Series 3.0 yang mengusung tema “Cheating: The Downfall of a Healthy Relationship” ',
                'DRAFT',
                'Cheating:-The-Downfall-of-a-Healthy-Relationship',
                'WEBINAR',
                'Zoom',
                'https://Bit.ly/PendaftaranWebinarAfeksi3',
                null,
                null,
        ],
        [
            '5',
            'Love bombing: A Trend for Tossing and Turning The Feelings',
            'ONLINE',
            'FREE',
            '2023-09-20',
            '2023-09-23',
            '2023-09-24',
            '09:30',
            '12:00',
            'WEBINAR-4.png',
            0,
            '📢 AFEKSI PROUDLY PRESENT: WEBINAR SERIES 4.0 📢
                Hi, Relationship Heroes!
                Kalian pasti udah gak asing dong dengan yang namanya Love Bombing, tapi kalian tau gak sih kalo ini salah satu bentuk toxic relationship juga loh! 😱
                Untuk bisa dapetin insight lebih mengenai Love Bombing, kalian bisa banget ikuti Afeksi Webinar Series 4.0 yang mengusung tema
                ✨Love bombing: A Trend for Tossing and Turning The Feelings ✨',
            'DRAFT',
            'Love-bombing:-A-Trend-for-Tossing-and-Turning-The-Feelings',
            'WEBINAR',
            'Zoom',
            'https://Bit.ly/PendaftaranWebinarAfeksi4',
            null,
            null,
        ]
    ];


        for ($i=0; $i < 5 ; $i++) { 
            Event::create([
            'category_event_id' => $data[$i][0],
            'title_event' => $data[$i][1],
            'slug_event'=> $data[$i][13],
            'time_category_event' => $data[$i][2],
            'pay_category_event' => $data[$i][3],
            'registration_start' => $data[$i][4],
            'registration_end' => $data[$i][5],
            'date_event' => $data[$i][6],
            'time_start' => $data[$i][7],
            'time_finish' => $data[$i][8],
            'cover_event' => $data[$i][9],
            'price_event'=> $data[$i][10],
            'description_event' => $data[$i][11],
            'status_event' => $data[$i][12],
            'activity_category_event' => $data[$i][14],
            'is_place' => $data[$i][15],
            'isLink' => $data[$i][16],
            'partisipan' => $data[$i][17],
            'foto_acara' => $data[$i][18]
        ]);
        }

        
    }
}
